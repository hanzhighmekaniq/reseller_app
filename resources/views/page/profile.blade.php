@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Profil Saya</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card text-center">
        <div class="card-body">
            @if(Auth::user()->foto)
                <div class="mb-4">
                    <img src="{{ Storage::url(Auth::user()->foto) }}" alt="Foto Profil" class="img-thumbnail" style="max-width: 200px;">
                </div>
            @endif
            <h5 class="card-title">{{ Auth::user()->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p class="card-text"><strong>No WA:</strong> {{ Auth::user()->no_wa }}</p>
            <a href="{{ route('profile.edit') }}" class="btn btn-primary mt-3">Edit Profil</a>
        </div>
    </div>
</div>
@endsection
