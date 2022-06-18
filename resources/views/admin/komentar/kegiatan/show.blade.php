@extends('layouts.admin.dashboard')
@section('content')
    <div class="container p-5">
        <h1>Komentar di postingan : {{ $data[0]->kegiatan->judul_kegiatan }}</h1>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Komentar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            @foreach ($data as $item)
                <tbody>
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->komentar }}</td>
                        <td>
                            <form method="POST" action="{{ route('komentar-kegiatan.destroy', $item->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn  btn-outline-danger show_confirm" data-toggle="tooltip"
                                    title='Delete'>Hapus Komentar</button>
                            </form>
                        </td>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection

@section('script-sweetalert')
    <script type="text/javascript" lang="javascript">
        $('.show_confirm').click(function(event) {
            let form = $(this).closest("form");
            let name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah anda akan menghapus komentar ini?`,
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
