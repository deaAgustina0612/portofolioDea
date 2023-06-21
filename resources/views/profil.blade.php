@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

@extends('admin')
@section('konten')

    <div class="container mt-5 py-3">
        <div class="card">
            <div class="card-header text-center">
                <h2>My Portofolio</h2>
            </div>
            <div class="card-body">
                <form action="profil/update/{{$profil->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="mb-2">
                        <label for="" class="form-label" >Id</label>
                        <input type="text" class="form-control"  name="id" id="id" value="{{$profil->id}}" >
                    </div> --}}
                    <div class="mb-2">
                        <label for="" class="form-label" >Nama Lengkap</label>
                        <input type="text" class="form-control"  name="nama_lengkap" id="nama_lengkap" value="">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label" >Tempat Lahir</label>
                        <input type="text" class="form-control"  name="tempat_lahir" id="tempat_lahir" value="">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label" >Tanggal Lahir</label>
                        <input type="date" class="form-control"  name="tanggal_lahir" id="tanggal_lahir" value="">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label" >Jenis Kelamin</label>
                        <input type="text" class="form-control"  name="jenis_kelamin" id="jenis_kelamiat" value="">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label" >Alamat</label>
                        <input type="textarea" class="form-control"  name="alamat" id="alamat" value="">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label" >About</label>
                        <input type="text" class="form-control"  name="about" id="about" value="">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Foto</label>
                        {{-- @if(file_exists("storage/".$profil->foto))
                        <img src="/storage/{{ $profil->foto }}" alt="" width="100" height="100"><br>
                        @endif --}}
                        <input type="file" name="foto" id="foto">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection