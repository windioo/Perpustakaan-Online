@extends('layouts.master')

@section('content')
    <div class="mt-3 ml-3 mr-3">
    <div class="card card-primary">
     <div class="card-header with-border">
        <h3 class="card-title">Show Table</h3>
     </div>

     <div class="card-body"> 
        <p>Penerbit : {{ $penerbit->nama }}</p>
        <hr>
        <p>Nomor Telepon : {{ $penerbit->no_telp }}</p>
        <hr>
        <p>ALamat : {{ $penerbit->alamat }}</p>
     </div>
     
</div>
    <div class="box-footer text-right  ml-3 mr-3 mb-3">
                <a href="/penerbit" class="btn btn-primary">Kembali</a>
              </div>
    </div>
@endsection