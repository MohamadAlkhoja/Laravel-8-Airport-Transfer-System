<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="{{ asset('assets') }}/admindir/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/admindir/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="{{ asset('assets') }}/admindir/css/animate.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/admindir/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">IN+</h1>

        </div>
        <h3>Welcome to IN+</h3>
        <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        <p>Login in. To see it in action.</p>
        <form class="m-t" role="form" action="{{ route('admin_logincheck') }}" method="post">
            @csrf
            <div class="form-group">
                <input id="email" type="email" name="email" class="form-control" placeholder="Username" required="">
            </div>
            <div class="form-group">
                <input id="password" type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="#"><small>Forgot password?</small></a>
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="\register">Create an account</a>
        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{ asset('assets') }}/admindir/js/jquery-3.1.1.min.js"></script>
<script src="{{ asset('assets') }}/admindir/js/popper.min.js"></script>
<script src="{{ asset('assets') }}/admindir/js/bootstrap.js"></script>

</body>

</html>
