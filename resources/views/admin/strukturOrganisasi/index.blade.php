@extends('layouts.admin.dashboard')
@section('content')
@include('sweetalert::alert')
    <div class="container p-3">
        <h1>Halaman Utama Struktur Organisasi</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="ml-auto text-right">
            <a href="{{ route('strukturOrganisasi.create') }}" class="btn btn-primary">Masukan Data Struktur Organisasi</a>
        </div>
        <div>
            <div class="row mt-4">
                @foreach ($strukturOrganisasi as $item)
                    <div class="col-md-12">
                        <div class="card p-4">
                            <img src="/image/struktu-organisasi/{{ $item->foto }}" class="card-img-top" height="400" />
                                <p class="card-title">{{ $item->nama_rw }}</p>
                                <p class="card-text">{{ $item->ketua_rw }}</p>
                                <p class="card-text">{{ $item->sekretaris }}</p>
                                <p class="card-text">{{ $item->bendahara }}</p>
                                <p class="card-text">{{ $item->keamanan }}</p>
                                <p class="card-text">{{ $item->pelayanan_masyarakat }}</p>
                                <p class="card-text">{{ $item->pemuda_olahraga }}</p>
                                <p class="card-text">{{ $item->kesehatan_masyarakat }}</p>
                            <form method="POST" action="{{ route('strukturOrganisasi.destroy', $item->id) }}">
                                <a href="{{ route('strukturOrganisasi.edit', $item->id) }}"
                                    class="btn btn-primary">Edit</a>
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

@section('script-struktur-organisasi')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript" lang="javascript">
        $('.show_confirm').click(function(event) {
            let form = $(this).closest("form");
            let name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah anda akan menghapus data struktur organisasi ini?`,
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
