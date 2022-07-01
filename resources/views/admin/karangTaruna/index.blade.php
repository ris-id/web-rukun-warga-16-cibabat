@extends('layouts.admin.dashboard')
@section('content')
    @include('sweetalert::alert')
    <div class="container p-5">
        <h1>Halaman Karang Taruna</h1>
        <p><small>Halaman data Karang Taruna RW 16</small></p>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="ml-auto text-right">
            <a href="{{ route('karangTaruna.create') }}" class="btn btn-outline-primary mb-3">Masukan Data Karang
                Taruna</a>
        </div>
        <div>
            @if (count($karangTaruna) < 1)
                <p>Tidak ada data, silahkan <a href="{{ route('karangTaruna.create') }}">entri data baru</a></p>
            @else
                {{-- <div class="row mt-4">
                    @foreach ($karangTaruna as $item)
                        <div class="col-md-12">
                            <div class="card p-4">
                                <img src="/image/karang-taruna/{{ $item->foto }}" class="card-img-top" />
                                <br>
                                <p class="card-text">{!! $item->konten !!}</p>
                                <form method="POST" action="{{ route('karangTaruna.destroy', $item->id) }}">
                                    <a href="{{ route('karangTaruna.edit', $item->id) }}"
                                        class="btn btn-outline-primary">Edit</a>
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn  btn-outline-danger show_confirm"
                                        data-toggle="tooltip" title='Delete'>Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div> --}}

                <div class="card p-4">
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th scope="col">Judul Kegiatan</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($karangTaruna as $item)
                            <tbody>
                                <tr>
                                    <td>{{ $item->judul }}</td>
                                    <td>{!! $item->konten !!} </td>
                                    <td>
                                        <a href="{{ route('karangTaruna.show', [$item->id]) }}">Lihat detail karang
                                            taruna</a>
                                    </td>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            @endIf

        </div>
    </div>
@endsection

@section('script-karang-taruna')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript" lang="javascript">
        $('.show_confirm').click(function(event) {
            let form = $(this).closest("form");
            let name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah anda yakin akan menghapus data karang taruna ini?`,
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
