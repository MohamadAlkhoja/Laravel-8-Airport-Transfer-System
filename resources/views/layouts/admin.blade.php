
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <link href="{{ asset('assets') }}/admindir/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/admindir/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('assets') }}/admindir/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('assets') }}/admindir/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="{{ asset('assets') }}/admindir/css/animate.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/admindir/css/style.css" rel="stylesheet">

    @yield('css')
    @yield('javascript')

</head>

<body>
<div id="wrapper">

    @include('admin._sidebar')
    <div id="page-wrapper" class="gray-bg dashbard-1">

    @include('admin._header')
    @yield('content')

    @include('admin._footer')
    </div>
</div>

</body>
</html>
