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
                        <label for="Nama" class="col-md-3 col-form-label col-form-label-md">Nama admin</label>
                        <div class="col-md-7">
                          <input type="text" name="Namaadmin" class="form-control form-control-md border " id="colFormLabelSm" placeholder="Masukan">
                        </div>
                      </div>

                       <!-- Username -->
                      <div class="form-group row">
                        <label for="Username" class="col-md-3 col-form-label col-form-label-md">Username</label>
                        <div class="col-md-7">
                          <input type="text" name="Username Kelamin" class="form-control form-control-md border " id="colFormLabelSm" value="" placeholder="Masukan username">
                        </div>
                      </div>

                       <!-- Password -->
                      <div class="form-group row">
                        <label for="Password" class="col-md-3 col-form-label col-form-label-md">Password</label>
                        <div class="col-md-7">
                          <input type="Password" name="Password" class="form-control form-control-md border " id="colFormLabelSm" value="" placeholder="Masukan Password">
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