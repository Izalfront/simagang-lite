@extends('layouts.user')

@section('title', 'Edit')

@section('content')
    <form action="{{ route('supervisors.update', $supervisor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama" name="nama"
                value="{{ old('nama', $supervisor->nama) }}">
        </div>
        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
                value="{{ old('nomor_telepon', $supervisor->nomor_telepon) }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address:</label>
            <input type="email" class="form-control" id="email" name="email"
                value="{{ old('email', $supervisor->email) }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection