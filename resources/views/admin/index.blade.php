﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://medical-admin-template.multipurposethemes.com/images/favicon.ico">

    <title>Tumaini Sickle Cell App</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

<div class="wrapper">
	<div id="loader"></div>

  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-50">
			  <span class="light-logo"><img src="images/logo-letter.png" alt="logo"></span>
			  <span class="dark-logo"><img src="images/logo-letter.png" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo"><img src="images/logo-dark-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="images/logo-light-text.png" alt="logo"></span>
		  </div>
		</a>
	</div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul>
	  </div>

      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
			<!-- User Account-->
			<li class="dropdown user user-menu">
				<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" data-bs-toggle="dropdown" title="User">
					<div class="d-flex pt-1">
						<div class="text-end me-10">
							<p class="pt-5 fs-14 mb-0 fw-700 text-primary">Johen Doe</p>
							<small class="fs-10 mb-0 text-uppercase text-mute">Admin</small>
						</div>
						<img src="../images/avatar/avatar-1.png" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
					</div>
				</a>
				<ul class="dropdown-menu animated flipInX">
				  <li class="user-body">
					 <a class="dropdown-item" href="extra_profile.html"><i class="ti-user text-muted me-2"></i> Profile</a>
					 <a class="dropdown-item" href="auth_login.html"><i class="ti-lock text-muted me-2"></i> Logout</a>
				  </li>
				</ul>
			</li>
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-warning-light" title="Full Screen">
					<i class="icon-Position"></i>
			    </a>
			</li>
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light dropdown-toggle btn-info-light" data-bs-toggle="dropdown" title="Notifications">
			  <i class="icon-Notification"><span class="path1"></span><span class="path2"></span></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">
			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>
			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>
          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item">
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect full-screen waves-light btn-danger-light">
			  	<i class="icon-Settings1"><span class="path1"></span><span class="path2"></span></i>
			  </a>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  @include('layouts.aside')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xxxl-9 col-xl-8 col-12">
					<div class="box">
						<div class="box-body">
							<div class="d-md-flex align-items-center text-md-start text-center">
								<div class="me-md-30">
									<img src="https://medical-admin-template.multipurposethemes.com/images/svg-icon/color-svg/custom-21.svg" alt="" class="w-150" />
								</div>
								<div class="d-lg-flex w-p100 align-items-center justify-content-between">
									<div class="me-lg-10 mb-lg-0 mb-10">
										<h3 class="mb-0">Today - Do A Sickle Cell Risk Score Assessment</h3>
										<p class="mb-0 fs-16">The Package includes: 1,2,3</p>
									</div>
									<div>
										<a href="{{url('/')}}" class="waves-effect waves-light btn btn-danger text-nowrap">Risk Score</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="me-15">
											<img src="https://medical-admin-template.multipurposethemes.com/images/svg-icon/color-svg/custom-20.svg" alt="" class="w-120" />
										</div>
										<div>
											<h4 class="mb-0">Total Patients</h4>
											<h3 class="mb-0">1245</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="me-15">
											<img src="https://medical-admin-template.multipurposethemes.com/images/svg-icon/color-svg/custom-18.svg" alt="" class="w-120" />
										</div>
										<div>
											<h4 class="mb-0">Diagnostic Centers</h4>
											<h3 class="mb-0">145</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body">
									<div class="d-flex align-items-center">
										<div class="me-15">
											<img src="https://medical-admin-template.multipurposethemes.com/images/svg-icon/color-svg/custom-19.svg" alt="" class="w-120" />
										</div>
										<div>
											<h4 class="mb-0">Total Diagnosis</h4>
											<h3 class="mb-0">245</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-12">
							<div class="box">
								<div class="box-header">
									<h4 class="box-title">Patient Statistics</h4>
								</div>
								<div class="box-body">
									<div id="patient_statistics"></div>
								</div>
							</div>
						</div>

						<div class="col-12">
						  <div class="box">
							<div class="box-header with-border">
							  <h4 class="box-title">Admitted Patient</h4>
							  <div class="box-controls pull-right">
								<div class="lookup lookup-circle lookup-right">
								  <input type="text" name="s">
								</div>
							  </div>
							</div>
							<div class="box-body no-padding">
								<div class="table-responsive">
								  	<table class="table mb-0">
										<tbody>
											<tr class="bg-info-light">
											  <th>No</th>
											  <th>Date</th>
											  <th>ID</th>
											  <th>Name</th>
											  <th>Age</th>
											  <th>Country</th>
											  <th>Gender</th>
											  <th>Settings</th>
											</tr>
											<tr>
											  <td>01</td>
											  <td>01/08/2021</td>
											  <td>DO-124585</td>
											  <td><strong>Shawn Hampton</strong></td>
											  <td>27</td>
											  <td>Miami</td>
											  <td>Male</td>
											  <td>
												  <div class="d-flex">
												  	  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"><i class="fa fa-pencil"></i></a>
													  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs"><i class="fa fa-trash"></i></a>
												  </div>
											  </td>
											</tr>
											<tr>
											  <td>02</td>
											  <td>01/08/2021</td>
											  <td>DO-412577</td>
											  <td><strong>Polly Paul</strong></td>
											  <td>31</td>
											  <td>Naples</td>
											  <td>Female</td>
											  <td>
												  <div class="d-flex">
												  	  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"><i class="fa fa-pencil"></i></a>
													  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs"><i class="fa fa-trash"></i></a>
												  </div>
											  </td>
											</tr>
											<tr>
											  <td>03</td>
											  <td>01/08/2021</td>
											  <td>DO-412151</td>
											  <td><strong>Harmani Doe</strong></td>
											  <td>21</td>
											  <td>Destin</td>
											  <td>Female</td>
											  <td>
												  <div class="d-flex">
												  	  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"><i class="fa fa-pencil"></i></a>
													  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs"><i class="fa fa-trash"></i></a>
												  </div>
											  </td>
											</tr>
											<tr>
											  <td>04</td>
											  <td>01/08/2021</td>
											  <td>DO-123654</td>
											  <td><strong>Mark Wood</strong></td>
											  <td>30</td>
											  <td>Orlando</td>
											  <td>Male</td>
											  <td>
												  <div class="d-flex">
												  	  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"><i class="fa fa-pencil"></i></a>
													  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs"><i class="fa fa-trash"></i></a>
												  </div>
											  </td>
											</tr>
											<tr>
											  <td>05</td>
											  <td>01/08/2021</td>
											  <td>DO-159874</td>
											  <td><strong>Johen Doe</strong></td>
											  <td>58</td>
											  <td>Tampa</td>
											  <td>Male</td>
											  <td>
												  <div class="d-flex">
												  	  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"><i class="fa fa-pencil"></i></a>
													  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs"><i class="fa fa-trash"></i></a>
												  </div>
											  </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="box-footer bg-light py-10 with-border">
							    <div class="d-flex align-items-center justify-content-between">
									<p class="mb-0">Total 90 Patient</p>
									<a type="button" class="waves-effect waves-light btn btn-primary">View All</a>
								</div>
							</div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-3 col-xl-4 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Total Patient</h4>
						</div>
						<div class="box-body">
							<div id="total_patient"></div>
						</div>
					</div>
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Diagnostic Centers</h4>
							<p class="mb-0 pull-right">View All</p>
						</div>
						<div class="box-body">
							<div class="inner-user-div3">
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="../images/avatar/avatar-1.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500">
										<a href="#" class="text-dark hover-primary mb-1 fs-16">Dr. Jaylon Stanton</a>
										<span class="text-fade">Dentist</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item flexbox" href="#">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="#">Sent</a>
										  <a class="dropdown-item" href="#">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="#">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="../images/avatar/avatar-10.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500">
										<a href="#" class="text-dark hover-danger mb-1 fs-16">Dr. Carla Schleifer</a>
										<span class="text-fade">Oculist</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item flexbox" href="#">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="#">Sent</a>
										  <a class="dropdown-item" href="#">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="#">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="../images/avatar/avatar-11.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500">
										<a href="#" class="text-dark hover-success mb-1 fs-16">Dr. Hanna Geidt</a>
										<span class="text-fade">Surgeon</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item flexbox" href="#">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="#">Sent</a>
										  <a class="dropdown-item" href="#">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="#">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-30">
									<div class="me-15">
										<img src="../images/avatar/avatar-12.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500">
										<a href="#" class="text-dark hover-info mb-1 fs-16">Dr. Roger George</a>
										<span class="text-fade">General Practitioners</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item flexbox" href="#">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="#">Sent</a>
										  <a class="dropdown-item" href="#">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="#">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center">
									<div class="me-15">
										<img src="../images/avatar/avatar-15.png" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
									</div>
									<div class="d-flex flex-column flex-grow-1 fw-500">
										<a href="#" class="text-dark hover-warning mb-1 fs-16">Dr. Natalie doe</a>
										<span class="text-fade">Physician</span>
									</div>
									<div class="dropdown">
										<a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
										  <a class="dropdown-item flexbox" href="#">
											<span>Inbox</span>
											<span class="badge badge-pill badge-info">5</span>
										  </a>
										  <a class="dropdown-item" href="#">Sent</a>
										  <a class="dropdown-item" href="#">Spam</a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item flexbox" href="#">
											<span>Draft</span>
											<span class="badge badge-pill badge-default">1</span>
										  </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar">

	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>
			<p>Users</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->



	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-50">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-bs-toggle="dropdown">
                      <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Color me-15"></span>
                        New Group</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span>
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
                      <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">You</a>
                                <p class="text-muted fs-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="../images/avatar/3.jpg" class="avatar avatar-lg" alt="">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                           My name is Anne Clarc.
                        </div>
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>
            </div>
		</div>
	</div>

	<!-- Page Content overlay -->


	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>

	<script src="assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>

	<!-- Doclinic App -->
	<script src="js/template.js"></script>
	<script src="js/pages/dashboard3.js"></script>

</body>

</html>