@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard Pemilik</h1>

    <div class="row">
        <!-- Total Admins Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Admins</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalAdmins }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-cog fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Products Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Products</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalProducts }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Orders Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalOrders }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Current Month Sales Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Current Month Sales</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $currentMonthSales }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Performa Minggu Ini</h6>
                </div>
                <div class="card-body">
                    <canvas id="performanceChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@2.0.0/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('performanceChart').getContext('2d');
        var performanceData = @json($performanceThisWeek);
        var labels = performanceData.map(data => data.date);
        var data = performanceData.map(data => data.total_sold);

        var performanceChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Penjualan',
                    data: data,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                scales: {
                    x: {
                        type: 'time',
                        time: {
                            unit: 'day'
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endsection