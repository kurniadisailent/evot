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
              <!-- Card Body -->
              <div class="card-body mt-3">
                <div class="row">

                  <div class="col-md-6"></div>

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
                          <th>Kelas</th>
                          <th>Jenis kelamin</th>
                          <th>Password</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Lorem</td>
                          <td>VII</td>
                          <td>Laki-laki</td>
                          <td>user</td>
                          <td>Memilih</td>
                          <td>
                          <a href="" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                          </a>
                          <button class="btn btn-sm btn-danger tombol-hapus" type="button" data-url="">
                            <i class="fas fa-trash alt"></i>
                          </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>  
              </div>
            </div>
        </div>
    </div>      
</div>

@endsection