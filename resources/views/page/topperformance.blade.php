@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Top Performance Bulan Ini</div>

                    <div class="card-body">
                        <h3>Top Performance Reseller</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Nama</th>
                                    <th>Total Penjualan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($topPerformancesAnggota as $index => $performance)
                                    @php
                                        $user = $usersAnggota->where('id', $performance->user_id)->first();
                                    @endphp
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user ? $user->name : 'User tidak ditemukan' }}</td>
                                        <td>{{ $performance->total_sales }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h3>Top Performance Koordinator</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Nama</th>
                                    <th>Total Penjualan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($topPerformancesKoordinator as $index => $performance)
                                    @php
                                        $user = $usersKoordinator->where('id', $performance->user_id)->first();
                                    @endphp
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user ? $user->name : 'User tidak ditemukan' }}</td>
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
