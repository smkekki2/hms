<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/rocker/demo/vertical/auth-header-footer-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Apr 2023 13:10:57 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('public/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('public/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('public/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('public/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('public/css/pace.min.css" rel="stylesheet')}}" />
	<script src="{{asset('public/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('public/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/icons.css')}}" rel="stylesheet">
	<title>Hospital Management Sysyem</title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<header class="login-header shadow">
			<nav class="navbar navbar-expand-lg navbar-light rounded-0 bg-white fixed-top rounded-0 shadow-none border-bottom">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<img src="{{asset('public//images/logo-img.png')}}" width="140" alt="" />
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent1">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
							<li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-home-alt me-1'></i>Home</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-user me-1'></i>About</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-category-alt me-1'></i>Features</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="#"><i class='bx bx-microphone me-1'></i>Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-4">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card my-5 my-lg-0 shadow-none border">
							<div class="card-body">
								<div class="p-4">
									<div class="text-center mb-4">
										<h5 class="">Admin</h5>
										<p class="mb-0">Please log in to your account</p>
									</div>
									@if($errors->any())
										@foreach ($errors->all() as $error)
											<p style="color:red">{{$error}}</p>
										@endforeach
									@endif
									<div class="form-body">
										<form class="row g-3" action="{{route('admin.dashboard')}}" method="post">
											@csrf
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" class="form-control" id="inputEmailAddress" name="email" placeholder="jhon@example.com">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password" placeholder="Enter Password"> 
													<a href="javascript:;" class="input-group-text"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">
												{{-- <div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div> --}}
											</div>
											<div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													{{-- <button type="submit" class="btn btn-primary">Sign in</button> --}}
													<input type="submit" value="Sign in" class="btn btn-primary">
												</div>
											</div>
											<div class="col-12">
												<div class="text-center">
													<p class="mb-0">Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
													</p>
												</div>
											</div>
										</form>
									</div>
									<div class="login-separater text-center mb-5"> <span class="">OR SIGN IN WITH</span>
										<hr/>
									</div>
									<div class="list-inline contacts-social text-center">
										<a href="javascript:;" class="list-inline-item bg-facebook text-white border-0 rounded-3"><i class="bx bxl-facebook"></i></a>
										<a href="javascript:;" class="list-inline-item bg-twitter text-white border-0 rounded-3"><i class="bx bxl-twitter"></i></a>
										<a href="javascript:;" class="list-inline-item bg-google text-white border-0 rounded-3"><i class="bx bxl-google"></i></a>
										<a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i class="bx bxl-linkedin"></i></a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<footer class="bg-white shadow-none border-top p-2 text-center fixed-bottom">
			<p class="mb-0">Copyright © 2023. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{asset('public/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('public/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('public/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('public/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{asset('public/js/app.js')}}"></script>
</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/auth-header-footer-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Apr 2023 13:11:07 GMT -->
</html>