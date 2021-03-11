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
                        <img class="img-fluid rounded" src="{{ asset('image/'.$buku->sampul)}}" alt="">
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
                                <input type="text" readonly class="form-control" id="kategori" name="kategori" value="{{$buku->kategori->nama}}">
                            </div>
                            <div class="col-6">
                                <label for="penerbit">Penerbit Buku : </label>
                                <input type="text" readonly class="form-control" id="penerbit" name="penerbit" value="{{$buku->penerbit->nama}}">
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
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">Latest Comment</h3>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <form method="POST" action="/dashboard/{{$buku->id}}/show">
                            @csrf 
                                <textarea id="komen" class="form-control" name="komen" rows="3" style="resize:none" placeholder="Tuliskan Komentar..."></textarea>
                                <div class="d-flex justify-content-end mt-2">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Comment">
                                </div>
                            </form>
                        </div>
                        <hr>
                       @foreach($komen as $key => $value)
                        <div class="col-3">
                            <img class="img-fluid rounded-circle" style="width:50px;height: 50px;" src="{{ asset('assets/images/Foto Profile/'.$value->foto)}}" alt="">
                        </div>
                        <div class="col-9">
                            <h5>{{$value->nama}}</h5>
                            <p>{{$value->komentar}}</p>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection