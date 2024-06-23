@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2 class="p-2 text-primary fw-bold border-bottom border-primary mb-4">Produk</h2>
        <div class="d-flex justify-content-between">

            <div class="row mb-4">
                <div class="col-md-12">
                    <a href="{{ route('products.create') }}" class="btn btn-primary mt-2 mx-2">Tambah Produk</a>
                </div>
            </div>
            <div>
                <form class="d-flex " role="search">
                    <input class="form-control me-2 mr-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Produk</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Original Price</th>
                                <th>Sale Price</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>Rp{{ number_format($product->original_price, 0, ',', '.') }}</td>
                                    <td>Rp{{ number_format($product->sale_price, 0, ',', '.') }}</td>
                                    <td><img  src="{{ asset('storage/' . $product->image) }}" width="80"></td>
                                    <td>
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
