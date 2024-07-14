@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="p-2 text-primary fw-bold border-bottom border-primary mb-4">Data Penjualan Koordinator</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Riwayat Penjualan Saya</h6>
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
                                    <th>Total Setor</th>
                                    <th>Keuntungan</th>
                                    <th>Tanggal / Jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $report)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
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

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Total Laporan Penjualan Saya</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Total Barang</th>
                                    <th>Total Pembayaran</th>
                                    <th>Total Keuntungan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $reports->sum('total_sales') + $resellerReports->sum('total_sales') }}</td>
                                    <td>Rp{{ number_format($reports->sum('payment') + $resellerReports->sum('payment'), 0, ',', '.') }}</td>
                                    <td>Rp{{ number_format($reports->sum('profit') + $resellerReports->sum('profit'), 0, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
