@extends('layouts.app')


@section('content')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">Upload Sertifikat</h2>
                    <h5 class="card-subtitle text-secondary">Masukkan data sertifikat baru mu!</h5>
                </div>
                <div class="card-body">
                    @include('Sertif.components.upload-sertif')
                </div>
            </div>
        </div>
    </div>
    @foreach ($sertif as $s)
    <div class="col-lg-3 mb-3">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <p>
                        {{$s->nama_file}}
                    </p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <h5>Nama File :</h5>
                        </div>
                        <div class="col-sm-8">
                            <a class="btn btn-primary"
                                href="{{url('/sertif-file').'/'. Auth::user()->name.'/'. $s->lokasi_file}}">{{$s->lokasi_file}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
@section('script')
<script>
    $('.hapus').click(function (e) {
        e.preventDefault();
        console.log('hapus');
    });
</script>
@endsection
