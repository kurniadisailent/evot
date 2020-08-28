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
              <div class="card-body mt-5">
                <div class="row">
                  <div class="col-md-11 offset-md-1 mb-3">
                    <a href="/createcalon" class="btn btn-primary px-3"><i class="fa fa-plus"></i> Tambah calon</a>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 offset-md-1 mb-4">
                    <div class="card h-100 shadow-sm">
                      <h3 class="text-center text-primary mt-2">1</h3>
                      <a href="#"><img class="card-img-top" src="{{ url('images/nonimage.png') }}" alt="" style="width: 100%; height: 250px"></a>
                      <div class="card-body">
                        <div class="card-title text-center">
                          <h4 class="">
                          <a href="" id="sb">Lorem & Ipsum</a><br>
                          </h4>
                          <span class="text-secondary">VIII A & VII A</span>
                        </div>
                        <p class="card-text">
                          <b id="me">Visi :</b> <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? <br>
                        <b id="me">Misi :</b><br>
                        Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!
                    </p> 
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-6">
                            <a href="/editcalon" class="btn btn-warning btn-block"><i class="fa fa-edit"></i> Edit</a>
                          </div>
                          <div class="col-sm-6">
                            <a href="" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Hapus</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 offset-md-2 mb-4">
                    <div class="card h-100 shadow-sm">
                      <h3 class="text-center text-primary mt-2">2</h3>
                      <a href="#"><img class="card-img-top" src="{{ url('images/nonimage.png') }}" alt="" style="width: 100%; background-color: #dddddd; height: 250px"></a>
                      <div class="card-body">
                        <div class="card-title text-center">
                          <h4 class="">
                          <a href="" id="sb">Lorem & Ipsum</a><br>
                          </h4>
                          <span class="text-secondary">VIII A & VII A</span>
                        </div>
                        <p class="card-text">
                          <b id="me">Visi :</b> <br>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt?<br> 
                          <b id="me">Misi :</b><br>
                          Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!
                          </p> 
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-6">
                            <a href="" class="btn btn-warning btn-block"><i class="fa fa-edit"></i> Edit</a>
                          </div>
                          <div class="col-sm-6">
                            <a href="" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Hapus</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>      
</div>

@endsection