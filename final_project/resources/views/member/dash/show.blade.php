@extends('layoutsmember.mastermember')

@section('content')
<div class="container-fluid">
    <div class="ml-3 pt-5 mr-3">
        <div class="row">
            <div class="col-lg-4 sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sampul Buku</h3>
                        <hr>
                    </div>
                    <div class="card-body">
                        <img class="img-fluid rounded" src="#" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Buku</h3>
                        <hr>
                    </div>
                    <div class="card-body">
                        <form class="form-group form-row" action="">
                            <div class="col-12">
                                <label for="judul">Judul Buku : </label>
                                <input type="text" readonly class="form-control" id="judul" name="judul" value="{{$buku->judul}}">
                            </div>
                            <div class="col-12">
                                <label for="deskripsi">Deskripsi Buku : </label>
                                <textarea id="deskripsi" class="form-control" readonly name="desk" rows="4" style="resize:none;">{{$buku->deskripsi}}</textarea>
                            </div>
                            <div class="col-6">
                                <label for="penulis">Penulis Buku : </label>
                                <input type="text" readonly class="form-control" id="penulis" name="penulis" value="{{$buku->penulis}}">
                            </div>
                            <div class="col-6">
                                <label for="tahun">Tahun Release Buku : </label>
                                <input type="text" readonly class="form-control" id="tahun" name="tahun" value="{{$buku->tahun}}">
                            </div>
                            <div class="col-6">
                                <label for="kategori">Kategori Buku : </label>
                                <input type="text" readonly class="form-control" id="kategori" name="kategori" value="">
                            </div>
                            <div class="col-6">
                                <label for="penerbit">Penerbit Buku : </label>
                                <input type="text" readonly class="form-control" id="penerbit" name="penerbit" value="">
                            </div>
                        </form>
                        <hr>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary">Read Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection