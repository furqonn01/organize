<form action="{{route('simpan_sertif')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        @include('Sertif.components.input-sertif')
    </div>
</form>
