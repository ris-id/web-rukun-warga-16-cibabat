@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <a href="{{ route('aset.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman utama
                aset</a>

            <div class="text-right">
                <a href="{{ route('aset.edit', ['aset' => $aset->id]) }}" class="btn btn-outline-primary"><span
                        class="fa fa-pencil"></span> Edit
                    data aset</a>
            </div>
        </div>
        <div class="card p-4">
            <div class="content mt-3">
                <div class="text-center">
                    <img src="/image/aset/{{ $aset->foto }}" class="img-responsive w-50 ">
                </div>
                <p>{!! $aset->informasi !!}</p>
            </div>
        </div>
    </div>
@endsection
