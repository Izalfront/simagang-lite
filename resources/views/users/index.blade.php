@extends('layouts.user')

@section('title', 'Profile')

@section('content')
    <p>Username: {{ $user->username ?? 'NULL' }}</p>
    <p>NIM: {{ $user->nim ?? 'NULL' }}</p>
    <p>Nama Lengkap: {{ $user->nama ?? 'NULL' }}</p>
    <p>Alamat: {{ $user->alamat ?? 'NULL' }}</p>
    <p>Nomor Telepon: {{ $user->nomor_telepon ?? 'NULL' }}</p>
    <a href="{{ route('users.edit', $user->id) }}">Lengkapi</a>
@endsection
