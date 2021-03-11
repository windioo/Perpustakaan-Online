@extends('layouts.master')


@section('content')
     <div class="ml-3 pt-5 mr-3">
        <div class="card card-primary">
            <div class="card-header with-border">
              <h3 class="card-title">Table Data Penerbit</h3>
            </div>
            <!-- /.box-header -->
            <div class="card-body">
              @if(session('success')) 
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif
              <a href="{{ route("penerbit.create") }}" class="btn btn-primary mt-2 mb-3">Buat Data Penerbit</a>
              <table class="table table-bordered" id="example">
                <thead class="bg-dark text-light"><tr>
                  <th style="width: 10px">No</th>
                  <th>Nama Penerbit</th>
                  <th style="width: 40px">Actions</th>
                </tr></thead>
                <tbody>
                @forelse ($penerbit as $key => $pen)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $pen->nama }}</td>
                    <td style="display: flex">
                      <a href="/penerbit/{{ $pen->id }}" class="btn btn-info btn-sm m-sm-1">Show</a>
                      <a href="/penerbit/{{ $pen->id }}/edit" class="btn btn-success btn-sm m-sm-1">Edit</a>
                      <a href="/penerbit/delete/{{ $pen->id }}" class="btn btn-danger btn-sm m-sm-1 button delete-confirm">Delete</a>
              
                      
                    </td>
                </tr>    
                @empty
                <tr>
                  <td colspan ="4" align="center">Belum ada Data Penerbit</td>
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
  <script>
      $(document).ready(function() {
        $('#example').DataTable();
      } );
    </script>
@endpush