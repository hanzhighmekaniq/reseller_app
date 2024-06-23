@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Penjualan Reseller</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Riwayat Penjualan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Produk</th>
                                    <th>Produk Yang Dibawa</th>
                                    <th>Terjual</th>
                                    <th>Pengembalian</th>
                                    <th>Pembayaran</th>
                                    <th>Profit</th>
                                    <th>Tanggal / Jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $report)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $report->product->name ?? 'Unknown Product' }}</td> <!-- Pengecekan null -->
                                    <td>{{ $report->sold + $report->return }}</td>
                                    <td>{{ $report->sold }}</td>
                                    <td>{{ $report->return }}</td>
                                    <td>{{ 'Rp' . number_format($report->payment, 0, ',', '.') }}</td>
                                    <td>{{ 'Rp' . number_format($report->profit, 0, ',', '.') }}</td>
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
