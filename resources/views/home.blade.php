@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Kelola Sertifikatmu
                </div>
                <div class="card-body">
                    Kelola Sertifikatmu!
                    <br>
                    <button class="btn btn-primary sertif">Kelola!</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('.sertif').click(function (e) {
        e.preventDefault();
        $.get("{{route('sertif_index')}}", function(data, status){
            window.location = '{{route('sertif_index')}}';
        });
    });
</script>
@endsection
