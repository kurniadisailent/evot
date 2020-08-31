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
                <div class="row justify-content-center">
                  <div class="col-md-11 mb-5">
                    <a href="/createcalon" class="btn btn-primary px-3"><i class="fa fa-plus"></i> Tambah calon</a>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="card h-60 shadow-sm">
                      <div class="card-head">
                        <h3 class="text-center mt-2" style="color: #4ECDC4;">1</h3>
                        <a href="#"><img class="card-img-top" src="{{ url('images/nonimage.png') }}" alt="" style="max-width: 50%;"><img class="card-img-top" src="{{ url('images/nonimage.png') }}" alt="" style="max-width: 50%;"></a>
                      </div>            
                      <div class="card-body">
                        <div class="card-title text-center">
                          <h4 class="">
                          <a href="" id="sb" style="font-size: 17px; color: #4ECDC4;">Lorem & Ipsum</a><br>
                          </h4>
                          <span class="text-secondary" style="font-size: 15px;">VIII A & VII A</span>
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
                          <div class="col-md-6">
                            <a href="" class="btn btn-block btn-success"><span class="text-light"><i class="fa fa-edit"></i> Edit</span></a>
                          </div>
                          <div class="col-md-6">
                            <a href="" class="btn btn-block btn-danger"><span class="text-light"><i class="fa fa-trash"></i> Hapus</span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6  mb-4">
                    <div class="card h-60 shadow-sm">
                      <div class="card-head">
                        <h3 class="text-center mt-2" style="color: #4ECDC4;">2</h3>
                        <a href="#"><img class="card-img-top" src="{{ url('images/nonimage.png') }}" alt="" style="max-width: 50%;"><img class="card-img-top" src="{{ url('images/nonimage.png') }}" alt="" style="max-width: 50%;"></a>
                      </div>            
                      <div class="card-body">
                        <div class="card-title text-center">
                          <h4 class="">
                          <a href="" id="sb" style="font-size: 17px; color: #4ECDC4;">Lorem & Ipsum</a><br>
                          </h4>
                          <span class="text-secondary" style="font-size: 15px;">VIII A & VII A</span>
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
                          <div class="col-md-6">
                          <a href="" class="btn btn-block btn-success"><span class="text-light"><i class="fa fa-edit"></i> Edit</span></a>
                        </div>
                        <div class="col-md-6">
                          <a href="" class="btn btn-block btn-danger"><span class="text-light"><i class="fa fa-trash"></i> Hapus</span></a>
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