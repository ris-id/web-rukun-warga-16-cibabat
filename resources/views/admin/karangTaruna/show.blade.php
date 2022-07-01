@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <a href="{{ route('karangTaruna.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman utama
                karang taruna</a>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('karangTaruna.edit', ['karangTaruna' => $karangTaruna->id]) }}"
                    class="btn btn-outline-success mr-4"><span class="fa fa-pencil"></span> Edit
                </a>
                <form method="POST" action="{{ route('karangTaruna.destroy', $karangTaruna->id) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-outline-danger show_confirm " data-toggle="tooltip"
                        title='Delete'>Hapus Data</button>
                </form>
            </div>
        </div>
        <div class="card p-4">
            <div class="content mt-3">
                <div class="text-center">
                    <img src="/image/karang-taruna/{{ $karangTaruna->foto }}" class="img-responsive w-50 ">
                </div>
                <p>{!! $karangTaruna->konten !!}</p>
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
