@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Produk</h1>
        <div class="d-flex justify-content-between">

            <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
            <div>
                <form class="d-flex " role="search">
                    <input class="form-control me-2 mr-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Stok</th>
                    <th>Original Price</th>
                    <th>Sale Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>Rp{{ number_format($product->original_price, 0, ',', '.') }}</td>
                        <td>Rp{{ number_format($product->sale_price, 0, ',', '.') }}</td>
                        <td><img src="{{ asset('storage/' . $product->image) }}" width="100"></td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
