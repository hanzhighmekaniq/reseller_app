@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Penjualan Anggota</h1>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Produk</th>
                                    <th>Total Sales</th>
                                    <th>Sold</th>
                                    <th>Return</th>
                                    <th>Profit</th>
                                    <th>Payment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $report)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $report->product->name }}</td>
                                    <td>{{ $report->total_sales }}</td>
                                    <td>{{ $report->sold }}</td>
                                    <td>{{ $report->return }}</td>
                                    <td>{{ $report->profit }}</td>
                                    <td>{{ $report->payment }}</td>
                                    <td>
                                        <a href="{{ route('reports.edit', $report->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('reports.destroy', $report->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
    </div>
</div>
@endsection
