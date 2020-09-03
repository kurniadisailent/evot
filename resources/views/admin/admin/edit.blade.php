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
                  <form method="POST" action="{{ route('admin.update',['admin'=>$data->id_admin]) }}">
                  @csrf
                  @method('PUT')
                      <!-- Nama -->
                      <div class="form-group row">
                        <label for="Nama" class="col-md-3 col-form-label col-form-label-md">Nama admin</label>
                        <div class="col-md-7">
                          <input value="{{ old('nama_admin',$data->nama_admin) }}" type="text" name="nama_admin" class="form-control form-control-md border @error('nama_admin') is-invalid @enderror" id="colFormLabelSm" placeholder="Masukan">
                          @error('nama_admin')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>

                       <!-- Username -->
                      <div class="form-group row">
                        <label for="Username" class="col-md-3 col-form-label col-form-label-md">Username</label>
                        <div class="col-md-7">
                          <input value="{{ old('username',$data->username) }}" type="text" name="username" class="form-control form-control-md border @error('username') is-invalid @enderror" id="colFormLabelSm" value="" placeholder="Masukan username">
                        </div>
                        @error('username')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                        @enderror
                      </div>

                       <!-- Password -->
                      <div class="form-group row">
                        <label for="Password" class="col-md-3 col-form-label col-form-label-md">Password</label>
                        <div class="col-md-7">
                          <input type="Password" name="password" class="form-control form-control-md border form-control-md border @error('password') is-invalid @enderror" id="colFormLabelSm" value="" placeholder="Masukan Password">
                          @error('password')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
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