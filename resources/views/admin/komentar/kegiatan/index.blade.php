@extends('layouts.admin.dashboard')
@section('content')
    <div class="container p-5">
        <h1>Halaman Kelola Komentar kegiatan</h1>
        <p><small>Halaman yang digunakan untuk mengatur dan melihat komentar yang diberikan oleh warga pada postingan
                kegiatan</small></p>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th scope="col">Judul Postingan</th>
                    <th scope="col">Jumlah Komentar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            @foreach ($data as $item)
                @if ($item->count_komentar > 0)
                    <tbody>
                        <tr>
                            <td>{{ $item->judul_kegiatan }}</td>
                            <td>{{ $item->count_komentar }} komentar</td>
                            <td>
                                <a href="{{ route('komentar-kegiatan.show', [$item->id]) }}">Lihat Semua komentar</a>
                            </td>
                    </tbody>
                @endif
            @endforeach
        </table>
    </div>
@endsection
