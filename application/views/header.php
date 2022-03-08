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
		<link rel="icon" href="<?php echo base_url();?>/assets/images/brand/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>/assets/images/brand/favicon.ico" />

		<!-- Title -->
	    <title>Home</title>

		<link rel="stylesheet" href="<?php echo base_url();?>/assets/fonts/fonts/font-awesome.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Data table css -->
		<link href="<?php echo base_url();?>/assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>/assets/plugins/datatable/jquery.dataTables.min.css" rel="stylesheet" />

		<!-- Bootstrap Css -->
		<link href="<?php echo base_url();?>/assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>/assets/css/admin-custom.css" rel="stylesheet" />

		<!-- c3.js Charts Plugin
		<link href="<?php //echo base_url();?>/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" /> -->

		<!-- Sidemenu Css -->
		<link href="<?php echo base_url();?>/assets/plugins/toggle-sidebar/sidemenu.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="<?php echo base_url();?>/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="<?php echo base_url();?>/assets/css/icons.css" rel="stylesheet"/>
		<link href="<?php echo base_url();?>/assets/plugins/iconfonts/icons.css" rel="stylesheet" />

<!-- datatable responsive -->
		<link rel="stylesheet" href="http://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css"/>

		<!-- Color-Skins -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>/assets/color-skins/color-skins/color10.css" />

    <style>
        .img1{
            max-width: 25% !important;

        }
    </style>
	</head>
	<body class="app sidebar-mini">

		<!--Loader-->
		<div id="global-loader">
			<img src="<?php echo base_url();?>/assets/images/loader.svg" class="loader-img" alt="">
		</div>

		<div class="page">
			<div class="page-main">
				<div class="app-header1 header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index.html">
								<img src="<?php echo base_url();?>/assets/images/brand/mybls_logo.jpeg" class="header-brand-img img1"   style="max-width :22 %; ">
							</a>
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="header-navicon">
								<a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
									<i class="fa fa-search"></i>
								</a>
							</div>
							<div class="header-navsearch">
								<a href="#" class=" "></a>
								<form class="form-inline mr-auto">
									<!-- <div class="nav-search">
										<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" >
										<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
									</div> -->
								</form>
							</div>
							<div class="d-flex order-lg-2 ml-auto">
								<div class="dropdown d-none d-md-flex" >
									<a  class="nav-link icon full-screen-link">
										<i class="fe fe-maximize-2"  id="fullscreen-button"></i>
									</a>
								</div>
								
								<!--<div class="dropdown d-none d-md-flex">-->
								<!--	<a class="nav-link icon" data-toggle="dropdown">-->
								<!--		<i class="fa fa-bell-o"></i>-->
								<!--		<span class=" nav-unread badge badge-danger  badge-pill">4</span>-->
								<!--	</a>-->
								<!--	<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">-->
								<!--		<a href="#" class="dropdown-item text-center">You have 4 notification</a>-->
								<!--		<div class="dropdown-divider"></div>-->
								<!--		<a href="#" class="dropdown-item d-flex pb-3">-->
								<!--			<div class="notifyimg">-->
								<!--				<i class="fa fa-envelope-o"></i>-->
								<!--			</div>-->
								<!--			<div>-->
								<!--				<strong>2 new Messages</strong>-->
								<!--				<div class="small text-muted">17:50 Pm</div>-->
								<!--			</div>-->
								<!--		</a>-->
								<!--		<a href="#" class="dropdown-item d-flex pb-3">-->
								<!--			<div class="notifyimg">-->
								<!--				<i class="fa fa-calendar"></i>-->
								<!--			</div>-->
								<!--			<div>-->
								<!--				<strong> 1 Event Soon</strong>-->
								<!--				<div class="small text-muted">19-10-2019</div>-->
								<!--			</div>-->
								<!--		</a>-->
								<!--		<a href="#" class="dropdown-item d-flex pb-3">-->
								<!--			<div class="notifyimg">-->
								<!--				<i class="fa fa-comment-o"></i>-->
								<!--			</div>-->
								<!--			<div>-->
								<!--				<strong> 3 new Comments</strong>-->
								<!--				<div class="small text-muted">05:34 Am</div>-->
								<!--			</div>-->
								<!--		</a>-->
								<!--		<a href="#" class="dropdown-item d-flex pb-3">-->
								<!--			<div class="notifyimg">-->
								<!--				<i class="fa fa-exclamation-triangle"></i>-->
								<!--			</div>-->
								<!--			<div>-->
								<!--				<strong> Application Error</strong>-->
								<!--				<div class="small text-muted">13:45 Pm</div>-->
								<!--			</div>-->
								<!--		</a>-->
								<!--		<div class="dropdown-divider"></div>-->
								<!--		<a href="#" class="dropdown-item text-center">See all Notification</a>-->
								<!--	</div>-->
								<!--</div>-->
								<!-- <div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-envelope-o"></i>
										<span class=" nav-unread badge badge-warning  badge-pill">3</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="<?php //echo base_url();?>/assets/images/users/male/41.jpg" alt="avatar-img" class="avatar brround mr-3 align-self-center">
											<div>
												<strong>Blake</strong> I've finished it! See you so.......
												<div class="small text-muted">30 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="<?php// echo base_url();?>/assets/images/users/female/1.jpg" alt="avatar-img" class="avatar brround mr-3 align-self-center">
											<div>
												<strong>Caroline</strong> Just see the my Admin....
												<div class="small text-muted">12 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="<?php //echo base_url();?>/assets/images/users/male/18.jpg" alt="avatar-img" class="avatar brround mr-3 align-self-center">
											<div>
												<strong>Jonathan</strong> Hi! I'am singer......
												<div class="small text-muted">1 hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<img src="<?php //echo base_url();?>/assets/images/users/female/18.jpg" alt="avatar-img" class="avatar brround mr-3 align-self-center">
											<div>
												<strong>Emily</strong> Just a reminder that you have.....
												<div class="small text-muted">45 mins ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Messages</a>
									</div>
								</div> -->
								<!--<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-grid"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  app-selector">
										<ul class="drop-icon-wrap">
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-speech text-dark"></i>
													<span class="block"> E-mail</span>
												</a>
											</li>
											

											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-bubbles text-dark"></i>
													<span class="block">Messages</span>
												</a>
											</li>
										
											
											<li>
												<a href="#" class="drop-icon-item">
													<i class="icon icon-settings text-dark"></i>
													<span class="block">Settings</span>
												</a>
											</li>
										</ul>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all</a>
									</div>
								</div>-->
								<div class="dropdown ">
									<a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
										<img src="<?php echo base_url();?>/assets/images/users/male/user25.jpg" alt="profile-img" class="avatar avatar-md brround">
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<a class="dropdown-item" href="<?php echo base_url('Profile');?>">
											<i class="dropdown-icon icon icon-user"></i> My Profile
										</a>
										<a class="dropdown-item" href="<?php echo base_url('LoginCtrl/logout');?>">
											<i class="dropdown-icon icon icon-power"></i> Log out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
								<img src="<?php echo base_url();?>/assets/images/users/male/user25.jpg" alt="user-img" class="avatar avatar-lg brround">
								<!-- <a href="<?php //echo base_url('Editprofile');?>" class="profile-img">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a> -->
							</div>
							<div class="user-info">
								<h2>Myblesso Admin</h2>
								<span>Super Admin</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<!--<li class="slide">-->
							<!-- <a class="side-menu__item" data-toggle="slide" href="<?php// echo base_url('Dashboard');?>"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span></a> -->
						<!--	<a href="<?php //echo base_url('Dashboard');?>" class="side-menu__item"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span></a>-->
							
						<!--</li>-->
						
						<li class="slide">
							<a class="side-menu__item"  href="<?php echo base_url('Jobsdetails');?>"><i class="side-menu__icon  fa fa-tasks"></i><span class="side-menu__label">Jobs</span></a>
							<!--<ul class="slide-menu">-->
							<!--	<li>-->
							<!--		<a href="<?php //echo base_url('Jobsdetails');?>" class="slide-item">Job Details </a>-->
							<!--	</li>-->
								
							<!--</ul>-->
						</li><li class="slide">
							<a class="side-menu__item"  href="<?php echo base_url('Employeeusers');?>"><i class="side-menu__icon  fa fa-users"></i><span class="side-menu__label">Employee</span></a>
							<!--<ul class="slide-menu">-->
							<!--	<li>-->
							<!--		<a href="<?php //echo base_url('Employeeusers');?>" class="slide-item">Employee Details </a>-->
							<!--	</li>-->
								
							<!--</ul>-->
						</li>
						<li class="slide">
							<a class="side-menu__item"  href="<?php echo base_url('Employerusers');?>"><i class="side-menu__icon fa fa-user"></i><span class="side-menu__label">Employer</span></a>
							<!--<ul class="slide-menu">-->
							<!--	<li>-->
							<!--		<a href="<?php echo base_url('Employerusers');?>" class="slide-item">Employer Details</a>-->
							<!--	</li>-->
								
							<!--</ul>-->
						</li>
						<!-- <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon  fa fa-building-o"></i><span class="side-menu__label">Companies</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php //echo base_url('Companydetails');?>" class="slide-item">Company Details</a>
								</li>
							</ul>
						</li> -->
						
						
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cubes"></i><span class="side-menu__label"> E-wallet </span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo base_url('Paymentordersclient');?>" class="slide-item">Client Details</a>
								</li>

								<li>
									<a href="<?php echo base_url('paymentorderscompany');?>" class="slide-item">Company Details</a>
								</li>
								
							</ul>
						</li>

			
				
						<li class="slide">
							<a class="side-menu__item" href="<?php echo base_url('Advertisement');?>"><i class="side-menu__icon fa fa-newspaper-o"></i><span class="side-menu__label"> Advertisement</span></a>
							<!--<ul class="slide-menu">-->
							<!--	<li>-->
							<!--		<a href="<?php //echo base_url('Advertisement');?>" class="slide-item">Advertisement  Details</a>-->
							<!--	</li>-->
								
							<!--</ul>-->
						</li>

						<li class="slide">
							<a class="side-menu__item" href="<?php echo base_url('Category');?>"><i class="side-menu__icon fa fa-newspaper-o"></i><span class="side-menu__label">Category</span></a>
							<!--<ul class="slide-menu">-->
							<!--	<li>-->
							<!--		<a href="<?php echo base_url('Category');?>" class="slide-item">Category  Details</a>-->
							<!--	</li>-->
								
							<!--</ul>-->
						</li>

					</ul>
				</aside>