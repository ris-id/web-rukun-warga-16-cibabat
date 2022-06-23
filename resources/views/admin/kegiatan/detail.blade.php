@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <a href="{{ route('kegiatan.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman utama
                kegiatan</a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('kegiatan.edit', ['kegiatan' => $kegiatan->id]) }}"
                    class="btn btn-outline-primary mr-4"><span class="fa fa-pencil"></span> Edit
                    Postingan</a>
                <form method="POST" action="{{ route('kegiatan.destroy', $kegiatan->id) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-outline-danger show_confirm " data-toggle="tooltip"
                        title='Delete'>Hapus postingan</button>
                </form>
            </div>
        </div>
        <h1>{{ $kegiatan->judul_kegiatan }}</h1>
        <div class="m-auto text-center">
            <img src="/image/kegiatan/{{ $kegiatan->foto_kegiatan }}" class="w-50 img-responsive img-thumbnail">
        </div>
        <div class="content mt-3">
            <p>{!! $kegiatan->deskripsi !!}</p>
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
                    title: `Apakah anda akan menghapus data kegiatan ini?`,
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
