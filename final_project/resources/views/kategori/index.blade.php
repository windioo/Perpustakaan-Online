@extends('layouts.master')


@section('content')
     <div class="ml-3 pt-5 mr-3">
        <div class="card card-primary">
            <div class="card-header with-border">
              <h3 class="card-title">Table Kategori</h3>
            </div>
            <!-- /.box-header -->
            <div class="card-body">
              @if(session('success')) 
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif
              <a href="{{ route("kategori.create") }}" class="btn btn-primary mt-2 mb-3">Buat Kategori</a>
              <table class="table table-bordered" id="example">
                <thead class="bg-dark text-light"><tr>
                  <th style="width: 10px">No</th>
                  <th>Nama Kategori</th>
                  <th style="width: 40px">Actions</th>
                </tr></thead>
                <tbody>
                @forelse ($kategori as $key => $kat)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $kat->nama }}</td>
                    <td style="display: flex">
                      <a href="/kategori/{{ $kat->id }}" class="btn btn-info btn-sm m-sm-1">Show</a>
                      <a href="/kategori/{{ $kat->id }}/edit" class="btn btn-success btn-sm m-sm-1">Edit</a>
                      <a href="/kategori/delete/{{ $kat->id }}" class="btn btn-danger btn-sm m-sm-1 button delete-confirm">Delete</a>
                      
                    </td>
                </tr>    
                @empty
                <tr>
                  <td colspan ="4" align="center">Belum ada Kategori</td>
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