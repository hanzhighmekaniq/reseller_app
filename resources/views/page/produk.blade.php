@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Products</h1>
        <input type="text" id="search" class="form-control" placeholder="Search by name" value="{{ request()->query('search') }}">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
        <div id="product-list">
            @include('page.product-list', ['products' => $products])
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('search').addEventListener('input', function() {
            var query = this.value;
            fetch(`/products?search=${query}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('product-list').innerHTML = html;
            });
        });
    </script>
@endsection
