<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - VenMex </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>VENMEX</h1>
                  </div>
                  <p>Agencia de festejos - La Victoria</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                <form method="POST" action="{{ route('authenticate') }}" class="form-validate" autocomplete="off">
                @csrf
        <h2 class="text-center">Inicio de sesión</h2>
                      @if ($error = $errors->first('password'))
  <div class="alert alert-danger mt-2">
    {{ $error }}
  </div>
@endif
                        
                    <div class="form-group">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-material" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus required data-msg="Por favor ingresa tu correo o usuario" >
                      <label for="login-username" class="label-material">Correo o Usuario</label>
                   
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-material" name="password" required autocomplete="current-password"  type="password"  required data-msg="Por favor ingresa tu contraseña" >
                      <label for="login-password" class="label-material">Contraseña</label>
                   <div> <button  id="login" type="submit" class="btn btn-primary mt-3">
                                    Ingresar
                                </button>
                                </div>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
</form>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/admin/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/admin/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ asset('assets/admin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/front.js')}}"></script>
  </body>
</html>