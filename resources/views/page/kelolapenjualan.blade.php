@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="p-2 text-primary fw-bold border-bottom border-primary mb-4">Penjualan - Riwayat Drop Barang</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    {{-- <a href="{{ route('orders.createOwner') }}" class="btn btn-primary mb-3">Buat Penjualan</a> --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Produk</th>
                                <th>Banyaknya</th>
                                <th>Jam/Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->product->name }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ $order->created_at->format('H:i d/m/Y ') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
