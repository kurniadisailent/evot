<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ url('images/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('icon/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('icon/css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <title>SMPN 1 KALIPUCANG</title>
</head>
<body class="bg-light">
    <div class="header">
        <img src="{{ url('images/haeder.png') }}" class="" width="200px">
    </div>
	<nav id="navbar" class="navbar navbar-expand-lg mb-4 shadow-sm">
	  <a class="navbar-brand text-info" id="sb" href="#"><b>E-voting</b></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"><i class="text-dark fa fa-bars"></i></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a href="/profile" class="text-secondary mr-3"><i class="fa fa-user"></i></a>
	      </li>
	      <li class="nav-item active">
	        <a href="" class="text-secondary"><i class="fas fa-sign-out-alt"></i></a>
	      </li>
	    </ul>
	  </div>
	</nav>     


          @yield('konten')
          

    <!-- footer -->
    <!-- Footer -->
    <footer class="page-footer font-small mt-5 blue bg-secondary">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">
      	<i class="fa fa-copyright" id="iconcopy"></i><span id="copy"> Copyright 2020 | Powered by Kelompok 5 PKL RPL SMKN 1 Padaherang</span>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- end footer -->
    <script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/pooper.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('icon/js/fontawesome.min.js') }}"></script>

    </body>
</html>