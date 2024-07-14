@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
                <h1>Edit Product</h1>
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="qty">Stok</label>
                        <input type="text" class="form-control" id="qty" name="qty" value="{{ $product->qty }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="original_price">Original Price</label>
                        <input type="text" class="form-control" id="original_price" name="original_price"
                            value="{{ $product->original_price }}" required>
                    </div>
                    <div class="form-group">
                        <label for="sale_price">Sale Price</label>
                        <input type="text" class="form-control" id="sale_price" name="sale_price"
                            value="{{ $product->sale_price }}" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        <img src="{{ asset('storage/' . $product->image) }}" width="100" class="mt-2">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
