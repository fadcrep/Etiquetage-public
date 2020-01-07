<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/preview-equation/default-light/user_login_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 21:16:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> Etiquetage Energétique </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('back/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('back/assets/css/users/login-3.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
</head>
<body class="login">
<div id="eq-loader">
    <div class="eq-loader-div">
        <div class="eq-loading dual-loader mx-auto mb-5"></div>
    </div>
</div>
<form class="form-login" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="row">
        <div class="col-md-12 text-center mb-4">
            <img height="100" width="100" alt="logo" src="{{ asset('back/assets/img/logo.png') }}" class="theme-logo">
        </div>
        <div class="col-md-12">

            <div class="social text-center">
                <h6 class="mb-4">Etiquetage Energetique</h6>
            </div>

            <div class="divmail mb-4">
                <label for="inputEmail" class="">E-mail</label>
                <input id="email" type="email" class=" form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email adress" value="{{ old('email') }}" required autofocus >
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="divpass mb-5">
                <label for="inputPassword" class="">Mot de passe</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" aria-describedby="inputPassword" required >
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <button type="submit" class="btn btn-gradient-dark btn-rounded btn-block">Se Connecter</button>


        </div>

    </div>
</form>


</body>


</html>