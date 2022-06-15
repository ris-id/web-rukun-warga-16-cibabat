@extends('layouts.admin.dashboard')
@section('content')
    <div class="container p-3">
        <h1>Halaman Utama Kegiatan Rukun Warga 16</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="ml-auto text-right">
            <a href="{{ route('kegiatan.create') }}" class="btn btn-primary">Tambah Kegiatan</a>
        </div>
        <div style="height: 500px;overflow-y: scroll;">
            <div class="row mt-4">
                @foreach ($data as $item)
                    <div class="col-md-4">
                        <div class="card p-4">
                            <img src="/image/kegiatan/{{ $item->foto_kegiatan }}" class="img-thumbnail w-100">
                            <a href={{ route('kegiatan.show', ['kegiatan' => $item->id]) }} class="mt-3">
                                <h5>{{ $item->judul_kegiatan }}</h5>
                            </a>
                            <p class="text-truncate">{{ $item->deskripsi }}</p>
                            <form method="POST" action="{{ route('kegiatan.destroy', $item->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn  btn-danger show_confirm" data-toggle="tooltip"
                                    title='Delete'>Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('script-kegiatan')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
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
