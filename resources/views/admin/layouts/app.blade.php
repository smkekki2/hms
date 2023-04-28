<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moses</title>

	<!--favicon-->
	<link rel="icon" href="{{asset('public/images/favicon-32x32.png')}}" type="image/png"/>
	<!--plugins-->
	<link href="{{asset('public/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{asset('public/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('public/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('public/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
	<!-- loader-->
	<link href="{{asset('public/css/pace.min.css')}}" rel="stylesheet"/>
	<script src="{{asset('public/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('public/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('public/css/dark-theme.css')}}"/>
	<link rel="stylesheet" href="{{asset('public/css/semi-dark.css')}}"/>
	<link rel="stylesheet" href="{{asset('public/css/header-colors.css')}}"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</head>
<body class="">
    <!--wrapper-->
    <div class="wrapper">

        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')

        @yield('content')

        @include('admin.layouts.footer')
    </div> 
</body>
</html>