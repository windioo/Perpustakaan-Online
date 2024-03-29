@extends('layouts.master')

@section('content')

<div class="ml-3 pt-5 mr-3">
   <div class="card card-primary ">
              <div class="card-header with-border ">
                <h3 class="card-title ">Show Kategori Buku</h3>
              </div> 
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="#" method="POST">
                @csrf
                <div class="box-body">
                  <div class="form-group ml-3 mr-3 mt-3">
                    <label for="exampleInputEmail1">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama" name="nama"  value="{{ $kategori->nama }}" placeholder="Masukkan Kategori" readonly>
                      @error('nama')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div> 
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-right  ml-3 mr-3 mb-3">
                <a href="{{route('kategori.index')}}" class="btn btn-default ml-3">Kembali</a>
                </div>
              </form>
            </div>
  </div>

@endsection