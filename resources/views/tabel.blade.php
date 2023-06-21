@extends('admin')

@section('konten')


    <main>
        <div class="container mt-5">
            <h2 class="text-center pt-3">Daftar Portofolio</h2>
            <a href="tabel/add"><button class="btn btn-primary" type="submit" name="submit" id="submit">Tambah Data</button></a>
            <table class="table table-bordered mt-2">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">KATEGORI</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">DESKRIPSI</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                @foreach ($portofolio as $key => $item)
                <tbody>
                  <tr>
                    <th scope="row">{{ $key+1}}</th>
                    <td>{{ $item -> judul}}</td>
                    <td>{{ $item -> kategori}}</td>
                    <td><center>
                      <img src="\storage\{{ $item->foto }}" alt="" width="100" height="100"></center>
                    </td>
                    <td>{{ $item -> deskripsi }}</td>
                    <td>
                      <a href="tabel/delete/{{$item -> id}}"><button class="btn btn-danger" name="submit" type="submit">HAPUS</button></a>
                      <a href="tabel/edit/{{$item -> id}}"><button class="btn btn-success" name="submit" type="submit">EDIT</button></a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    </main>
        
@endsection
