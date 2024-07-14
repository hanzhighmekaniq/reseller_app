@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2 class="p-2 text-primary fw-bold border-bottom border-primary mb-4">Profil Saya</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card p-4 shadow mb-4">

            @if (Auth::user()->foto)
                <div class="mb-4 text-center">
                    <img src="{{ Storage::url(Auth::user()->foto) }}" alt="Foto Profil" class="img-thumbnail"
                        style="max-width: 400px;">
                </div>
            @endif
            <div class="container full-height d-flex justify-content-center align-items-center">
                <div class="card">
                    <div class="card-body text-start">
                        <h5 class="card-title">{{ Auth::user()->name }}</h5>
                        <p class="card-text"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p class="card-text"><strong>No WA:</strong> {{ Auth::user()->no_wa }}</p>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="btn  btn-primary">Edit Profil</a>
                </div>
            </div>
        </div>
    </div>
@endsection
