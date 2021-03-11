@extends('layouts.master')

@section('content')
    <div class="ml-3 pt-5 mr-3">
 <div class="card card-primary ">
            <div class="card-header with-border ">
              <h3 class="card-title ">Buat Data Buku</h3>
            </div>
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/buku" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="box-body">
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Judul Buku</label>
                  <input type="text" class="form-control" id="judul" name="judul"  value="{{ old('judul','') }}" placeholder="Masukkan Judul Buku">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                 <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Deskripsi</label>
                  <textarea class="form-control" rows="3" id="deskripsi" name="deskripsi" value="{{ old('deskripsi','') }}" placeholder="Masukkan Deskripsi Buku"></textarea>
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                 <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Penulis</label>
                  <input type="text" class="form-control" id="penulis" name="penulis"  value="{{ old('penulis','') }}" placeholder="Masukkan Penulis Buku">
                    @error('penulis')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                 <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Tahun Buku</label>
                  <input type="text" class="form-control" id="tahun" name="tahun"  value="{{ old('tahun','') }}" placeholder="Masukkan Tahun Buku">
                    @error('tahun')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                <div class="form-group ml-3 mr-3 mt-3">

                  <label for="exampleInputEmail1">Kategori</label>  
                  <select name="kategori_id" id="kategori_id" class="form-control" >
                    <option disabled value>Pilih Kategori</option>
                    @foreach ($kat as $kt)
                        <option value="{{ $kt->id }}">{{ $kt->nama }}</option>
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
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                    
                  </select>
                    @error('penerbit_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                 <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Upload Sampul</label>
                  <input type="file" class="form-control-file" id="sampul" name="sampul" accept="image/*" >
                    @error('sampul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                 <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Upload Buku</label>
                   <input type="file" class="form-control-file" id="file" name="file" accept="application/pdf">
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