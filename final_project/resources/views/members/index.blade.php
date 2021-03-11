@extends('layouts.master')


@section('content')
     <div class="ml-3 pt-5 mr-3">
        <div class="card card-primary">
            <div class="card-header with-border">
              <h3 class="card-title">Table Member</h3>
            </div>
            <!-- /.box-header -->
            <div class="card-body">
              @if(session('success')) 
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif
              <table class="table table-bordered" id="example">
                <thead class="bg-dark text-light"><tr>
                  <th style="width: 10px">No</th>
                  <th>Nama member</th>
                  <th>Email</th>
                  <th>Tanggal Daftar</th>
                  <th>Status</th>
                  <th style="width: 40px">Actions</th>
                </tr></thead>
                <tbody>
                @forelse ($member as $key => $data)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->created_at }}</td>
                    @if($data->profil->is_active == "0")
                    <td>{{ 'Tidak Aktif'}}</td>
                    @else
                    <td>{{ 'Aktif'}}</td>
                    @endif
                    <td style="display: flex">
                      <a href="/member/{{ $data->id }}" class="btn btn-info btn-sm m-sm-1">Show</a>
                      <form action="/member/{{ $data->id }}" method="POST">
                        @csrf
                        @method('PUT') 
                         @if($data->profil->is_active == 0)
                           <input type="submit" name="approve" value="approve" class="btn btn-success btn-sm m-sm-1">
                         @else
                           <input type="submit" name="approve" value="reject" class="btn btn-danger btn-sm m-sm-1">
                         @endif
                       </form>
                      
                    </td>
                </tr>    
                @empty
                <tr>
                  <td colspan ="4" align="center">Belum ada member</td>
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

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>
    
@endpush