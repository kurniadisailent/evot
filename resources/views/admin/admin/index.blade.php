@extends('admin.master')

@section('konten')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Admin</h6>
              </div>
          @if (session('store'))
          <div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">
                  <span>&times;</span>
              </button>
              <strong>Success!</strong> {{ session('destroy') }}.
          </div>  
          @endif

          @if (session('update'))
          <div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">
                  <span>&times;</span>
              </button>
              <strong>Success!</strong> {{ session('destroy') }}.
          </div>  
          @endif

          @if(session('destroy'))
          <div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">
                  <span>&times;</span>
              </button>
              <strong>Succes!</strong>{{ session('destroy')}}.
          </div>
          @endif
              <!-- Card Body -->
              <div class="card-body mt-3">
                <div class="row">

                  <div class="col-md-6">
                    <a href="{{route('admin.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Admin</a>
                  </div>

                  <!-- Search -->
                  <div class="col-md-4 offset-md-2">
                    <form action="?" method="GET">
                      <div class="input-group mb-3">
                        <input name="keyword" id="caribuku" type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="button-addon2" value="">
                        <div class="input-group-append">
                          <button id="btncaribuku" class="btn btn-outline-secondary bg-primary" type="submit" id="button-addon2"><i class="fas fa-search text-light"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <!-- Table -->
                  <div class="col-md-12">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no = 1;?>
                      @foreach($data as $row)
                        <tr>
                          <td>{{$no++}}</td>
                          <td>{{$row->nama_admin}}</td>
                          <td>{{$row->username}}</td>
                          <td>
                          <a href="{{route('admin.edit',['admin'=>$row->id_admin])}}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                          </a>
                          <button class="btn btn-sm btn-danger tombol-hapus" type="button" data-url="{{ route('admin.destroy',['admin'=>$row->id_admin])}}">
                            <i class="fas fa-trash alt"></i>
                          </button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div> 
                {!! $data->links() !!} 
              </div>
            </div>
        </div>
    </div>      
</div>

@endsection

@push('modal')
<div class="modal fade" tabindex="-1" id="modalHapus">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fas fa-trash-alt"></i>Hapus
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah yakin akan dihaspus?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="#" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Ya,Hapus!</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endpush

@push('js')
<script>
    $(function(){
        $('.tombol-hapus').click(function(){
            var url = $(this).attr('data-url');
            $("#modalHapus form").attr('action',url);
            $('#modalHapus').modal('show');
        });
    });
</script>
@endpush      