@extends('layoutsmember.mastermember')

@section('content')
<div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                        <p class="m-b-0">Helo, Welcome {{ Auth::user()->name}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Search -->
    <div class="ml-3 pt-5 mr-3">
        <div class="card card-primary ">
                <div class="card-header with-border ">
                  <h5 class="card-title ">Search Buku</h5>
                </div>
                       
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/kategori" method="POST">
                    @csrf
                  <div class="box-body">
                    <div class="form-group ml-3 mr-3 mt-3">
                      <input type="text" class="form-control" id="nama" name="nama"  value="{{ old('nama','') }}" placeholder="Search ...">
                    </div> 
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer text-right  ml-3 mr-3 mb-3">
                    <a href="/kategori" class="btn btn-default ml-3">Reset</a>
                    <button type="submit" class="btn btn-primary btn-sm ml-3">Search</button>
                 </div>
               </form>
             </div>
        </div>
    
     <!-- Search end -->

     <!-- Page-header end -->
     <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                
                                <div class="row">
                                        @foreach($buku as $key=>$value)
                                        <div class="col-md-6 col-lg-3 col-sm-12">
                                            <div class="card shadow" style="">
                                                <img class="card-img-top" src="{{ asset('/image/'.$value->sampul)}}" style="width:100%; height:350px">
                                                <div class="card-body">
                                                    <a href="/dashboard/{{$value->id}}/show" class="card-title"><h5>{{$value->judul}}</h5></a>
                                                    <hr>
                                                    <span><b>Penulis : </b>{{$value->penulis}}</span><br>
                                                    <span><b>Rating : </b>{{ceil($value->total_rating) ?? 0}} / 5 <i class="ti-star"></i></span>
                                                    <hr>
                                                    <center>
                                                        <a href="/dashboard/{{$value->id}}/show" class="btn btn-info btn-sm mr-2"><i class="ti-eye"></i>Preview</a>
                                                        <a href="/dashboard/{{$value->id}}/show" class="btn btn-success btn-sm"><i class="ti-bookmark"></i> Read Book</a>
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
                    <!-- Page-body end -->
                </div>
                <div id="styleSelector"> </div>
            </div>
        </div>

@endsection