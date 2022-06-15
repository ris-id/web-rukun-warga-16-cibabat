@extends('layouts.admin.dashboard')
@section('content')
    <div class="container p-3">
        <h1>Halaman Utama Info Penting Rukun Warga 16</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="ml-auto text-right">
            <a href="{{ route('infoPenting.create') }}" class="btn btn-primary">Tambah Info Penting</a>
        </div>
        <div style="height: 500px;overflow-y: scroll;">
            <div class="row mt-4">
                @foreach ($infoPenting as $item)
                    <div class="col-md-4">
                        <div class="card p-4">
                            <a href={{ route('infoPenting.show', ['infoPenting' => $item->id]) }} class="mt-3">
                                <h5>{{ $item->judul_info}}</h5>
                            </a>
                            <p class="text-truncate">{{ $item->deskripsi }}</p>
                            <form method="POST" action="{{ route('infoPenting.destroy', $item->id) }}">
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

@section('script-infoPenting')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript" lang="javascript">
        $('.show_confirm').click(function(event) {
            let form = $(this).closest("form");
            let name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah anda akan menghapus data info ini?`,
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
