
@extends('layoutsmember.mastermember')

@section('content')
     <div class="ml-3 pt-5 mr-3">
        <div class="card card-primary">
            <div class="card-header with-border">
              <h3 class="card-title">Table Histori</h3>
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
                  <th>Buku</th>
                  <th>Selesai dibaca</th>
                  <th style="width: 40px">Actions</th>
                </tr></thead>
                <tbody>
                @forelse ($histori as $key => $data)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $data->buku->judul }}</td>
                    <td>{{ $data->updated_at }}</td>
                    <td style="display: flex">

                      <form method="POST" action="/koleksi/{{$data->id}}/view" target="_blank">
                      @csrf
                        <button type="submit" name="submit" class="btn btn-info btn-sm m-sm-1">Baca</button>
                      </form>  
                      <button type="button" class="btn btn-success btn-sm m-sm-1 btn-modal" 
                          data-url="{{route('histori.update',['histori' => $data->id ])}}" 
                          data-ulasan="{{$data->ulasan}}" data-rating="{{$data->rating}}" data-judul="{{$data->buku->judul}}">
                        Ulasan
                      </button>
              
                    </td>
                </tr>    
                @empty
                <tr>
                  <td colspan ="4" align="center">Belum ada histori</td>
                </tr>
                @endforelse
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            
          </div>
    </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="" method="POST">
        @csrf
        @method('PUT')
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <div class="rating">
            <input type="radio" name="star" id="star5" value="5"><label for="star5"></label>
            <input type="radio" name="star" id="star4" value="4"><label for="star4"></label>
            <input type="radio" name="star" id="star3" value="3"><label for="star3"></label>
            <input type="radio" name="star" id="star2" value="2"><label for="star2"></label>
            <input type="radio" name="star" id="star1" value="1"><label for="star1"></label>
          </div>
          <div style="margin-top:100px"></div>
          <textarea rows="5" cols="5" class="form-control" name="ulasan" id="ulasan"  value="{{ old('ulasan','') }}" placeholder="Tulis ulasan" readonly></textarea>
          @error('ulasan')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
    </div>
  </div>

@endsection




@push('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rating.css') }}">
@endpush


@push('script')
  <script>
    $(document).ready(function () {
      $('.btn-modal').on('click',function() {
        $('#exampleModal').modal('show');
        $('#exampleModal').find('form').attr('action', $(this).data('url'))
        $('.modal-title').text($(this).data('judul'))
        $('#ulasan').val($(this).data('ulasan'))
        $('#star'+$(this).data('rating')).attr('checked','checked')
      })
    })
  </script>

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>
  @endpush