@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2 class="p-2 text-primary fw-bold border-bottom border-primary mb-4">Edit Profile</h2>
        <div class="card shadow mb-4">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ Auth::user()->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="current_password">Password Lama</label>
                        <input type="password" name="current_password" id="current_password" class="form-control">
                        <small class="form-text text-muted">Kosongkan jika tidak diubah</small>
                    </div>
                    <div class="form-group">
                        <label for="new_password">Password Baru</label>
                        <input type="password" name="new_password" id="new_password" class="form-control">
                        <small class="form-text text-muted">Kosongkan jika tidak diubah</small>
                    </div>
                    <div class="form-group">
                        <label for="new_password_confirmation">Konfirmasi Password Baru</label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                            class="form-control">
                        <small class="form-text text-muted">Kosongkan jika tidak diubah</small>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                        <small class="form-text text-muted">Kosongkan jika tidak diubah</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profil</button>
                </form>
            </div>
        </div>
    </div>
@endsection
