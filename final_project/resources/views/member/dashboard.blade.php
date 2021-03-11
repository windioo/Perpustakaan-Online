@extends('layoutsmember.mastermember')

@section('content')
<div class="container-fluid">
    <div class="ml-3 pt-5 mr-3">
        <h3 class="">Dashboard</h3>
        <h5> Helo, Welcome {{ Auth::user()->name}}</h5>
        <div class="card mt-3">
            <div class="card-header with-border">
                <h3 class="card-title">List Buku</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            @foreach($buku as $key=>$value)
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ asset('/image/'.$value->sampul)}}" style="width:100%; height:350px">
                    <div class="card-body">
                        <a href="/dashboard/{{$value->id}}/show" class="card-title"><h5>{{$value->judul}}</h5></a>
                        <hr>
                        <span><b>Penulis : </b>{{$value->penulis}}</span><br>
                        <span><b>Tahun : </b>{{$value->tahun}}</span>
                        <hr>
                        <center>
                            <a href="/dashboard/{{$value->id}}/show" class="btn btn-primary">Read Book</a>
                        </center>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
        <hr>
        <div class="card">
            <div class="card-body">
                    {{ $buku->links() }}
            </div>
        </div> 
    </div>
</div>

@endsection