@extends('layouts.master')


@section('content')
     <div class="ml-3 pt-5 mr-3">
        <div class="card card-primary">
            <div class="card-header with-border">
              <h3 class="card-title">Table Data Buku</h3>
            </div>
            <!-- /.box-header -->
            <div class="card-body">
              @if(session('success')) 
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif
              <a href="{{ route("buku.create") }}" class="btn btn-primary mt-2 mb-3">Buat Data Buku</a>
              <table class="table table-bordered">
                <thead class="bg-dark text-light"><tr>
                  <th style="width: 10px">No</th>
                  <th>Judul Buku</th>
                  <th>Penulis</th>
                  <th>Sampul</th>
                  <th style="width: 40px">Actions</th>
                </tr></thead>
                <tbody>
                @forelse ($buku as $key => $bk)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $bk->judul }}</td>
                    <td>{{ $bk->penulis }}</td>
                    <td class="text-center"><img src="/image/{{ $bk->sampul }}" alt="Sampul {{ $bk->judul }}" width="50px"></td>
                    <td style="display: flex">
                      <a href="/buku/{{ $bk->id }}" class="btn btn-info btn-sm m-sm-1 " >Show</a>
                      <a href="/buku/{{ $bk->id }}/edit" class="btn btn-success btn-sm m-sm-1">Edit</a>
                      <a href="/buku/delete/{{ $bk->id }}" class="btn btn-danger btn-sm m-sm-1 button delete-confirm">Delete</a>
             
                      
                    </td>
                </tr>    
                @empty
                <tr>
                  <td colspan ="4" align="center">Belum ada Data Buku</td>
                </tr>
                @endforelse
                </tbody>
              
               
              </table>
            </div>
            <!-- /.box-body -->
            
          </div>
    </div>
@endsection

@push('script')
  <script type="text/javascript" src="{{ asset('assets/js/sweetalert.js') }}"></script>
@endpush