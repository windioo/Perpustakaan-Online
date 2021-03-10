@extends('layouts.master')


@section('content')
    <div class="ml-3 pt-5 mr-3">
 <div class="card card-primary ">
            <div class="card-header with-border ">
              <h3 class="card-title ">Ubah Kategori </h3>
            </div>
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/kategori/{{ $kategori->id }}" method="POST">
                @csrf
                @method('PUT')
              <div class="box-body">
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Nama Kategori</label>
                  <input type="text" class="form-control" id="nama" name="nama"  value="{{ old('nama', $kategori->nama) }}" placeholder="Masukkan Nama">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-right  ml-3 mr-3 mb-3">
                  <a href="/kategori" class="btn btn-default ml-3">Kembali</a>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
              </div>
            </form>
          </div>
</div>
@endsection