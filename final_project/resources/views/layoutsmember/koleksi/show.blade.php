@extends('layoutsmember.mastermember')

@section('content')
<div class="container-fluid">
    <div class="ml-3 pt-5 mr-3">
        <div class="row">
            <div class="col-lg-4 sm-12">
                <div class="card">
                    <div class="card-body">
                        <img class="img-fluid rounded" style="width: 100%;" src="{{ asset('assets/images/Foto Profile/'.$member->profil->foto)}}" alt="">
                        <hr>
                         <center>
                         <a class="btn btn-primary rounded mx-auto d-block" href="{{route('member.index')}}"> Kembali </a>
                         </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="d-flex justify-content-center">Profil Member</h4>
                        <hr>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="form-group" method="POST" action="/profil/{{$member->profil->id}}">
                        @method('PUT')
                        @csrf
                            <label for="nama">Nama Lengkap : </label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $member->profil->nama}}">
                            <label for="nik">NIK : </label>
                            <input type="text" class="form-control" id="nik" name="nik" value="{{ $member->profil->nik}}">
                            <label for="alamat">Alamat : </label>
                            <textarea id="alamat" class="form-control" name="alamat" rows="2" style="resize: none;">{{$member->profil->alamat}}</textarea>
                            <label for="jk">Jenis Kelamin :</label>
                            <input type="text" class="form-control" id="jk" name="jenis_kelamin" value="{{$member->profil->jenis_kelamin}}">
                            <label for="telp">No. Telp :</label>
                            <input type="text" class="form-control" id="telp" name="telp" value="{{$member->profil->telp}}">
                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection