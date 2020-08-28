@extends('guest.master')

@section('konten')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-5">
            <h3 class="text-center" id="sb">Vote</h3>
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
            <div class="card-footer"><a href="" class="btn btn-danger btn-block">Vote</a></div>
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
            <div class="card-footer"><a href="" class="btn btn-danger btn-block">Vote</a></div>
          </div>
        </div>
    </div>      
</div>

@endsection