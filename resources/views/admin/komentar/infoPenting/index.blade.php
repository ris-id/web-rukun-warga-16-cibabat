@extends('layouts.admin.dashboard')
@section('content')
    <div class="container p-5">
        <h1>Halaman Kelola Komentar Info Penting</h1>
        <p><small>Halaman yang digunakan untuk mengatur dan melihat komentar yang diberikan oleh warga pada postingan
                info penting</small></p>
        @if (count($data) < 0)
            <p>Tidak ada data</p>
        @else
            <div class="card p-4">
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
                                    <td>{{ $item->judul_info }}</td>
                                    <td>{{ $item->count_komentar }} komentar</td>
                                    <td>
                                        <a href="{{ route('komentar-infoPenting.show', [$item->id]) }}">Lihat Semua
                                            komentar</a>
                                    </td>
                            </tbody>
                        @endif
                    @endforeach
                </table>
            </div>
        @endIf
    </div>
@endsection
