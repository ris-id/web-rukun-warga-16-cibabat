@extends('layouts.admin.dashboard')
@section('content')
@include('sweetalert::alert')
    <div class="container p-3">
        <h1>Halaman Utama Karang Taruna</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="ml-auto text-right">
            <a href="{{ route('karangTaruna.create') }}" class="btn btn-primary">Masukan Data Karang Taruna</a>
        </div>
        <div>
            <div class="row mt-4">
                @foreach ($karangTaruna as $item)
                    <div class="col-md-12">
                        <div class="card p-4">
                            <img src="/image/karang-taruna/{{ $item->foto }}" class="card-img-top" height="400" />
                                <p class="card-text">{{ $item->konten }}</p>
                            <form method="POST" action="{{ route('karangTaruna.destroy', $item->id) }}">
                                <a href="{{ route('karangTaruna.edit', $item->id) }}"
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

@section('script-karang-taruna')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript" lang="javascript">
        $('.show_confirm').click(function(event) {
            let form = $(this).closest("form");
            let name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah anda yakin akan menghapus data karang taruna ini?`,
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