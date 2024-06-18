@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kelola Penjualan</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Buat Penjualan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>User</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->product->name }}</td>
                <td>{{ $order->quantity }}</td>
                <td>Rp{{ number_format($order->total_price, 0, ',', '.') }}</td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->created_at->format('Y-m-d') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
