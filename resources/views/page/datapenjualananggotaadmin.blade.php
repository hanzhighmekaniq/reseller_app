@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Penjualan Admin</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Laporan Penjualan Reseller Saya</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Reseller</th>
                                    <th>Produk</th>
                                    <th>Produk Yang Dibawa</th>
                                    <th>Sold</th>
                                    <th>Return</th>
                                    <th>Payment</th>
                                    <th>Profit</th>
                                    <th>Tanggal / Jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($resellerReports as $report)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $report->user->name ?? 'Unknown Reseller' }}</td> <!-- Tambahkan pengecekan null -->
                                    <td>{{ $report->product->name ?? 'Unknown Product' }}</td> <!-- Tambahkan pengecekan null -->
                                    <td>{{ $report->total_sales }}</td>
                                    <td>{{ $report->sold }}</td>
                                    <td>{{ $report->return }}</td>
                                    <td>Rp{{ number_format($report->payment, 0, ',', '.') }}</td>
                                    <td>Rp{{ number_format($report->profit, 0, ',', '.') }}</td>
                                    <td>{{ $report->created_at }}</td>
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
