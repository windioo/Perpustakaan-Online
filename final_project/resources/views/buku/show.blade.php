@extends('layouts.master')

@section('content')
    <div class=" ml-3 pt-5 mr-3">
    <div class="card card-primary">
     <div class="card-header with-border">
        <h3 class="card-title">Show Table</h3>
     </div>

     <div class="card-body"> 
        <img src="/image/{{ $buku->sampul }}" alt="Card image cap" width="200" class="mb-3">
        <hr>
        <h4>Judul</h4>
        <p>{{ $buku->judul }}</p>
        <hr>
        <h4>Deskripsi</h4>
        <p>{{ $buku->deskripsi }}</p>
        <hr>
        <h4>Penulis</h4>
        <p>{{ $buku->penulis }}</p>
        <hr>
        <h4>Tahun Buku</h4>
        <p>{{ $buku->tahun }}</p>
        <hr>
     </div>
     
</div>
    <div class="box-footer text-right  ml-3 mr-3 mb-3">
                <a href="/buku" class="btn btn-primary">Kembali</a>
              </div>
    </div>
@endsection