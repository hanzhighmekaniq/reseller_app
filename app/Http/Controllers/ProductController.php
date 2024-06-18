<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        if ($search) {
            $products = Product::where('name', 'LIKE', "%{$search}%")->get();
        } else {
            $products = Product::all();
        }

        if ($request->ajax()) {
            return view('page.product-list', compact('products'))->render();
        }

        return view('page.produk', compact('products'));
    }
    public function create()
    {
        return view('page.createproduk');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'original_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Product::create([
            'name' => $request->name,
            'qty' => $request->qty,
            'original_price' => $request->original_price,
            'sale_price' => $request->sale_price,
            'image' => $imagePath,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('page.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('page.editproduk', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'original_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'image' => 'image|mimes:png,jpg,jpeg,webp,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $product->image = $imagePath;
        }

        $product->update([
            'name' => $request->name,
            'qty'=> $request -> qty,
            'original_price' => $request->original_price,
            'sale_price' => $request->sale_price,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
