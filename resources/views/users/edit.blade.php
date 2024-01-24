@extends('layouts.user')

@section('title', 'Edit')

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" class="form-control" id="username" name="username"
                value="{{ old('username', $user->username) }}">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM:</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ old('nim', $user->nim) }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $user->nama) }}">
        </div>
        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
                value="{{ old('nomor_telepon', $user->nomor_telepon) }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ old('alamat', $user->alamat) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address:</label>
            <input type="email" class="form-control" id="email" name="email"
                value="{{ old('email', $user->email) }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
