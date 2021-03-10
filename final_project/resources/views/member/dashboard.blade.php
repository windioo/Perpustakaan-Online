@extends('layoutsmember.mastermember')

@section('content')
<div class="container-fluid">
    <div class="ml-3 pt-5 mr-3">
        <div class="card">
            <div class="card-header with-border">
                <h3 class="card-title">List Buku</h3>
                <hr>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($buku as $key=>$value)
                        <tr>
                            <th scope="row">{{$key +1}}</th>
                            <td>{{$value->judul}}</td>
                            <td>{{$value->deskripsi}}</td>
                            <td>{{$value->penulis}}</td>
                            <td>{{$value->tahun}}</td>
                            <td><a href="/dashboard/{{$value->id}}/show" class="btn btn-info rounded">Show</a></td>
                        </tr>
                    @endforeach 
                    </tbody>
                </table>
                <hr>
                {{$buku->links()}}
            </div>
        </div>
    </div>
</div>

@endsection