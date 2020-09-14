@extends('admin.master')

@section('konten')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">tambah pemilih</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body mt-3">
                <div class="row">
                  <div class="col-md-12">
                    <form method="POST" action="{{ route('pemilih.update',['pemilih'=>$data->id_pemilih]) }}">
                  @csrf
                  @method('PUT')
                              <!-- Nama -->
                      <div class="form-group row">
                        <label for="Nama" class="col-md-3 col-form-label col-form-label-md">Nama Pemilih</label>
                        <div class="col-md-7">
                          <input value="{{ old('nama_pemilih',$data->nama_pemilih) }}" type="text" name="nama_pemilih" class="form-control form-control-md border @error('nama_pemilih') is-invalid @enderror" id="colFormLabelSm" placeholder="Masukan Nama Pemilih" required>
                          @error('nama_pemilih')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="Nama" class="col-md-3 col-form-label col-form-label-md">Kelas Pemilih</label>
                        <div class="col-md-7">
                          <input value="{{ old('kelas_pemilih',$data->kelas_pemilih) }}" type="text" name="kelas_pemilih" class="form-control form-control-md border @error('kelas_pemilih') is-invalid @enderror" id="colFormLabelSm" placeholder="Masukan Nama Pemilih" required>
                          @error('kelas_pemilih')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>
                       <!-- jenis -->
                         <div class="form-group row">
                        <label for="exampleFormControlSelect1" class="col-md-3 col-form-label col-form-label-md">Jenis Kelamin</label>
                        <div class="col-md-7">
                          <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option>LAKI-LAKI</option>
                            <option>PEREMPUAN</option>
                          </select>
                        </div>
                      </div>

                       <!-- username -->
                      <div class="form-group row">
                        <label for="username" class="col-md-3 col-form-label col-form-label-md">Username</label>
                        <div class="col-md-7">
                          <input value="{{ old('username',$data->username) }}" type="text" name="username" class="form-control form-control-md border @error('username') is-invalid @enderror " id="colFormLabelSm" value="" placeholder="Masukan Username" required>
                          @error('username')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>

                       <!-- Password -->
                      <div class="form-group row">
                        <label for="Password" class="col-md-3 col-form-label col-form-label-md">Password</label>
                        <div class="col-md-7">
                          <input type="Password" name="password" class="form-control form-control-md border" id="colFormLabelSm" value="" placeholder="Masukan Password" >
                        </div>
                      </div>
          
                      <button class="btn btn-danger px-4">submit</button>

                    </form>
                  </div>
                </div>  
              </div>
            </div>
        </div>
    </div>      
</div>

@endsection