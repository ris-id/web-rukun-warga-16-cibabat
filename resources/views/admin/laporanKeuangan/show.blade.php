@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <div class="d-flex flex-row">
                <a href="{{ route('laporanKeuangan.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman
                    utama
                    laporan keuangan</a>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('laporanKeuangan.edit', ['laporanKeuangan' => $laporanKeuangan->id]) }}"
                    class="btn btn-outline-success mr-4"><span class="fa fa-pencil"></span> Edit Laporan Keuangan</a>
                <form method="POST" action="{{ route('laporanKeuangan.destroy', $laporanKeuangan->id) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-outline-danger show_confirm " data-toggle="tooltip"
                        title='Delete'>Hapus Laporan Keuangan</button>
                </form>
            </div>
        </div>
        <div class="card p-4">
            <div class="m-auto text-center">
                <img src="/image/laporan-keuangan/{{ $laporanKeuangan->gambar }}" class="card-img-top w-50">
            </div>
            <div class="content mt-3">
                <p>{!! $laporanKeuangan->informasi !!}</p>
            </div>
        </div>
    </div>
@endsection

@section('script-sweetalert')
    <script type="text/javascript" lang="javascript">
        $('.show_confirm').click(function(event) {
            let form = $(this).closest("form");
            let name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah anda akan menghapus data laporan Keuangan ini?`,
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
