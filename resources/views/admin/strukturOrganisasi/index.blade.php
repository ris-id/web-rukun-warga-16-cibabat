@extends('layouts.admin.dashboard')
@section('content')
    @include('sweetalert::alert')
    <div class="container p-5">
        <h1>Halaman Struktur Organisasi</h1>
        <p><small>Halaman ini digunakan jika akan melakukan perubahan terhadap Struktur Organisasi RW 16</small></p>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div>
            @if (count($strukturOrganisasi) < 1)
            <div class="ml-auto text-right">
                <a href="{{ route('strukturOrganisasi.create') }}" class="btn btn-outline-primary">Masukan Data Struktur
                    Organisasi</a>
            </div>
                <p>Tidak ada data, silahkan <a href="{{ route('strukturOrganisasi.create') }}">entri data baru</a>
            @else
                <div class="row mt-4">
                    @foreach ($strukturOrganisasi as $item)
                        <div class="col-md-12">
                            <div class="card p-4">
                                <img src="/image/struktu-organisasi/{{ $item->foto }}" class="card-img-top"
                                    height="400" />
                                    <table class="table table-bordered mt-4">
                                        <thead>
                                            <tr>
                                                <th scope="col">Ketua RR</th>
                                                <th scope="col">{{ $item->ketua_rw  }}</th>
                                            </tr>
                                        </thead>

                                            <tbody>
                                                <tr>
                                                    <td>Wakil Ketua</td>
                                                    <td>{{ $item->wakil_ketua }} </td>
                                                </tr>
                                                <tr>
                                                    <td>Sekretaris</td>
                                                    <td>{{ $item->sekretaris }} </td>
                                                </tr>
                                                <tr>
                                                    <td>Bendahara</td>
                                                    <td>{{ $item->bendahara }} </td>
                                                </tr>
                                                <tr>
                                                    <td>Keamanan</td>
                                                    <td>{{ $item->keamanan }} </td>
                                                </tr>
                                                <tr>
                                                    <td>Pelayanan Masyarakat</td>
                                                    <td>{{ $item->pelayanan_masyarakat }} </td>
                                                </tr>
                                                <tr>
                                                    <td>Pemuda Olahraga</td>
                                                    <td>{{ $item->pemuda_olahraga }} </td>
                                                </tr>
                                                <tr>
                                                    <td>Kesehatan Masyarakat</td>
                                                    <td>{{ $item->kesehatan_masyarakat }} </td>
                                                </tr>
                                            </tbody>
                                    </table>

                                <form method="POST" action="{{ route('strukturOrganisasi.destroy', $item->id) }}">
                                    <a href="{{ route('strukturOrganisasi.edit', $item->id) }}"
                                        class="btn btn-outline-success">Edit</a>
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn  btn-outline-danger show_confirm" data-toggle="tooltip"
                                        title='Delete'>Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endIf
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
