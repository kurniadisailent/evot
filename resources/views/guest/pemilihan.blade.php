@extends('guest.master')

@section('konten')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-3">
            <h3 class="text-center" id="sb">Vote</h3> <br>
            @if(session('berhasil'))
                  <div class="alert alert-success alert-dismissible fade show">

                      <strong>Berhasil ! </strong>{{ session('berhasil')}}.
                  </div>
                  @endif
        </div>

        @if(Auth::guard('pemilih')->user()->status === 'BELUM')
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
                          <div class="col-md-12">
                            <button href="" class="btn btn-block tombol-vote" style="background-color: #4ECDC4;" type="button" data-url="{{ route('pemilihan.vote',['vote'=>$row->id_calon,'pemilih'=>Auth::guard('pemilih')->user()->id_pemilih])}}">
                              <span class="text-light">
                                VOTE
                              </span>
                            </button>                      
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          @endforeach
          @elseif(Auth::guard('pemilih')->user()->status === 'MEMILIH')
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
                          <div class="col-md-12">
                            <button href="" class="btn btn-block" style="background-color: #f73939;" disabled>
                              <span class="text-light">
                                TELAH MEMILIH
                              </span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          @endforeach
          @endif
        </div>
    </div>      
</div>

@endsection

@push('modal')
<div class="modal fade" tabindex="-1" id="modalVote">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Vote
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda Yakin Memvoting Calon ini ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="#" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Ya,Vote!</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endpush

@push('js')
<script>
    $(function(){
        $('.tombol-vote').click(function(){
            var url = $(this).attr('data-url');
            $("#modalVote form").attr('action',url);
            $('#modalVote').modal('show');
        });
    });
</script>
@endpush      