@extends('admin.master')

@section('konten')

<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->

  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
    	<div class="row">
    	<!-- Earnings (Monthly) Card Example -->
    	<div class="col-xl-6 col-md-6 mb-4">
    	  <div class="card border-left-success shadow h-100 py-2">
    	    <div class="card-body">
    	      <div class="row no-gutters align-items-center">
    	        <div class="col mr-2">
    	          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sudah Memilih</div>
    	          <div class="row no-gutters align-items-center">
    	            <div class="col-auto">
    	              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$S_Memilih}} Siswa</div>
    	            </div>
    	          </div>
    	        </div>
    	        <div class="col-auto">
    	          <i class="fas fa-users fa-2x text-gray-300"></i>
    	        </div>
    	      </div>
    	    </div>
    	  </div>
    	</div>
    	<!-- Earnings (Monthly) Card Example -->
    	<div class="col-xl-6 col-md-6 mb-4">
    	  <div class="card border-left-danger shadow h-100 py-2">
    	    <div class="card-body">
    	      <div class="row no-gutters align-items-center">
    	        <div class="col mr-2">
    	          <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Belum memilih</div>
    	          <div class="row no-gutters align-items-center">
    	            <div class="col-auto">
    	              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$B_Memilih}} Siswa</div>
    	            </div>
       	          </div>
    	        </div>
    	        <div class="col-auto">
    	          <i class="fas fa-users fa-2x text-gray-300"></i>
    	        </div>
    	      </div>
    	    </div>
    	  </div>
    	</div>
    	</div>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Progress</h6>
        </div>
        <div class="card-body">
          <h4 class="small font-weight-bold">Siswa yang sudah memilih <span class="float-right">{{$PS_Memilih}}%</span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-success" role="progressbar" style="width: {{$PS_Memilih}}%" aria-valuenow="{{$PS_Memilih}}" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">Siswa yang belum memilih <span class="float-right">{{$PB_Memilih}}%</span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: {{$PB_Memilih}}%" aria-valuenow="{{$PB_Memilih}}" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
<figure class="highcharts-figure col-md-12">
    <div id="container"></div>
    <p class="highcharts-description">

    </p>

    <table class="table" id="datatable">
        <thead>
            <tr>
                <th>CALON</th>
                <th>Pemilih</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data_tabel as $dat)
            <tr>
                <th>{{$dat->nama_ketua}} & {{$dat->nama_wakil}}</th>
                <td>{{$dat->jumlah_suara}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</figure>

<script type="text/javascript">
Highcharts.chart('container', {
  data: {
    table: 'datatable'
  },
  
  chart: {
    type: 'pie'
  },
  exporting: {
         enabled: false
},
  title: {
    text: 'Data extracted from a HTML table in the page'
  },
  yAxis: {
    allowDecimals: false,
    title: {
      text: 'Units'
    }
  },
  tooltip: {
    formatter: function() {
      return '<b>' + this.series.name + '</b><br/>' +
        this.point.y + ' ' + this.point.name.toLowerCase();
    }
  }
});

</script>

@endsection