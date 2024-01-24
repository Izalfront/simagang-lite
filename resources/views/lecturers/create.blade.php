@extends('layouts.user')

@section('title', 'Create')

@section('content')
    <form action="{{ route('lecturers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
        </div>
        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
                value="{{ old('nomor_telepon') }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
