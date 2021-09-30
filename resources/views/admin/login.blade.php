<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin - R.J Hospital</title>

    <!-- Bootstrap CSS -->
    <link href="css_r/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css_r/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css_r/elegant-icons-style.css" rel="stylesheet" />
    <link href="css_r/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css_r/style.css" rel="stylesheet">
    <link href="css_r/style-responsive.css" rel="stylesheet" />

    <style>
        .error{
            display: block;
            color: red;
            text-align: left;
        }
        .login-form .input-group {
            padding-bottom: 3px;
        }
        .form-group{
            margin-bottom: 15px;
        }
        input{
            color:black !important;
            letter-spacing: 1px;
            font-size:20px;
            font-family: monospace;
        }
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

    <div class="container">

        <form class="login-form"  method="POST">
            @csrf
            <div class="login-wrap">
                <p class="login-img"><i class="icon_lock_alt"></i></p>
                <p style="font-size:30px;font-weight:700;margin-bottom:20px;">ADMIN LOGIN</p>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <input type="text" name="name" class="form-control" placeholder="Username" value="{{ old('name') }}" autofocus>
                    </div>
                    <span class="error">@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <span class="error" >@error('password'){{ $message }}@enderror</span>
                <label class="checkbox">
                    <input type="checkbox" value="remember-me" checked> Remember me
                    {{-- <span class="pull-right"> <a href=""> Forgot Password?</a></span> --}}
                </label>
                <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Login</button>
                {{-- <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> --}}
            </div>
        </form>

    </div>


</body>

</html>
