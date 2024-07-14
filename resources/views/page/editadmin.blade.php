@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2 class="p-2 text-primary fw-bold border-bottom border-primary mb-4">Beranda Pemilik</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h1 class="h3 mb-4 text-gray-800">Edit Admin</h1>

                        <form action="{{ route('admins.update', $admin->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $admin->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $admin->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="no_wa">No WA</label>
                                <input type="text" class="form-control" id="no_wa" name="no_wa"
                                    value="{{ $admin->no_wa }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admins.index') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
