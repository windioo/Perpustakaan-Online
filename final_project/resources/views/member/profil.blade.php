@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="ml-3 pt-5 mr-3">
        <div class="row">
            <div class="col-lg-4 sm-12">
                <div class="card">
                    <div class="card-body">
                        <img class="img-fluid rounded" style="width: 100%;" src="{{ asset('assets/images/Foto Profile/'.$profil->foto)}}" alt="">
                        <hr>
                        <form class="form-group" method="POST" enctype="multipart/form-data" action="/profil/{{ $profil->id}}/updatefoto">
                        @method('PUT')
                        @csrf
                            <input type="file" class="form-control" name="file">
                            <hr>
                            <center>
                                <input type="submit" class="btn btn-primary rounded mx-auto d-block" name="submit" value="update foto">
                            </center>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="d-flex justify-content-center">Profil Member</h4>
                        <hr>
                        <form class="form-group" method="POST" action="/profil/{{$profil->id}}">
                        @method('PUT')
                        @csrf
                            <label for="nama">Nama Lengkap : </label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $profil->nama}}">
                            <label for="nik">NIK : </label>
                            <input type="text" class="form-control" id="nik" name="nik" value="{{ $profil->nik}}">
                            <label for="alamat">Alamat : </label>
                            <textarea id="alamat" class="form-control" name="alamat" rows="2" style="resize: none;">{{$profil->alamat}}</textarea>
                            <label for="jk">Jenis Kelamin :</label>
                            <input type="text" class="form-control" id="jk" name="jenis_kelamin" value="{{$profil->jenis_kelamin}}" readonly>
                            <label for="telp">No. Telp :</label>
                            <input type="text" class="form-control" id="telp" name="telp" value="{{$profil->telp}}">
                            <hr>
                            <center>
                                <input class="btn btn-primary rounded" type="submit" name="submit" value="Update Profil">
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection