@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="p-2 text-primary fw-bold border-bottom border-primary mb-4">Laporkan Penjualan Reseller</h2>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('reports.storeAnggota') }}" method="POST" id="salesForm">
                        @csrf
                        <div class="form-group">
                            <label for="total_sales">Total Sales (Total Barang yang Dibawa)</label>
                            <input type="number" class="form-control" id="total_sales" name="total_sales" required>
                        </div>
                        <div id="productsContainer">
                            <div class="product-item">
                                <div class="form-group">
                                    <label for="product_id">Produk</label>
                                    <select class="form-control" name="products[0][product_id]" required>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sold">Sold</label>
                                    <input type="number" class="form-control" name="products[0][sold]" required>
                                </div>
                                <div class="form-group">
                                    <label for="return">Return</label>
                                    <input type="number" class="form-control" name="products[0][return]" required>
                                </div>
                                <button type="button" class="btn btn-danger remove-product">Hapus Produk</button>
                                <hr>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" id="addProduct">Tambah Produk</button>
                        <button type="submit" class="btn btn-success">Laporkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let productIndex = 1;
    document.getElementById('addProduct').addEventListener('click', function() {
        const container = document.getElementById('productsContainer');
        const newProduct = document.createElement('div');
        newProduct.classList.add('product-item');
        newProduct.innerHTML = `
            <div class="form-group">
                <label for="product_id">Produk</label>
                <select class="form-control" name="products[${productIndex}][product_id]" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="sold">Sold</label>
                <input type="number" class="form-control" name="products[${productIndex}][sold]" required>
            </div>
            <div class="form-group">
                <label for="return">Return</label>
                <input type="number" class="form-control" name="products[${productIndex}][return]" required>
            </div>
            <button type="button" class="btn btn-danger remove-product">Hapus Produk</button>
            <hr>
        `;
        container.appendChild(newProduct);
        productIndex++;
    });

    document.getElementById('productsContainer').addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-product')) {
            event.target.closest('.product-item').remove();
        }
    });
</script>
@endsection
