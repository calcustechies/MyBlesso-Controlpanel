<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1">
   		<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		
   		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
   		<meta name="apple-mobile-web-app-capable" content="yes">
   		<meta name="mobile-web-app-capable" content="yes">
   		<meta name="HandheldFriendly" content="True">
   		<meta name="MobileOptimized" content="320">
   		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>MYBLESSO</title>
		<link rel="stylesheet" href="<?php echo base_url();?>/assets/fonts/fonts/font-awesome.min.css">

		<!-- Bootstrap Css -->
		<link href="<?php echo base_url();?>/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="<?php echo base_url();?>/assets/plugins/toggle-sidebar/sidemenu.css" rel="stylesheet" />


		<!-- Dashboard css -->
		<link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>/assets/css/admin-custom.css" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="<?php echo base_url();?>/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="<?php echo base_url();?>/assets/css/icons.css" rel="stylesheet"/>

    </head>
	<body class="construction-image">
		<!--Loader-->
		<div id="global-loader">
			<img src="<?php echo base_url();?>/assets/images/loader.svg" class="loader-img" alt="">
		</div>

		<!--Page-->
		<div class="page custom-pages">
			<div class="page-content z-index-10">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
							<div class="card mb-0">
								<div class="card-header">
									<h3 class="card-title">Login to your Account</h3>
								</div>
								<div class="card-body">
								<div style="color:red;" id="errMess"></div>
									<div class="form-group">
										<label class="form-label text-dark">USER NAME</label>
										<input type="text" class="form-control" id="UserName" name="UserName" placeholder="Enter user name" required>
									</div>
									<div class="form-group">
										<label class="form-label text-dark">PASSWORD</label>
										<input type="password" name="Password" id="Password" class="form-control" id="exampleInputPassword1" placeholder="Password" required><br>
										<input type="checkbox" onclick="myFunction()">Show Password
									</div>
									<!-- <div class="form-group">
										<label class="custom-control custom-checkbox">
											<a href="forgot-password.html" class="float-right small text-dark mt-1">I forgot password</a>
											<input type="checkbox" class="custom-control-input">
											<span class="custom-control-label text-dark">Remember me</span>
										</label>
									</div> -->
									<div class="form-footer mt-2">
										<input type="button" class="btn btn-primary btn-block" id="btnLogin" value="SignIn">
									</div>
									<!-- <div class="text-center  mt-3 text-dark">
										Don't have account yet? <a href="register.html">SignUp</a>
									</div> -->
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<input type="hidden" id="base" value="<?php echo base_url(); ?>">

		<!-- Dashboard js -->
		<script src="<?php echo base_url();?>/assets/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>/assets/js/vendors/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url();?>/assets/js/vendors/selectize.min.js"></script>
		<script src="<?php echo base_url();?>/assets/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="<?php echo base_url();?>/assets/js/vendors/circle-progress.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/rating/jquery.rating-stars.js"></script>
		<!-- Custom scroll bar Js-->
		<script src="<?php echo base_url();?>/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Fullside-menu Js-->
		<script src="<?php echo base_url();?>/assets/plugins/toggle-sidebar/sidemenu.js"></script>


		<!--Counters -->
		<script src="<?php echo base_url();?>/assets/plugins/counters/counterup.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/counters/waypoints.min.js"></script>
		<script src="<?php echo base_url();?>/assets/plugins/counters/numeric-counter.js"></script>


		<!-- Custom Js-->
		<script src="<?php echo base_url();?>/assets/js/admin-custom.js"></script>

		<script src="<?php echo base_url(); ?>assets/js/general/login.js"></script>

	</body>
</html>