<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function createOwner()
    {
        $products = Product::all();
        $bos = User::where('role', 'bos')->get();
        return view('page.buatpenjualan', compact('products', 'bos'));
    }

    public function storeOwner(Request $request)
    {
        $request->validate([
            'bos_id' => 'required|exists:users,id',
            'product_id' => 'required|array',
            'product_id.*' => 'exists:products,id',
            'quantity' => 'required|array',
            'quantity.*' => 'integer|min:1',
        ]);

        foreach ($request->product_id as $key => $product_id) {
            $product = Product::find($product_id);
            $totalPrice = $product->price * $request->quantity[$key];

            Order::create([
                'product_id' => $product_id,
                'user_id' => $request->bos_id,
                'quantity' => $request->quantity[$key],
                'total_price' => $totalPrice,
            ]);
        }

        return redirect()->route('kelolapenjualan')->with('success', 'Penjualan Telah Dibuat');
    }

    public function indexOwner()
    {
        $orders = Order::whereDate('created_at', now()->toDateString())->get();
        return view('page.kelolapenjualan', compact('orders'));
    }

    public function createAdmin()
    {
        $products = Product::all();
        $anggota = User::where('role', 'anggota')->get();
        return view('page.buatpenjualanadmin', compact('products', 'anggota'));
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'anggota_id' => 'required|exists:users,id',
            'product_id' => 'required|array',
            'product_id.*' => 'exists:products,id',
            'quantity' => 'required|array',
            'quantity.*' => 'integer|min:1',
        ]);

        foreach ($request->product_id as $key => $product_id) {
            $product = Product::find($product_id);
            $totalPrice = $product->price * $request->quantity[$key];

            Order::create([
                'product_id' => $product_id,
                'user_id' => $request->anggota_id,
                'quantity' => $request->quantity[$key],
                'total_price' => $totalPrice,
            ]);
        }

        return redirect()->route('kelolapenjualanadmin')->with('success', 'Penjualan Telah Dibuat');
    }

    public function indexAdmin()
    {
        $user = Auth::user();
        $today = now()->toDateString(); // Ambil tanggal hari ini dalam format YYYY-MM-DD

        if ($user->role == 'bos') {
            $orders = Order::where('user_id', $user->id)
                ->orWhereHas('user', function ($query) use ($user) {
                    $query->where('bos_id', $user->id);
                })
                ->whereDate('created_at', $today)
                ->get();
        }

        return view('page.kelolapenjualanadmin', compact('orders'));
    }
}
