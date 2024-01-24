@extends('layouts.user')

@section('title', 'Dosen Pembimbing')

@section('content')
    @if (count($lecturers) > 0)
        @foreach ($lecturers as $lecturer)
            <p>Nama Dosen: {{ $lecturer->nama }}</p>
            <p>Nomor Telepon: {{ $lecturer->nomor_telepon }}</p>
            <p>Email: {{ $lecturer->email }}</p>
            <a href="{{ route('lecturers.edit', $lecturer->id) }}">Edit</a>
        @endforeach
    @else
        <p>Tidak ada data dosen pembimbing.</p>
        <a href="{{ route('lecturers.create') }}">Tambah</a>
    @endif
@endsection
