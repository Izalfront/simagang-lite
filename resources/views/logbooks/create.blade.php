@extends('layouts.user')

@section('title', 'Create')

@section('content')
    <form action="{{ route('logbooks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Aktivitas:</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ now()->format('Y-m-d') }}"
                readonly>
        </div>
        <div class="mb-3">
            <label for="kegiatan" class="form-label">Kegiatan:</label>
            <textarea class="form-control" id="kegiatan" name="kegiatan" rows="3">{{ old('kegiatan') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="catatan" class="form-label">Catatan:</label>
            <textarea class="form-control" id="catatan" name="catatan" rows="3">{{ old('catatan') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <script>
        function updateDate() {
            var today = new Date();
            var day = today.getDate();
            var month = today.getMonth() +
                var year = today.getFullYear();

            if (day < 10) {
                day = '0' + day;
            }

            if (month < 10) {
                month = '0' + month;
            }

            var formattedDate = year + '-' + month + '-' + day;

            document.getElementsByName('tanggal')[0].value = formattedDate;
        }

        window.onload = function() {
            updateDate();
        };
    </script>
@endsection
