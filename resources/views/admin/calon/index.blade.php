@extends('admin.master')

@section('konten')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Calon</h6>
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
                <div class="row justify-content-center">
                  <div class="col-md-11 mb-5">
                    <a href="{{route('calon.create')}}" class="btn btn-primary px-3"><i class="fa fa-plus"></i> Tambah calon</a>
                  </div>
                  <?php $no = 1 ?>
                  @foreach($data as $row)
                  <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="card h-60 shadow-sm">
                      <div class="card-head">
                        <h3 class="text-center mt-2" style="color: #4ECDC4;">{{$no++}}</h3>
                        <a href="#"><img class="card-img-top" src="{{ url('images/'.$row->foto_ketua) }}" alt="" style="max-width: 50%;" ><img class="card-img-top" src="{{ url('images/'.$row->foto_wakil) }}" alt="" style="max-width: 50%;"></a>
                      </div>            
                      <div class="card-body">
                        <div class="card-title text-center">
                          <h4 class="">
                          <a href="" id="sb" style="font-size: 17px; color: #4ECDC4;">{{$row->nama_ketua}} & {{$row->nama_wakil}}</a><br>
                          </h4>
                          <span class="text-secondary" style="font-size: 15px;">{{$row->kelas_ketua}} & {{$row->kelas_wakil}}</span>
                        </div>
                        <p class="card-text">
                        <b id="me">Visi :</b> <br>
                        <div class="col-md-12">
                          <textarea type="text" name="misi" class="form-control form-control-md border " id="colFormLabelSm" rows="5" disabled>{{$row->visi}}</textarea> 
                        </div>
                        <b id="me">Misi :</b><br>
                        <div class="col-md-12">
                          <textarea type="text" name="misi" class="form-control form-control-md border " id="colFormLabelSm" rows="5" disabled>{{$row->misi}}</textarea> 
                        </div>
                    </p> 
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-md-6">
                            <a href="{{route('calon.edit',['calon'=>$row->id_calon])}}" class="btn btn-block btn-success"><span class="text-light"><i class="fa fa-edit"></i> Edit</span></a>
                          </div>
                          <button class="btn btn-sm btn-danger tombol-hapus col-md-6" type="button" data-url="{{ route('calon.destroy',['calon'=>$row->id_calon])}}">
                            <i class="fas fa-trash alt"></i> Hapus
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
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