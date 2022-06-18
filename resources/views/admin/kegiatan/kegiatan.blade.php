@extends('layouts.admin.dashboard')
@section('content')
    <div class="container p-3">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="d-flex flex-row">
            <h1 class="mr-auto">Halaman Utama Kegiatan Rukun Warga 16</h1>
            <div>
                <a href="{{ route('kegiatan.create') }}" class="mt-2 mb-3 btn btn-outline-primary">Tambah Kegiatan</a>
            </div>
        </div>
        <div style="height: 500px;overflow-y: scroll;">
            <div class="row mt-4">
                @foreach ($data as $item)
                    <div class="col-sm-12 col-md-6 col-lg-4 d-flex align-self-stretch">
                        <div class="card shadow-sm mb-4">
                            <img src="/image/kegiatan/{{ $item->foto_kegiatan }}" class="card-img-top" height="200" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-uppercase mt-3 mb-3">{{ $item->judul_kegiatan }}</h5>
                                <a href="{{ route('kegiatan.show', $item->id) }}" class="mb-3">Lihat Detail</a>
                                <div class="mt-auto">
                                    <form method="POST" action="{{ route('kegiatan.destroy', $item->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-block show_confirm">Hapus
                                            Postingan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
