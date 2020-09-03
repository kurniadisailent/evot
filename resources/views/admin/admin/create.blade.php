@extends('admin.master')

@section('konten')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Admin</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body mt-3">
                <div class="row">
                  <div class="col-md-12">
                  <form form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <!-- Nama -->
                      <div class="form-group row">
                        <label for="Nama" class="col-md-3 col-form-label col-form-label-md">Nama admin</label>
                        <div class="col-md-7">
                          <input type="text" name="nama_admin" class="form-control form-control-md border @error('nama_admin') is-invalid @enderror " id="colFormLabelSm" placeholder="Masukan">
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
                          <input type="text" name="username" class="form-control form-control-md border @error('username') is-invalid @enderror " id="colFormLabelSm" value="" placeholder="Masukan username">
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
                          <input type="Password" name="password" class="form-control form-control-md border @error('password') is-invalid @enderror " id="colFormLabelSm" value="" placeholder="Masukan Password">
                          @error('password')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>
                      <button class="btn btn-danger px-4" type="submit">Submit</button>
                      <a href="{{route('admin.index')}}" type="button" class="btn btn-warning px-4" >Kembali</a>
                    </form>
                  </div>
                </div>  
              </div>
            </div>
        </div>
    </div>      
</div>

@endsection