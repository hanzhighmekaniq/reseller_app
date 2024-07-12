@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Riwayat Drop Barang</h1>
    {{-- <a href="{{ route('orders.createAdmin') }}" class="btn btn-primary mb-3">Buat Penjualan</a> --}}
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
            @foreach($orders as $order)
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
@endsection
