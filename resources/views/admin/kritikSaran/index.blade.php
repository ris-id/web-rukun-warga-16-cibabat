@extends('layouts.admin.dashboard')
@section('content')
    <div class="container p-3">
        <h1>Halaman Utama Kritik & Saran Rukun Warga 16</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div style="height: 500px;overflow-y: scroll;">
            <div class="row mt-4">
                @foreach ($kritikSaran as $item)
                    <div class="col-md-4">
                        <div class="card p-4">
                            <a href={{ route('kritikSaran.show', ['kritikSaran' => $item->id]) }} class="mt-3">
                                <h5>{{ $item->name }}</h5>
                            </a>
                            <p>{{ $item->email }}</p>
                            <p class="text-truncate">{{ $item->pesan }}</p>
                            <form method="POST" action="{{ route('kritikSaran.destroy', $item->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-outline-danger show_confirm" data-toggle="tooltip"
                                    title='Delete'>Delete</button>
                            </form>
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
                    title: `Apakah anda akan menghapus kritik & saran ini?`,
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
