@extends('layouts.admin.dashboard')
@section('content')
    @include('sweetalert::alert')
    <div class="container p-3">
        <h1>Halaman Utama Pelayanan</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="ml-auto text-right">
            <a href="{{ route('pelayanan.create') }}" class="btn btn-outline-primary mb-3">Masukan Data Pelayanan</a>
        </div>
        @if (count($data) < 1)
            <p>Tidak ada data, silahkan <a href="{{ route('pelayanan.create') }}">entri data baru</a></p>
        @else
            <div class="card p-4">
                <table class="table table-bordered mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Jenis Pelayanan</th>
                            <th scope="col">Informasi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($data as $item)
                        <tbody>
                            <tr>
                                <td>{{ $item->jenis_pelayanan }} </td>
                                <td>{!! $item->informasi !!} </td>
                                <td>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                        <a href="{{ route('pelayanan.edit', $item->id) }}"
                                            class="btn btn-outline-success mr-4"><span class="fa fa-pencil"></span> Edit
                                            Data</a>
                                        <form method="POST" action="{{ route('pelayanan.destroy', $item->id) }}">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-outline-danger show_confirm "
                                                data-toggle="tooltip" title='Delete'>Hapus Data</button>
                                        </form>
                                    </div>
                                </td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        @endIf
    </div>
@endsection

@section('script-laporan-keuangan')
    <script type="text/javascript" lang="javascript">
        $('.show_confirm').click(function(event) {
            let form = $(this).closest("form");
            let name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Apakah anda akan menghapus data pelayanan ini?`,
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
