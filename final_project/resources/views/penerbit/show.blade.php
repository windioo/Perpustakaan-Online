@extends('layouts.master')

@section('content')
    <div class="ml-3 pt-5 mr-3">
 <div class="card card-primary ">
            <div class="card-header with-border ">
              <h3 class="card-title ">Show Data Penerbit Buku</h3>
            </div>
            
            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" action="{{route('penerbit.store')}}" method="POST">
                @csrf
              <div class="box-body">
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Nama Penerbit</label>
                  <input type="text" class="form-control" id="nama" name="nama"  value="{{ $penerbit->nama }}" readonly placeholder="Masukkan Nama Penerbit">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Nomer Telepon</label>
                  <input type="text" class="form-control" id="no_telp" name="no_telp"  value="{{ $penerbit->no_telp }}" readonly placeholder="Masukkan Nomor Telepon">
                    @error('no_telp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat"  value="{{ $penerbit->alamat }}" readonly placeholder="Masukkan Alamat">
                    @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-right  ml-3 mr-3 mb-3">
                <a href="{{route('penerbit.index')}}" class="btn btn-default ml-3">Kembali</a>
               </div>
            </form>
          </div>
</div>
@endsection

