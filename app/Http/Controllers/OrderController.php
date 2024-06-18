<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'pemilik') {
            $orders = Order::all();
        } elseif ($user->role == 'bos') {
            $orders = Order::where('user_id', $user->id)
                        ->orWhereHas('user', function ($query) use ($user) {
                            $query->where('bos_id', $user->id);
                        })
                        ->get();
        } else {
            $orders = $user->orders;
        }

        return view('page.kelolapenjualan', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        $bos = User::where('role', 'bos')->get();
        return view('page.buatpenjualan', compact('products', 'bos'));
    }

    public function store(Request $request)
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

    public function report()
    {
        $user = Auth::user();

        if ($user->role == 'pemilik') {
            $bosOrders = User::where('role', 'bos')->with(['orders' => function($query) {
                $query->whereDate('created_at', now()->toDateString());
            }])->get();
        } elseif ($user->role == 'bos') {
            $anggotaOrders = User::where('bos_id', $user->id)->with(['orders' => function($query) {
                $query->whereDate('created_at', now()->toDateString());
            }])->get();
        } else {
            return redirect()->back();
        }

        return view('orders.report', compact('bosOrders', 'anggotaOrders'));
    }
}
