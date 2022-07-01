@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <a href="{{ route('kegiatan.show', [$kegiatan->id]) }}" class="mt-3">Kembali</a>

        <div class="pt-3 mb-3">
            <h1 class="mr-auto">Edit Kegiatan Rukun Warga 16 Yang Terpublikasikan
            </h1>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card p-4">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Judul Kegiatan</strong>
                            <input type="text" name="judul_kegiatan" value="{{ $kegiatan->judul_kegiatan }}"
                                class="form-control" placeholder="judul_kegiatan">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Deskripsi</strong>
                            <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Detail">{!! $kegiatan->deskripsi !!}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Foto Kegiatan</strong>
                            <input type="file" name="foto_kegiatan" class="form-control" placeholder="Foto Kegiatan">
                            <br>
                            <img src="/image/kegiatan/{{ $kegiatan->foto_kegiatan }}" width="300px">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                        <button type="submit" class="btn btn-outline-primary">Publish</button>
                    </div>
                </div>
            </div>
        </form>
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
