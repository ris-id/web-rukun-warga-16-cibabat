@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <div class="d-flex flex-row">
                <a href="{{ route('pkk.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman
                    utama
                    PKK</a>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('pkk.edit', ['pkk' => $pkk->id]) }}" class="btn btn-outline-success mr-4"><span
                        class="fa fa-pencil"></span> Edit
                    Data</a>
                <form method="POST" action="{{ route('pkk.destroy', $pkk->id) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-outline-danger show_confirm " data-toggle="tooltip"
                        title='Delete'>Hapus postingan</button>
                </form>
            </div>
        </div>
        <div class="card p-4">
            <div class="m-auto text-center">
                <img src="/image/pkk/{{ $pkk->foto }}" class="card-img-top w-50">
            </div>
            <div class="content mt-3">
                <p><small>Tanggal : {{ $pkk->tanggal }}</small></p>
                <p>{!! $pkk->agenda !!}</p>
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
