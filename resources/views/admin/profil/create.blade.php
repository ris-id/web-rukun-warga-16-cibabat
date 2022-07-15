@extends('layouts.admin.dashboard')
@section('content')
    <div class="container p-5">
        <h1>Halaman Tambah Data Profil</h1>
        <p><small>Halaman ini digunakan menambahkan data profil RW 16</small></p>

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
        <form action="{{ route('profil.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <div class="form-group">
                            <label for="logo">Upload logo</label>
                            <input type="file" class="form-control-file" id="logo" name="logo" required>
                        </div>
                    </div>
                    <p>Akun sosial media</p>
                    <div class="sosial-media">
                        <div class="form-group">
                            <label for="email" class="font-weight-light">Alamat Email</label>
                            <input type="email" class="form-control" name="link_email" id="email"
                                aria-describedby="emailHelp" placeholder="Masukan alamat email">
                        </div>
                        <div class="form-group">
                            <label for="instagram" class="font-weight-light">Instagram</label>
                            <input type="email" class="form-control" name="link_instagram" id="instagram"
                                aria-describedby="emailHelp" placeholder="Masukan link url instagram anda">
                        </div>
                        <div class="form-group">
                            <label for="facebook" class="font-weight-light">Facebook</label>
                            <input type="email" class="form-control" name="link_facebook" id="facebook"
                                aria-describedby="emailHelp" placeholder="Masukan link url facebook anda">
                        </div>
                        <div class="form-group">
                            <label for="twitter" class="font-weight-light">Twitter</label>
                            <input type="email" class="form-control" name="link_twitter" id="twitter"
                                aria-describedby="emailHelp" placeholder="Masukan link url twitter anda">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Deskripsi Profil</label>
                        <textarea class="form-control" style="height:250px" name="deskripsi" required></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
