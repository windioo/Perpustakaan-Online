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
  <div class="ml-5 pt-5 mr-5">
 <div class="card card-primary ">
            <div class="card-header with-border ">
              <h3 class="card-title ">Selamat Datang </h3>
              <h5>Disini anda dapat melakukan 4 Fungsi input sebagai admin, yaitu menginput data buku, data kategori, data penerbit dan juga data member.
              Di tiap fungsi admin dapat melakukan CRUD yaitu Create untuk menambahkan data, Read untuk melihat detail data, Update untuk merubah data, dan Delete untuk manghapus data.</h5>
              
            </div>
          </div>
</div>


                                  
@endsection