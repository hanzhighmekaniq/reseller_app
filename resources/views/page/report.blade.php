@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Laporan</h1>

    @if(isset($type))
        <h2>Laporan {{ ucfirst($type) }}</h2>
    @else
        <h2>Laporan</h2>
    @endif

    @foreach($reports as $report)
        @if($report->user->role == 'bos')
            <div class="card mb-3">
                <div class="card-header bg-warning text-black">
                    RESELLER 1: {{ strtoupper($report->user->name) }}
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>HARI</th>
                                <th>TANGGAL</th>
                                <th>PRODUK</th>
                                <th>RETURN</th>
                                <th>SOLD</th>
                                <th>SETOR</th>
                                <th>KEUNTUNGAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('l') }}</td>
                                <td>{{ \Carbon\Carbon::parse($report->created_at)->format('d/m/Y') }}</td>
                                <td>{{ $report->total_sales }}</td>
                                <td>{{ $report->return }}</td>
                                <td>{{ $report->sold }}</td>
                                <td>Rp {{ number_format($report->payment, 2, ',', '.') }}</td>
                                <td>Rp {{ number_format($report->profit, 2, ',', '.') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @elseif($report->user->role == 'anggota')
            <div class="card mb-3">
                <div class="card-header bg-info text-white">
                    RESELLER 2: {{ strtoupper($report->user->name) }}
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>HARI</th>
                                <th>TANGGAL</th>
                                <th>PRODUK</th>
                                <th>RETURN</th>
                                <th>SOLD</th>
                                <th>PAYMENT</th>
                                <th>PROFIT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('l') }}</td>
                                <td>{{ \Carbon\Carbon::parse($report->created_at)->format('d/m/Y') }}</td>
                                <td>{{ $report->total_sales }}</td>
                                <td>{{ $report->return }}</td>
                                <td>{{ $report->sold }}</td>
                                <td>Rp {{ number_format($report->payment, 2, ',', '.') }}</td>
                                <td>Rp {{ number_format($report->profit, 2, ',', '.') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    @endforeach

    @if(Auth::user()->role == 'pemilik' || Auth::user()->role == 'bos')
    <div class="totals">
        <h3>Total Return: {{ $totalReturn }}</h3>
        <h3>Total Profit: {{ $totalProfit }}</h3>
    </div>
    @endif
</div>
@endsection
