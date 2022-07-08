@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
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

        <div class="pt-4">
            <div>
                <a href="{{ route('infoPenting.index') }}"><span class="fa fa-arrow-left"></span> Kembali </a>
            </div>
            <div class="d-flex flex-row">
                <h1>Edit Data Penting</h1>
            </div>
        </div>
        <br>
        <div class="card p-4">
            <form action="{{ route('infoPenting.update', $infoPenting->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Judul Info</strong>
                            <input type="text" name="judul_info" value="{{ $infoPenting->judul_info }}"
                                class="form-control" placeholder="judul_info">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Deskripsi</strong>
                            <textarea class="form-control tinymce-editor" name="deskripsi" placeholder="Detail">{!! $infoPenting->deskripsi !!}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                        <button type="submit" class="btn btn-outline-success">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection


@section('script-tinymce')
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 400,
            menubar: false,
            image_title: true,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount',
                'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css',
            a11y_advanced_options: true,
        });
    </script>
@endsection
