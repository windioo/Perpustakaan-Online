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
                  <label for="exampleInputEmail1">Judul Buku</label>
                  <input type="text" class="form-control" id="judul" name="judul"  value="{{ old('judul', $buku->judul) }}" placeholder="Masukkan Judul">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group ml-3 mr-3">
                  <label for="exampleInputPassword1">Deskripsi</label>
                  <input class="form-control" rows="3" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $buku->deskripsi) }}" placeholder="Masukkan Deskripsi"></input>
                  @error('deskripsi')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                 <div class="form-group ml-3 mr-3">
                  <label for="exampleInputPassword1">Penulis</label>
                  <input class="form-control" rows="3" id="penulis" name="penulis" value="{{ old('penulis', $buku->penulis) }}" placeholder="Masukkan Penulis"></input>
                  @error('penulis')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                 <div class="form-group ml-3 mr-3">
                  <label for="exampleInputPassword1">Tahun</label>
                  <input class="form-control" rows="3" id="tahun" name="tahun" value="{{ old('tahun', $buku->tahun) }}" placeholder="Masukkan Tahun"></input>
                  @error('tahun')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group ml-3 mr-3 mt-3">

                    <label for="exampleInputEmail1">Kategori</label>  
                    <select name="kategori_id" id="kategori_id" class="form-control" >
                      <option disabled value>Pilih Kategori</option>
                      @foreach ($kat as $kt)
                          <option value="{{ $kt->id }}" @if($buku->kategori_id == $kt->id ) selected @endif>{{ $kt->nama }}</option>
                      @endforeach
                      
                    </select>
                      @error('kategori_id')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div> 
                  <div class="form-group ml-3 mr-3 mt-3">
                    <label for="exampleInputEmail1">Penerbit</label>  
                    <select name="penerbit_id" id="penerbit_id" class="form-control" >
                      <option disabled value>Pilih Penerbit</option>
                      @foreach ($pen as $item)
                          <option value="{{ $item->id }}" @if($buku->penerbit_id == $item->id ) selected @endif>{{ $item->nama }}</option>
                      @endforeach
                      
                    </select>
                      @error('penerbit_id')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div> 
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Upload Sampul</label>
                  <input type="file" class="form-control-file mb-2" id="sampul" name="sampul" required>
                  <img src="{{ asset('image/'. $buku->sampul) }}" width="200">
                    @error('sampul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Upload Buku</label>
                   <input type="text" class="form-control-file mb-2 col-2" disabled id="file" name="file" value="{{ $buku->file }}" required>
                   <input type="file" class="form-control-file" id="file" name="file">
                    @error('file')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
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

