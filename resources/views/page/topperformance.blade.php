<!-- resources/views/pages/topperformance.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Top Performance Bulan Ini</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Nama</th>
                                    <th>Total Penjualan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($topPerformances as $index => $performance)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $users->where('id', $performance->user_id)->first()->name }}</td>
                                        <td>{{ $performance->total_sales }}</td>
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
