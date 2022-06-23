@extends('layouts.admin.dashboard')
@section('content')
    @include('sweetalert::alert')
    <div class="container p-3">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="d-flex flex-row">
            <h1>Daftar Info Penting Yang Terpublikasikan</h1>
            <div class="ml-auto text-right">
                <a href="{{ route('infoPenting.create') }}" class="btn btn-outline-primary">Tambah Info Penting</a>
            </div>
        </div>
        <br>
        @if (count($infoPenting) < 1)
            <p>Tidak ada data, silahkan <a href="{{ route('infoPenting.create') }}">entri data baru</a></p>
        @else
            <div>
                <div class="row mt-12">
                    @foreach ($infoPenting as $item)
                        <div class="col-md-6">
                            <div class="card p-4">
                                <a href={{ route('infoPenting.show', ['infoPenting' => $item->id]) }} class="mt-3">
                                    <h5 class="text-uppercase">{{ $item->judul_info }}</h5>
                                </a>
                                <p class="text-truncate">{!! $item->deskripsi !!}</p>
                                <form method="POST" action="{{ route('infoPenting.destroy', $item->id) }}">
                                    <div class="d-flex flex-row">
                                        <div class="col-md-6 justify-content-center">
                                            <a href="{{ route('infoPenting.edit', $item->id) }}"
                                                class="btn btn-outline-success btn-block"><span class="fa fa-pen"></span>
                                                Edit</a>
                                        </div>
                                        <div class="col-md-6 justify-content-center">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-outline-danger btn-block show_confirm"
                                                data-toggle="tooltip" title='Delete'><i class="fa fa-trash"></i>
                                                Delete</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endIf
    </div>
@endsection

@section('script-sweetalert')
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
