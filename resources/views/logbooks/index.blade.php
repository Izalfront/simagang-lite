@extends('layouts.user')

@section('title', 'Logbook')

@section('content')
    <a href="{{ route('logbooks.create') }}">Tambah</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Catatan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logbooks as $logbook)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $logbook->tanggal }}.</td>
                    <td>{{ $logbook->kegiatan }}</td>
                    <td>{{ $logbook->catatan }}</td>
                    @can('update', $logbook)
                        <td><a href="{{ route('logbooks.edit', $logbook->id) }}">Edit</a></td>
                    @endcan
                    {{-- <td>
                        @can('delete', $logbook)
                            <form action="{{ route('logbooks.destroy', $logbook->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Anda yakin ingin menghapus logbook ini?')">Hapus</button>
                            </form>
                        @endcan
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
