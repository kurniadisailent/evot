<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>
  <link rel="icon" type="image/png" href="">
  <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
  <link href="{{ url('icon/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles-->
  <link href="{{url('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <br><br><br>
        <div class="card o-hidden border-0 shadow-lg my-5 rounded shadow-lg">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-5 offset-lg-1 my-5 mx-auto mr-2">
                <br><br><br>
                <img class="mx-auto d-block" src="{{ url('images/LOGO.png') }}" width="100px"><br>
                <h1 style="font-size: 20px; color: black; text-align: center;" id="bo">E-Voting <br> SMP Negeri 1 Kalipucang</h1>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">LOGIN ADMIN</h1>
                  </div>
                  @if(session('gagal'))
                  <div class="alert alert-danger alert-dismissible fade show">

                      <strong>Gagal ! </strong>{{ session('gagal')}}.
                  </div>
                  @endif
                  <form class="user" method="POST" action="/admin/login">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="username" placeholder="Enter Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">

                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

  <!-- Bootstrap JavaScript-->
  <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('js/bootstrap.bundle.min.js') }}"></script>

  <!--JavaScript-->
  <script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts-->
  <script src="{{url('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
