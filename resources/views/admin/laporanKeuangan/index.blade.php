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
            <div class="row mt-4">
                @foreach ($laporanKeuangan as $item)
                    <div class="col-md-4">
                        <div class="card p-4">
                            <img src="/image/laporan-keuangan/{{ $item->gambar }}" class="card-img-top" height="200" />
                            <p class="card-text">{!! $item->informasi !!}</p>
                            <form method="POST" action="{{ route('laporanKeuangan.destroy', $item->id) }}">
                                <a href="{{ route('laporanKeuangan.edit', $item->id) }}"
                                    class="btn btn-outline-primary">Edit</a>
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn  btn-outline-danger show_confirm" data-toggle="tooltip"
                                    title='Delete'>Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
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
