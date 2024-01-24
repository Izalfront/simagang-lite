@extends('layouts.user')

@section('title', 'Pembimbing Lapangan')

@section('content')
    @if (count($supervisors) > 0)
        @foreach ($supervisors as $supervisor)
            <p>Nama Dosen: {{ $supervisor->nama }}</p>
            <p>Nomor Telepon: {{ $supervisor->nomor_telepon }}</p>
            <p>Email: {{ $supervisor->email }}</p>
            <a href="{{ route('supervisors.edit', $supervisor->id) }}">Edit</a>
        @endforeach
    @else
        <p>Tidak ada data pembimbing lapangan.</p>
        <a href="{{ route('supervisors.create') }}">Tambah</a>
    @endif
@endsection
