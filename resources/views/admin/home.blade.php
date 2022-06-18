@extends('layouts.admin.dashboard')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container p-5">
        @if (count($data) !== 0)
            <img src="/image/logo/{{ $data[0]->logo }}" alt="Logo" width="100" class="mb-3">
        @else
            <p>Belum ada logo, <a href="{{ route('profil.create') }}">Tambahkan logo</a></p>
        @endif
        <h1>Halaman Utama Admin</h1>
    </div>
    <!-- /.content-wrapper -->
@endsection
