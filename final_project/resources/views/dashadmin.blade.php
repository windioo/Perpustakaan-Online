@extends('layouts.master')

@section('content')
<div class="pt-5 ml-5">
        <h3 class="">Dashboard</h3>
        <h5> Helo, Welcome {{ Auth::user()->name}}</h5>
    </div>
<div class="container ">
    
    <div class="d-flex justify-content-around pt-5 ">
    <div class="col-md-3">
            <div class="card bg-c-red total-card">
                <div class="card-block">
                    <div class="text-left">
                        <h4>{{$count_user}}</h4>
                        <p class="m-0">Total Member</p>
                    </div>
                
                </div>
            </div>
    </div> 
    <div class="col-md-3">
            <div class="card bg-c-blue total-card">
                <div class="card-block">
                    <div class="text-left">
                        <h4>{{ $count_kategori }}</h4>
                        <p class="m-0">Total Kategori</p>
                    </div>
                
                </div>
            </div>
    </div> 
     <div class="col-md-3">
            <div class="card bg-c-purple total-card">
                <div class="card-block">
                    <div class="text-left">
                        <h4>{{ $count_penerbit }}</h4>
                        <p class="m-0">Total Penerbit</p>
                    </div>
                
                </div>
            </div>
    </div> 
     <div class="col-md-3">
            <div class="card bg-c-green total-card">
                <div class="card-block">
                    <div class="text-left">
                        <h4>{{ $count_buku }}</h4>
                        <p class="m-0">Total Buku</p>
                    </div>
                
                </div>
            </div>
    </div> 
    
</div>
</div>
<div class="ml-3 pt-5 mr-3">
 <div class="card card-primary ">
            <div class="card-header with-border ">
              <h3 class="card-title ">Belum Tau.... </h3>
            </div>
            
          
          </div>
</div>

                                  
@endsection