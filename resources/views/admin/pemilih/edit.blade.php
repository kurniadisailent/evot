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
                    <form>
                              <!-- Nama -->
                      <div class="form-group row">
                        <label for="Nama" class="col-md-3 col-form-label col-form-label-md">Nama Pemilih</label>
                        <div class="col-md-7">
                          <input type="text" name="Nama Pemilih" class="form-control form-control-md border " id="colFormLabelSm" placeholder="Masukan Nama Pemilih">
                        </div>
                      </div>

                      <!-- Kelas -->
                      <div class="form-group row">
                        <label for="exampleFormControlSelect1" class="col-md-3 col-form-label col-form-label-md">Kelas Pemilih</label>
                        <div class="col-md-7">
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>VII</option>
                            <option>VIII</option>
                            <option>IX</option>
                          </select>
                        </div>
                      </div>

                       <!-- jenis -->
                      <div class="form-group row">
                        <label for="jenis" class="col-md-3 col-form-label col-form-label-md">Jenis Kelamin</label>
                        <div class="col-md-7">
                          <input type="text" name="Jenis Kelamin" class="form-control form-control-md border " id="colFormLabelSm" value="" placeholder="Masukan Jenis Kelamin">
                        </div>
                      </div>

                       <!-- username -->
                      <div class="form-group row">
                        <label for="username" class="col-md-3 col-form-label col-form-label-md">Username</label>
                        <div class="col-md-7">
                          <input type="text" name="Username" class="form-control form-control-md border " id="colFormLabelSm" value="" placeholder="Masukan Username">
                        </div>
                      </div>

                       <!-- Password -->
                      <div class="form-group row">
                        <label for="Password" class="col-md-3 col-form-label col-form-label-md">Password</label>
                        <div class="col-md-7">
                          <input type="Password" name="Password" class="form-control form-control-md border " id="colFormLabelSm" value="" placeholder="Masukan Password">
                        </div>
                      </div>
                      
                       <!-- status -->
                      <div class="form-group row">
                        <label for="exampleFormControlSelect1" class="col-md-3 col-form-label col-form-label-md">status</label>
                        <div class="col-md-7">
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>MEMILIH</option>
                            <option>BELUM MEMILIH</option>
                          </select>
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