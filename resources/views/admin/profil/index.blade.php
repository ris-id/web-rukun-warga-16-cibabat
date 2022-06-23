@extends('layouts.admin.dashboard')
@section('content')
    <div class="container p-5">
        <h1>Halaman Profil</h1>
        <p><small>Halaman ini digunakan jika akan melakukan perubahan terhadap data profil RW 16</small></p>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (count($data) > 0)
            <form action="{{ route('profil.update', 1) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <img src="/image/logo/{{ $data[0]->logo }}" alt="logo" width="80">
                            <div class="form-group">
                                <label for="logo">Upload logo baru: </label>
                                <input type="file" class="form-control-file" id="logo" name="logo">
                            </div>
                        </div>

                        <p>Akun sosial media</p>
                        <div class="sosial-media">
                            <div class="form-group">
                                <label for="email" class="font-weight-light">Alamat Email</label>
                                <input type="email" class="form-control" name="link_email" id="email"
                                    aria-describedby="emailHelp" placeholder="Masukan alamat email"
                                    value="{{ $data[0]->link_email }}">
                            </div>
                            <div class="form-group">
                                <label for="instagram" class="font-weight-light">Instagram</label>
                                <input type="text" class="form-control" name="link_instagram" id="instagram"
                                    aria-describedby="emailHelp" value="{{ $data[0]->link_instagram }}"
                                    placeholder="Masukan username instagram">
                            </div>
                            <div class="form-group">
                                <label for="facebook" class="font-weight-light">Facebook</label>
                                <input type="text" class="form-control" name="link_facebook" id="facebook"
                                    aria-describedby="emailHelp" value="{{ $data[0]->link_facebook }}"
                                    placeholder="Masukan username facebook">
                            </div>
                            <div class="form-group">
                                <label for="twitter" class="font-weight-light">Twitter</label>
                                <input type="text" class="form-control" name="link_twitter" id="twitter"
                                    aria-describedby="emailHelp" value="{{ $data[0]->link_twitter }}"
                                    placeholder="Masukan username twitter">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Deskripsi Profil</label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" required>{{ $data[0]->deskripsi }}</textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary show_confirm" data-toggle="tooltip">Publish</button>
            </form>
        @else
            <div class="text-right">
                <a href="{{ route('profil.create') }}" class="btn btn-outline-primary">Tambah Data Profil</a>
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
                    title: `Update data?`,
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
