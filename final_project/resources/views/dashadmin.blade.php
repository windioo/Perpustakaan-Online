@extends('layouts.master')

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


     <!-- Page-header end -->
     <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                
                            <!-- order-visitor start -->


                            <!-- order-visitor end -->

                            <!--  sale analytics start -->
                            <div class="col-xl-12 col-md-12">
                                <div class="row">
                                    <!-- sale card start -->

                                    <div class="col-md-6">
                                            <div class="card bg-c-red total-card">
                                                    <div class="card-block">
                                                        <div class="text-left">
                                                            <h4>{{$count_user}}</h4>
                                                            <p class="m-0">Total Member</p>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="card bg-c-blue total-card">
                                                    <div class="card-block">
                                                        <div class="text-left">
                                                            <h4>{{ $count_kategori }}</h4>
                                                            <p class="m-0">Total Kategori</p>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="card bg-c-yellow total-card">
                                                    <div class="card-block">
                                                        <div class="text-left">
                                                            <h4>{{ $count_penerbit }}</h4>
                                                            <p class="m-0">Total Penerbit</p>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="card bg-c-green total-card">
                                                    <div class="card-block">
                                                        <div class="text-left">
                                                            <h4>{{ $count_buku }}</h4>
                                                            <p class="m-0">Total Buku</p>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card text-center order-visitor-card">
                                            <div class="card-block">
                                                <h6 class="m-b-0">Total Baca</h6>
                                                <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>{{$count_pembaca}}</h4>
                                                <p class="m-b-0">From Last Day</p>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <!-- sale card end -->
                                </div>
                            </div>

                            <!--  sale analytics end -->

                            <!-- Project statustic start -->
                            <div class="col-xl-12">
                                <div class="card proj-progress-card">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12">
                                                <h5 class="card-title ">Selamat Datang </h5>
                                                <p>Disini anda dapat melakukan 4 Fungsi input sebagai admin, yaitu menginput data buku, data kategori, data penerbit dan juga data member.
                                                Di tiap fungsi admin dapat melakukan CRUD yaitu Create untuk menambahkan data, Read untuk melihat detail data, Update untuk merubah data, dan Delete untuk manghapus data.</p>
                                                    
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Project statustic end -->
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
                <div id="styleSelector"> </div>
            </div>
        </div>



                                  
@endsection