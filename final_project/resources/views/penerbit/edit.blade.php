@extends('layouts.master')


@section('content')
    <div class="ml-3 pt-5 mr-3">
 <div class="card card-primary ">
            <div class="card-header with-border ">
              <h3 class="card-title ">Ubah Data Penerbit </h3>
            </div>
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('penerbit.update',['penerbit'=> $penerbit->id])}}" method="POST">
                @csrf
                @method('PUT')
              <div class="box-body">
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Nama Penerbit</label>
                  <input type="text" class="form-control" id="nama" name="nama"  value="{{ old('nama',$penerbit->nama) }}" placeholder="Masukkan Nama Penerbit">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Nomer Telepon</label>
                  <input type="text" class="form-control" id="no_telp" name="no_telp"  value="{{ old('no_telp',$penerbit->no_telp) }}" placeholder="Masukkan Nomor Telepon">
                    @error('no_telp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat"  value="{{ old('alamat',$penerbit->alamat) }}" placeholder="Masukkan Alamat">
                    @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-right  ml-3 mr-3 mb-3">
                <a href="{{route('penerbit.index')}}" class="btn btn-default ml-3">Kembali</a>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
              </div>
            </form>
          </div>
</div>
@endsection