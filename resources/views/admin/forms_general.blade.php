<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://medical-admin-template.multipurposethemes.com/images/favicon.ico">

    <title>Doclinic - Dashboard  General Form Elements </title>

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
			  <span class="light-logo"><img src="../images/logo-letter.png" alt="logo"></span>
			  <span class="dark-logo"><img src="../images/logo-letter.png" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
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

  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">General Form Elements</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">General Form Elements</li>
							</ol>
						</nav>
					</div>
				</div>

			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Sample form 1</h4>
						</div>
						<!-- /.box-header -->
						<form class="form">
							<div class="box-body">
								<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
								<hr class="my-15">
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">First Name</label>
									  <input type="text" class="form-control" placeholder="First Name">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Last Name</label>
									  <input type="text" class="form-control" placeholder="Last Name">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">E-mail</label>
									  <input type="text" class="form-control" placeholder="E-mail">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Contact Number</label>
									  <input type="text" class="form-control" placeholder="Phone">
									</div>
								  </div>
								</div>
								<h4 class="box-title text-info mb-0 mt-20"><i class="ti-save me-15"></i> Requirements</h4>
								<hr class="my-15">
								<div class="form-group">
								  <label class="form-label">Company</label>
								  <input type="text" class="form-control" placeholder="Company Name">
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Interested in</label>
									  <select class="form-select">
										<option>Interested in</option>
										<option>design</option>
										<option>development</option>
										<option>illustration</option>
										<option>branding</option>
										<option>video</option>
									  </select>
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Budget</label>
									  <select class="form-select">
										<option>Budget</option>
										<option>less than 5000$</option>
										<option>5000$ - 10000$</option>
										<option>10000$ - 20000$</option>
										<option>more than 20000$</option>
									  </select>
									</div>
								  </div>
								</div>
								<div class="form-group">
								  <label class="form-label">Select File</label>
								  <label class="file">
									<input type="file" id="file">
								  </label>
								</div>
								<div class="form-group">
								  <label class="form-label">About Project</label>
								  <textarea rows="5" class="form-control" placeholder="About Project"></textarea>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="button" class="btn btn-warning me-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>
						</form>
					  </div>
					  <!-- /.box -->
				</div>

				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Sample form 2</h4>
						</div>
						<!-- /.box-header -->
						<form class="form">
							<div class="box-body">
								<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> About User</h4>
								<hr class="my-15">
								<div class="row">
								  <div class="col-md-6">

									<div class="form-group">
									  <label class="form-label">First Name</label>
									  <input type="text" class="form-control" placeholder="First Name">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Last Name</label>
									  <input type="text" class="form-control" placeholder="Last Name">
									</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">E-mail</label>
									  <input type="text" class="form-control" placeholder="E-mail">
									</div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
									  <label class="form-label">Contact Number</label>
									  <input type="text" class="form-control" placeholder="Phone">
									</div>
								  </div>
								</div>
								<h4 class="box-title text-info mb-0 mt-20"><i class="ti-envelope me-15"></i> Contact Info & Bio</h4>
								<hr class="my-15">
								<div class="form-group">
								  <label class="form-label">Email</label>
								  <input class="form-control" type="email" placeholder="email">
								</div>
								<div class="form-group">
								  <label class="form-label">Website</label>
								  <input class="form-control" type="url" placeholder="http://">
								</div>
								<div class="form-group">
								  <label class="form-label">Contact Number</label>
								  <input class="form-control" type="tel" placeholder="Contact Number">
								</div>
								<div class="form-group">
								  <label class="form-label">Bio</label>
								  <textarea rows="4" class="form-control" placeholder="Bio"></textarea>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer text-end">
								<button type="button" class="btn btn-warning me-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>
						</form>
					  </div>
					  <!-- /.box -->
				</div>

				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Sample Form 3 with the Icons</h4>
						</div>
						<!-- /.box-header -->
						<form class="form">
							<div class="box-body">
								<div class="form-group">
									<label class="form-label">User Name</label>
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="ti-user"></i></span>
										<input type="text" class="form-control" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Email address</label>
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="ti-email"></i></span>
										<input type="email" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Password</label>
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="ti-lock"></i></span>
										<input type="password" class="form-control" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Confirm Password</label>
									<div class="input-group mb-3">
										<span class="input-group-text"><i class="ti-lock"></i></span>
										<input type="password" class="form-control" placeholder="Confirm Password">
									</div>
								</div>
								<div class="form-group">
									<div class="checkbox checkbox-success">
										<input id="checkbox1" type="checkbox">
										<label for="checkbox1"> Remember me </label>
									</div>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="button" class="btn btn-warning me-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>
						</form>
					  </div>
					  <!-- /.box -->
				</div>

				<div class="col-lg-6 col-12">
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Sample Form 4 with the right Icons</h4>
						</div>
						<!-- /.box-header -->
						<form class="form">
							<div class="box-body">
								<div class="form-group">
									<label class="form-label">User Name</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control" placeholder="Username">
										<span class="input-group-text"><i class="ti-user"></i></span>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Email address</label>
									<div class="input-group mb-3">
										<input type="email" class="form-control" placeholder="Email">
										<span class="input-group-text"><i class="ti-email"></i></span>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Password</label>
									<div class="input-group mb-3">
										<input type="password" class="form-control" placeholder="Password">
										<span class="input-group-text"><i class="ti-lock"></i></span>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Confirm Password</label>
									<div class="input-group mb-3">
										<input type="password" class="form-control" placeholder="Confirm Password">
										<span class="input-group-text"><i class="ti-lock"></i></span>
									</div>
								</div>
								<div class="form-group">
									<div class="checkbox checkbox-success">
										<input id="checkbox2" type="checkbox">
										<label for="checkbox2"> Remember me </label>
									</div>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer text-end">
								<button type="button" class="btn btn-warning me-1">
								  <i class="ti-trash"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
								  <i class="ti-save-alt"></i> Save
								</button>
							</div>
						</form>
					  </div>
					  <!-- /.box -->
				</div>

				<div class="col-lg-6 col-12">
					<!-- Basic Forms -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Default Basic Forms</h4>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						  <div class="row">
							<div class="col-12">
								<div class="form-group row">
								  <label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
								  <div class="col-sm-10">
									<input class="form-control" type="text" value="Johen Doe" id="example-text-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
								  <div class="col-sm-10">
									<input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
								  <div class="col-sm-10">
									<input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
								  <div class="col-sm-10">
									<input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
								  <div class="col-sm-10">
									<input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
								  <div class="col-sm-10">
									<input class="form-control" type="password" value="hunter2" id="example-password-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
								  <div class="col-sm-10">
									<input class="form-control" type="number" value="42" id="example-number-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
								  <div class="col-sm-10">
									<input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
								  <div class="col-sm-10">
									<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-month-input" class="col-sm-2 col-form-label">Month</label>
								  <div class="col-sm-10">
									<input class="form-control" type="month" value="2011-08" id="example-month-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-week-input" class="col-sm-2 col-form-label">Week</label>
								  <div class="col-sm-10">
									<input class="form-control" type="week" value="2011-W33" id="example-week-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>
								  <div class="col-sm-10">
									<input class="form-control" type="time" value="13:45:00" id="example-time-input">
								  </div>
								</div>
								<div class="form-group row">
								  <label for="example-color-input" class="col-sm-2 col-form-label">Color</label>
								  <div class="col-sm-10">
									<input class="form-control" type="color" value="#563d7c" id="example-color-input">
								  </div>
								</div>
							</div>
							<!-- /.col -->
						  </div>
						  <!-- /.row -->
						</div>
						<!-- /.box-body -->
					  </div>
					  <!-- /.box -->
				</div>

				<div class="col-lg-6 col-12">
					<!-- Basic Forms -->
					  <div class="box">
						<div class="box-header with-border">
						  <h4 class="box-title">Form Sections</h4>
						</div>
						<!-- /.box-header -->
						<form>
							<div class="box-body">
								<h4 class="mt-0 mb-20">1. Customer Info:</h4>
								<div class="form-group">
									<label class="form-label">Full Name:</label>
									<input type="email" class="form-control" placeholder="Enter full name">
								</div>
								<div class="form-group">
									<label class="form-label">Email address:</label>
									<input type="email" class="form-control" placeholder="Enter email">
								</div>
								<div class="form-group">
									<label class="form-label">Contact:</label>
									<input type="tel" class="form-control" placeholder="Phone number">
								</div>
								<div class="form-group">
									<label class="form-label">Communications :</label>
									<div class="c-inputs-stacked">
										<input type="checkbox" id="checkbox_123">
										<label for="checkbox_123" class="me-30">Email</label>
										<input type="checkbox" id="checkbox_234">
										<label for="checkbox_234" class="me-30">SMS</label>
										<input type="checkbox" id="checkbox_345">
										<label for="checkbox_345" class="me-30">Phone</label>
									</div>
								</div>
								<hr>

								<h4 class="mt-0 mb-20">2. Payment Info:</h4>

								<div class="form-group">
									<label class="form-label">Payment Method :</label>
									<div class="c-inputs-stacked">
										<input name="group123" type="radio" id="radio_123" value="1">
										<label for="radio_123" class="me-30">Credit Card</label>
										<input name="group456" type="radio" id="radio_456" value="1">
										<label for="radio_456" class="me-30">Cash</label>
										<input name="group789" type="radio" id="radio_789" value="1">
										<label for="radio_789" class="me-30">Wallet</label>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Amount:</label>
									<input type="email" class="form-control" placeholder="Enter full name">
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-danger">Cancel</button>
								<button type="submit" class="btn btn-success pull-right">Submit</button>
							</div>
						</form>
					  </div>
					  <!-- /.box -->
				</div>
		    </div>
			<div class="row">
				<div class="col-12">
				  <div class="box">

					<div class="box-header with-border">
					  <h4 class="box-title">Text inputs</h4>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label class="form-label">Text input</label>
							<input type="text" class="form-control" placeholder="Text input">
						</div>

						<div class="form-group">
							<label class="form-label">Password input</label>
							<input type="password" class="form-control" placeholder="Password input">
						</div>

						<div class="form-group">
							<label class="form-label">Input with helper</label>
							<input type="text" class="form-control" placeholder="Input with helper">
						</div>

						<div class="form-group">
							<label class="text-success form-label">Contextual input helper</label>
							<div class="form-group-feedback form-group-feedback-right">
								<input type="text" class="form-control border-success" placeholder="Success with icon">
								<div class="form-control-feedback text-success">
									<i class="fa fa-check"></i>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="form-label">Readonly input field</label>
							<input type="text" class="form-control" readonly placeholder="Readonly input field">
						</div>

						<div class="form-group">
							<label class="form-label">Disabled input field</label>
							<input type="text" class="form-control" disabled placeholder="Disabled input field">
						</div>

						<div class="form-group">
							<label class="form-label">Textarea</label>
							<textarea rows="5" cols="5" class="form-control" placeholder="Textarea"></textarea>
						</div>

					</div>

					<div class="box-header with-border">
					  <h4 class="box-title">Input groups</h4>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label class="form-label">Left group addon</label>
							<div class="input-group">
								<span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
								<input type="text" class="form-control" placeholder="Left group addon">
							</div>
						</div>

						<div class="form-group">
							<label class="form-label">Right group addon</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Right group addon">
								<span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
							</div>
						</div>

						<div class="form-group">
							<label class="form-label">Left group button</label>
							<div class="input-group">
								<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-bs-toggle="dropdown">Action</button>
								<div class="dropdown-menu">
									<a href="#" class="dropdown-item">Action</a>
									<a href="#" class="dropdown-item">Another action</a>
									<a href="#" class="dropdown-item">Something else here</a>
									<a href="#" class="dropdown-item">One more line</a>
								</div>
								<input type="text" class="form-control" placeholder="Left group button">
							</div>
						</div>

						<div class="form-group">
							<label class="form-label">Right group button</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Right group button">
								<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-bs-toggle="dropdown">Action</button>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="#" class="dropdown-item">Action</a>
									<a href="#" class="dropdown-item">Another action</a>
									<a href="#" class="dropdown-item">Something else here</a>
									<a href="#" class="dropdown-item">One more line</a>
								</div>
							</div>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-right">
							<label class="form-label text-danger">Contextual input group</label>
							<div class="position-relative">
								<div class="input-group">
									<span class="input-group-text text-danger border-danger">
										<i class="fa fa-times-circle-o"></i>
									</span>
									<input type="text" class="form-control border-danger" placeholder="Contextual input group">
								</div>
								<div class="form-control-feedback text-danger">
									<i class="fa fa-times-circle-o"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="box-header with-border">
					  <h4 class="box-title">Selects</h4>
					</div>
					<div class="box-body">
						<div class="form-group form-group-float">
							<label class="form-label">Basic select</label>
							<select class="form-select">
								<option value="" selected>Basic select</option>
								<optgroup label="Alaskan/Hawaiian Time Zone">
									<option value="AK">Alaska</option>
									<option value="HI">Hawaii</option>
								</optgroup>
								<optgroup label="Pacific Time Zone">
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="WA">Washington</option>
								</optgroup>
								<optgroup label="Mountain Time Zone">
									<option value="AZ">Arizona</option>
									<option value="CO">Colorado</option>
									<option value="WY">Wyoming</option>
								</optgroup>
							</select>
						</div>
					</div>
			  </div>
			  <!-- /.box -->

			  <!-- Form Element sizes -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Different Height</h4>
				</div>
				<div class="box-body form-element">
				  <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
				  <br><br>
				  <input class="form-control" type="text" placeholder="Default input">
				  <br><br>
				  <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Different Width</h4>
				</div>
				<div class="box-body form-element">
				  <div class="row">
					<div class="col-sm-3">
					  <input type="text" class="form-control" placeholder=".col-sm-3">
					</div>
					<div class="col-sm-4">
					  <input type="text" class="form-control" placeholder=".col-sm-4">
					</div>
					<div class="col-sm-5">
					  <input type="text" class="form-control" placeholder=".col-sm-5">
					</div>
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <!-- Input addon -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Input Addon</h4>
				</div>
				<div class="box-body">
				  <div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" class="form-control" placeholder="Username">
				  </div>
				  <br>

				  <div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-addon">.00</span>
				  </div>
				  <br>

				  <div class="input-group">
					<span class="input-group-addon">$</span>
					<input type="text" class="form-control">
					<span class="input-group-addon">.00</span>
				  </div>

				  <h6 class="mt-15 mb-5">With icons</h6>

				  <div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<input type="email" class="form-control" placeholder="Email">
				  </div>
				  <br>

				  <div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-addon"><i class="fa fa-check"></i></span>
				  </div>
				  <br>

				  <div class="input-group">
					<span class="input-group-addon"><i class="fa fa-dollar"></i></span>
					<input type="text" class="form-control">
					<span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
				  </div>

				  <h6 class="mt-15 mb-5">With checkbox and radio inputs</h6>

				  <div class="row">
					<div class="col-lg-6">
					  <div class="input-group">
						<span class="input-group-addon">
						  <input type="checkbox" id="addon_Checkbox_1">
						  <label for="addon_Checkbox_1" style="padding-left: 20px;height: 17px;"></label>
						</span>
						<input type="text" class="form-control">
					  </div>
					  <!-- /input-group -->
					</div>
					<!-- /.col-lg-6 -->
					<div class="col-lg-6">
					  <div class="input-group">
							<span class="input-group-addon">
							  <input name="group1" type="radio" id="addon_Option_1">
							  <label for="addon_Option_1" style="padding-left: 20px;height: 17px;"></label>
							</span>
						<input type="text" class="form-control">
					  </div>
					  <!-- /input-group -->
					</div>
					<!-- /.col-lg-6 -->
				  </div>
				  <!-- /.row -->
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			</div>
			<!--/.col (left) -->
			<!-- right column -->
			<div class="col-12">
			  <!-- Horizontal Form -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Horizontal Form</h4>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form class="form-horizontal form-element">
				  <div class="box-body">
					<div class="form-group row">
					  <label for="inputEmail3" class="col-sm-2 form-label">Email</label>

					  <div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					  </div>
					</div>
					<div class="form-group row">
					  <label for="inputPassword3" class="col-sm-2 form-label">Password</label>

					  <div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					  </div>
					</div>
					<div class="form-group row">
					  <div class="ms-auto col-sm-10">
						<div class="checkbox">
							<input type="checkbox" id="Remember">
							<label for="Remember">Remember me</label>
						</div>
					  </div>
					</div>
				  </div>
				  <!-- /.box-body -->
				  <div class="box-footer">
					<button type="submit" class="btn btn-danger">Cancel</button>
					<button type="submit" class="btn btn-info pull-right">Sign in</button>
				  </div>
				  <!-- /.box-footer -->
				</form>
			  </div>
			  <!-- /.box -->
			  <!-- general form elements disabled -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">General Elements</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <form role="form">
					<!-- text input -->
					<div class="form-group">
					  <label class="form-label">Text</label>
					  <input type="text" class="form-control" placeholder="Enter ...">
					</div>
					<div class="form-group">
					  <label class="form-label">Text Disabled</label>
					  <input type="text" class="form-control" placeholder="Enter ..." disabled>
					</div>

					<!-- textarea -->
					<div class="form-group">
					  <label class="form-label">Textarea</label>
					  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
					</div>
					<div class="form-group">
					  <label class="form-label">Textarea Disabled</label>
					  <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
					</div>

					<!-- input states -->
					<div class="form-group has-success">
					  <label class="form-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
					  <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
					  <span class="help-block">Help block with success</span>
					</div>
					<div class="form-group has-warning">
					  <label class="form-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
						warning</label>
					  <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
					  <span class="help-block">Help block with warning</span>
					</div>
					<div class="form-group has-error">
					  <label class="form-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
						error</label>
					  <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
					  <span class="help-block">Help block with error</span>
					</div>

					<!-- checkbox -->
					<div class="form-group">
					  <div class="checkbox">
						  <input type="checkbox" id="Checkbox_1">
						  <label for="Checkbox_1">Checkbox 1</label>
					  </div>

					  <div class="checkbox">
						  <input type="checkbox" id="Checkbox_2">
						  <label for="Checkbox_2">Checkbox 2</label>
					  </div>

					  <div class="checkbox">
						 <input type="checkbox" id="Checkbox_3" disabled>
						 <label for="Checkbox_3">Checkbox disabled</label>
					  </div>
					</div>

					<!-- radio -->
					<div class="form-group">
					  <div class="radio">
						  <input name="group1" type="radio" id="Option_1" checked>
						  <label for="Option_1">Option one is this and that&mdash;be sure to include why it's great</label>
					  </div>
					  <div class="radio">
						  <input name="group1" type="radio" id="Option_2" >
						  <label for="Option_2">Option two can be something else and selecting it will deselect option one</label>
					  </div>
					  <div class="radio">
						  <input name="group1" type="radio" id="Option_3" disabled>
						  <label for="Option_3">Option three is disabled</label>
					  </div>
					</div>

					<!-- select -->
					<div class="form-group">
					  <label class="form-label">Select</label>
					  <select class="form-select">
						<option>option 1</option>
						<option>option 2</option>
						<option>option 3</option>
						<option>option 4</option>
						<option>option 5</option>
					  </select>
					</div>
					<div class="form-group">
					  <label class="form-label">Select Disabled</label>
					  <select class="form-select" disabled>
						<option>option 1</option>
						<option>option 2</option>
						<option>option 3</option>
						<option>option 4</option>
						<option>option 5</option>
					  </select>
					</div>

					<!-- Select multiple-->
					<div class="form-group">
					  <label class="form-label">Select Multiple</label>
					  <select multiple class="form-select">
						<option>option 1</option>
						<option>option 2</option>
						<option>option 3</option>
						<option>option 4</option>
						<option>option 5</option>
					  </select>
					</div>
					<div class="form-group">
					  <label class="form-label">Select Multiple Disabled</label>
					  <select multiple class="form-select" disabled>
						<option>option 1</option>
						<option>option 2</option>
						<option>option 3</option>
						<option>option 4</option>
						<option>option 5</option>
					  </select>
					</div>

				  </form>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!--/.col (right) -->
		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="https://themeforest.net/item/doclinic-medical-responsive-bootstrap-admin-dashboard/32737529">Purchase Now</a>
		  </li>
		</ul>
    </div>
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

	<!-- ./side demo panel -->
	<div class="sticky-toolbar">
	    <a href="https://themeforest.net/item/doclinic-medical-responsive-bootstrap-admin-dashboard/32737529" data-bs-toggle="tooltip" data-bs-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>
	    <a href="https://themeforest.net/user/multipurposethemes/portfolio" data-bs-toggle="tooltip" data-bs-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Image"></span>
		</a>
	    <a id="chat-popup" href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
			<span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
		</a>
	</div>
	<!-- Sidebar -->

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
    <script src="../assets/icons/feather-icons/feather.min.js"></script>

	<!-- Doclinic App -->
	<script src="js/template.js"></script>


</body>
</html>
