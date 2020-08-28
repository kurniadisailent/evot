@extends('admin.master')

@section('konten')

<div class="container-fluid">
  <div class="row mt-1">
  <!-- Gambar Buku -->
  <div class="col-md-4">
    <br>
      <img src="{{url('images/noimg.png')}}" class="d-block w-100 img-fluid"><br>
      <input type="file" name="">
  </div>
  <div class="col-md-8 mt-3">
    <!-- Judul Buku -->
    <div class="col-md-12">
      <div class="card border rounded shadow-sm">
        <!-- Status -->
        <h5 class="card-header text">
          Edit calon
        </h5>

        <div class="card-body">
        
              <!-- Input Disembunyikan -->
              <input type="hidden" name="id" value="">
              <input type="hidden" name="nama_produk" value="">


              <!-- Nama -->
              <div class="form-group row">
                <label for="Nama" class="col-md-3 col-form-label col-form-label-md">Nama</label>
                <div class="col-md-7">
                  <input type="text" name="nama" class="form-control form-control-md border " id="colFormLabelSm" value="Lorem & Ipsum">
                </div>
              </div>

              <!-- Kelas -->
              <div class="form-group row">
                <label for="Kelas" class="col-md-3 col-form-label col-form-label-md">Kelas</label>
                <div class="col-md-7">
                  <input type="text" name="Kelas" class="form-control form-control-md border " id="colFormLabelSm" value="VIII A & VII A">
                </div>
              </div>

              <!-- Visi  -->
              <div class="form-group row">
                <label for="Visi" class="col-md-3 col-form-label col-form-label-md">Visi</label>
                <div class="col-md-9">
                  <textarea type="text" name="Visi" class="form-control form-control-md border " id="colFormLabelSm" rows="3">Lorem ipsum dolor sit amets sit dolor ipsum lorem ipsum dolor sit amets sit dolor ipsum lorem ipsum dolor sit amets sit dolor ipsum lorem ipsum dolor sit amets sit dolor ipsum lorem</textarea> 
                </div>
              </div>

              <!-- Misi -->
              <div class="form-group row">
                <label for="misi" class="col-md-3 col-form-label col-form-label-md">Misi</label>
                <div class="col-md-9">
                  <textarea type="text" name="misi" class="form-control form-control-md border " id="colFormLabelSm" rows="3">Lorem ipsum dolor sit amets sit dolor ipsum lorem ipsum dolor sit amets sit dolor ipsum lorem ipsum dolor sit amets sit dolor ipsum lorem ipsum dolor sit amets sit dolor ipsum lorem</textarea> 
                </div>
              </div>

              <a href="?page=home" class="btn btn-warning">Edit</a>
              <a href="?page=home" class="btn btn-danger">Kembali</a> 
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
</div>

@endsection