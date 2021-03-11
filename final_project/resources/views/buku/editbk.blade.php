@extends('layouts.master')

@section('content')
<div class="ml-3 pt-3 mt-3">
 <div class="card card-primary ">
            <div class="card-header with-border ">
              <h3 class="card-title ">Ubah Data Buku </h3>
            </div>
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/buku/{{ $buku->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="box-body">
                 <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Upload Sampul</label>
                  <input type="file" class="form-control-file mb-2" id="sampul" name="sampul">
                  <img src="{{ asset('image/'. $buku->sampul) }}" alt="">
                    @error('sampul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> <hr>
                 {{-- <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Upload Buku</label>
                  <input type="text" class="form-control-file mb-2 col-2" disabled id="file" name="file" value="{{ $buku->file }}">
                   <input type="file" class="form-control-file" id="file" name="file" >
                    @error('file')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>  --}}
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-right  ml-3 mr-3 mb-3">
                  <a href="/buku" class="btn btn-default ml-3">Kembali</a>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
              </div>
            </form>
          </div>
</div>
   
@endsection

