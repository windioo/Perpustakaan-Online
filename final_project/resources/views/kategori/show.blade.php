@extends('layouts.master')

@section('content')
    <div class="mt-3 ml-3 mr-3">
    <div class="card card-primary">
     <div class="card-header with-border">
        <h3 class="card-title">Show Table</h3>
     </div>

     <div class="card-body"> 
        <p>Kategori : {{ $kategori->nama }}</p>
        <hr>
     </div>
     
</div>
    <div class="box-footer text-right  ml-3 mr-3 mb-3">
                <a href="/kategori" class="btn btn-primary">Kembali</a>
              </div>
    </div>
@endsection