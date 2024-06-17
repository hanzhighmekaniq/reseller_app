<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseller Application</title>
    <link href="{{ asset('stisla/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('stisla/assets/css/components.css') }}" rel="stylesheet">
</head>
<body>

<div id="app">
    <div class="main-wrapper">
        @include('partials.stisla-navbar')
        @include('partials.stisla-sidebar')

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Dashboard</h1>
                </div>

                <div class="section-body">
                    @yield('content')
                </div>
            </section>
        </div>

        @include('partials.stisla-footer')
    </div>
</div>

<script src="{{ asset('stisla/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('stisla/assets/js/popper.js') }}"></script>
<script src="{{ asset('stisla/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('stisla/assets/js/scripts.js') }}"></script>
</body>
</html>
