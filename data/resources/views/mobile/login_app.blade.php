<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png')}}">
    <title>Login Aplikasi</title>
    <!-- Favicon-->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('assets/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('assets/plugins/animate-css/animate.css')}}')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body class="login-page">


    <div class="login-box" style="padding-top: 70px">
        <div class="logo">
<a href="javascript:void(0);"><h1>LOGIN APLIKASI</h1></a>
</div>
        <div class="card">
            <div class="body">
                
                @if(Session::has('error'))
          <p class="text-error">{{Session::get('error')}}</p>
        @endif
                    
<form role="form" action="masuk_app" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder=" Masukan Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" name="save" class="btn btn-block bg-pink waves-effect">MASUK</button>
                    </div>
                    </form>
                </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-2">
                            
                        </div>
                    </div>
                
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('assets/plugins/node-waves/waves.js')}}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{asset('assets/plugins/jquery-validation/jquery.validate.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('assets/js/admin.js')}}"></script>
    <script src="{{asset('assets/js/pages/examples/sign-in.js')}}')}}"></script>
</body>

</html>