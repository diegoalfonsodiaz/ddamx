<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | DDAMX</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('front_end/images/logo_muni.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('front_end/images/logo_muni.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="{{asset('front_end/vendors/iCheck/css/all.css')}}" />
    <link href="{{ asset('front_end/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/frontend/login.css') }}">
    <link rel="stylesheet" href=" {{ asset('front_end/css/font-awesome.min.css') }}">
    <!--end of page level css-->

</head>
<body>
<div class="container">
    <!--Content Section Start -->
    <div class="row">
        <div class="box animation flipInX">
            <div class="box1">
            <img src="{{ asset('front_end/images/logo_muni_9.png') }}" alt="logo" class="img-responsive mar">
            <h3 class="text-primary">Iniciar Sesión</h3>

  
                <form method="POST" action="{{ route('login') }}">
                @csrf
                     
                    <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo:') }}</label>
                           

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña:') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

   
                     <input type="submit" class="btn btn-block btn-primary" value="Login">
   
                </form>
                <br/>
                

            </div>
            <br>
        </div>
    </div>
    <!-- //Content Section End -->
</div>
<!--global js starts-->
<script type="text/javascript" src="{{ asset('front_end/js/frontend/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/frontend/bootstrap.min.js') }}"></script>
<script src="{{ asset('front_end/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('front_end/vendors/iCheck/js/icheck.js') }}"></script>
<script type="text/javascript" src="{{ asset('front_end/js/frontend/login_custom.js') }}"></script>
<!--global js end-->
</body>
</html>
