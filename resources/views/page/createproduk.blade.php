@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="{{ url('/products') }}" class="text-decoration-none">
            <h5 class="fs-6 p-2 fw-semibold"><-Daftar Produk</h1>
        </a>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Admin</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="original_price">Stok</label>
                                <input type="qty" class="form-control" id="qty" name="qty" required>
                            </div>
                            <div class="form-group">
                                <label for="original_price">Original Price</label>
                                <input type="text" class="form-control" id="original_price" name="original_price"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="sale_price">Sale Price</label>
                                <input type="text" class="form-control" id="sale_price" name="sale_price" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
