@extends('admin.master')

@section('konten')

<div class="container-fluid">
  <div class="row mt-1">
  <!-- Gambar Buku -->
  <div class="col-md-12 mt-3">
    <!-- Judul Buku -->
    <div class="col-md-12">
      <div class="card border rounded shadow-sm">
        <!-- Status -->
        <h5 class="card-header text">
          Create calon
        </h5>

        <div class="card-body">
        
              <!-- Input Disembunyikan -->
              <input type="hidden" name="id" value="">
              <input type="hidden" name="nama_produk" value="">
              <form form action="{{route('calon.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <!-- Foto -->
              <div class="form-group row">
                <label for="foto_ketua" class="col-md-2 col-form-label col-form-label-md">Foto ketua</label>
                <div class="custom-file col-md-3 ml-1">
                  <input type="file" class="form-control @error('foto_ketua') is-invalid @enderror " id="inputGambar_ketua" placeholder=" masukan file gambar buku" name="foto_ketua">
                  <label class="custom-file-label ml-2" for="inputGambar_ketua">Pilih Gambar</label>
                  @error('foto_ketua')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="foto_wakil" class="col-md-2 col-form-label col-form-label-md">Foto wakil</label>
                <div class="custom-file col-md-3 ml-1">
                  <input type="file" class="form-control @error('foto_wakil') is-invalid @enderror " id="inputGambar_wakil" placeholder=" masukan file gambar buku" name="foto_wakil">
                  <label class="custom-file-label ml-2" for="inputGambar_wakil">Pilih Gambar</label>
                  @error('foto_wakil')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <!-- Nama -->
              <div class="form-group row">
                <label for="nama_ketua" class="col-md-2 col-form-label col-form-label-md">Nama ketua</label>
                <div class="col-md-4">
                  <input type="text" name="nama_ketua" class="form-control form-control-md border " id="colFormLabelSm" placeholder="Masukan nama" required>
                </div>
                <label for="nama_wakil" class="col-md-2 col-form-label col-form-label-md">Nama wakil</label>
                <div class="col-md-4">
                  <input type="text" name="nama_wakil" class="form-control form-control-md border " id="colFormLabelSm" placeholder="Masukan nama" required>
                </div>
              </div>

              <!-- Kelas -->
              <div class="form-group row">
                <label for="kelas_ketua" class="col-md-2 col-form-label col-form-label-md">Kelas ketua</label>
                <div class="col-md-4">
                  <input type="text" name="kelas_ketua" class="form-control form-control-md border " id="colFormLabelSm" value="" placeholder="Masukan Kelas" required>
                </div>
                <label for="kelas_wakil" class="col-md-2 col-form-label col-form-label-md">Kelas wakil</label>
                <div class="col-md-4">
                  <input type="text" name="kelas_wakil" class="form-control form-control-md border " id="colFormLabelSm" value="" placeholder="Masukan Kelas" required>
                </div>
              </div>

              <!-- Visi  -->
              <div class="form-group row">
                <label for="Visi" class="col-md-2 col-form-label col-form-label-md">Visi</label>
                <div class="col-md-10">
                  <textarea type="text" name="visi" class="form-control form-control-md border " id="colFormLabelSm" rows="3" required></textarea> 
                </div>
              </div>

              <!-- Misi -->
              <div class="form-group row">
                <label for="misi" class="col-md-2 col-form-label col-form-label-md">Misi</label>
                <div class="col-md-10">
                  <textarea type="text" name="misi" class="form-control form-control-md border " id="colFormLabelSm" rows="3" required></textarea> 
                </div>
              </div>

              <button class="btn btn-danger px-4" type="submit">Submit</button>
              <a href="{{route('calon.index')}}" type="button" class="btn btn-warning px-4" >Kembali</a>
            </form>
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

<script>
    $('#inputGambar_ketua').on('change',function(){
    //get the file name
      var fileName = $(this).val();
      var panjangnamafile = fileName.length;
      if (panjangnamafile > 22){
        hasilpotong = fileName.substring(0, 22);
        $(this).next('.custom-file-label').html(hasilpotong);
      }else{
        $(this).next('.custom-file-label').html(fileName);
      }
  })
</script>

<script>
    $('#inputGambar_wakil').on('change',function(){
    //get the file name
      var fileName = $(this).val();
      var panjangnamafile = fileName.length;
      if (panjangnamafile > 22){
        hasilpotong = fileName.substring(0, 22);
        $(this).next('.custom-file-label').html(hasilpotong);
      }else{
        $(this).next('.custom-file-label').html(fileName);
      }
    //replace the "Choose a file" label
    
  })
</script>

@endsection