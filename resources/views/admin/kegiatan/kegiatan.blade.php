@extends('layouts.admin.dashboard')
@section('content')
    @include('sweetalert::alert')
    <div class="container p-3">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="d-flex flex-row">
            <h1 class="mr-auto">Daftar Kegiatan Rukun Warga 16 Yang Terpublikasikan
            </h1>
            <div>
                <a href="{{ route('kegiatan.create') }}" class="mt-2 mb-3 btn btn-outline-primary">Tambah Kegiatan</a>
            </div>
        </div>
        @if (count($data) < 1)
            <p>Tidak ada data, silahkan <a href="{{ route('kegiatan.create') }}">entri data baru</a></p>
        @else
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th scope="col">Judul Postingan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                @foreach ($data as $item)
                    <tbody>
                        <tr>
                            <td>{{ $item->judul_kegiatan }}</td>
                            <td>{!! $item->deskripsi !!} </td>
                            <td>
                                <a href="{{ route('kegiatan.show', [$item->id]) }}">Lihat detail postingan</a>
                            </td>
                    </tbody>
                @endforeach
            </table>
        @endIf

    </div>
@endsection

@section('script-sweetalert')
    <script type="text/javascript" lang="javascript">
        $('.show_confirm').click(function(event) {
            let form = $(this).closest("form");
            let name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah anda akan menghapus data postingan kegiatan ini?`,
                    text: "Jika anda menghapusnya, maka data akan hilang selamanya.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
