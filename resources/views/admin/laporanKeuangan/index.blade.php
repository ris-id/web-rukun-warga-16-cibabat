@extends('layouts.admin.dashboard')
@section('content')
    @include('sweetalert::alert')
    <div class="container p-3">
        <h1>Halaman Utama Laporan Keuangan</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="ml-auto text-right">
            <a href="{{ route('laporanKeuangan.create') }}" class="btn btn-outline-primary">Masukan Data Laporan
                Keuangan</a>
        </div>
        @if (count($laporanKeuangan) < 1)
            <p>Tidak ada data, silahkan <a href="{{ route('laporanKeuangan.create') }}">entri data baru</a></p>
        @else
            <div class="card p-4">
                <table class="table table-bordered mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($laporanKeuangan as $item)
                        <tbody>
                            <tr>
                                <td>{!! $item->informasi !!} </td>
                                <td>
                                    <a href="{{ route('laporanKeuangan.show', [$item->id]) }}">Lihat detail postingan</a>
                                </td>
                        </tbody>
                    @endforeach
                </table>
                {{-- @foreach ($laporanKeuangan as $item)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="/image/laporan-keuangan/{{ $item->gambar }}" class="card-img-top">
                            <div class="card-bory p-4">
                                <p class="card-text">{!! $item->informasi !!}</p>
                                <form method="POST" action="{{ route('laporanKeuangan.destroy', $item->id) }}">
                                    <div class="d-flex flex-row">
                                        <div class="col-md-6 justify-content-center">
                                                <a href="{{ route('laporanKeuangan.edit', $item->id) }}"
                                                    class="btn btn-outline-success btn-block"><span class="fa fa-pen"></span> Edit</a>
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                            </div>
                                            <div class="col-md-6 justify-content-center">
                                                @csrf
                                                <button type="submit" class="btn  btn-outline-danger btn-block show_confirm" data-toggle="tooltip"
                                                    title='Delete'><i class="fa fa-trash"></i> Delete</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        @endIf
    </div>
@endsection

@section('script-laporan-keuangan')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript" lang="javascript">
        $('.show_confirm').click(function(event) {
            let form = $(this).closest("form");
            let name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah anda akan menghapus data laporan keuangan ini?`,
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
