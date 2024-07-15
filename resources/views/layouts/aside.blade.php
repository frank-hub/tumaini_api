<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">
				<li>
				  <a href="{{route('dashboard')}}">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>Dashboard</span>
				  </a>
				</li>

				<li class="treeview">
				  <a href="#">
					<i class="icon-Barcode-read"><span class="path1"></span><span class="path2"></span></i>
					<span>Appointments</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{url('appointment/index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Appointments</a></li>
					<li><a href="{{url('appointment/add')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>New Appointments</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Compiling"><span class="path1"></span><span class="path2"></span></i>
					<span>Patients</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{url('patients/view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Patients</a></li>
					<li><a href="{{url('patients/add')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Patient</a></li>
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Compiling"><span class="path1"></span><span class="path3"></span></i>
					<span>Centers</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{url('centers/view')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Diagnostic Centers</a></li>
					<li><a href="{{url('centers/add')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Diagnostic Centers</a></li>
				  </ul>
				</li>
				<li>
				  <a href="{{url('reports')}}">
					<i class="icon-Settings-1"><span class="path1"></span><span class="path2"></span></i>
					<span>Reports</span>
				  </a>
				</li>
                <li class="treeview">
                    <a href="#">
                      <i class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></i>
                      <span>News & Updates</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{route('auth_login')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>View News</a></li>
                      <li><a href="{{route('news_index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add News</a></li>
                    </ul>
                  </li>

				<li class="treeview">
				  <a href="#">
					<i class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></i>
					<span>Authentication</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="{{url('auth_login')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a></li>
					<li><a href="{{url('auth_register')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a></li>
					<li><a href="{{url('auth_user_pass')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a></li>
				  </ul>
				</li>

			  </ul>

			  <div class="sidebar-widgets">
				  <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
					<div class="text-center">
						<img src="https://medical-admin-template.multipurposethemes.com/images/svg-icon/color-svg/custom-17.svg" class="sideimg p-5" alt="">
						<h4 class="title-bx text-primary">Make an Appointments</h4>
						<a href="#" class="py-10 fs-14 mb-0 text-primary">
							Best Helth Care here <i class="mdi mdi-arrow-right"></i>
						</a>
					</div>
				  </div>
				<div class="copyright text-center m-25">
					<p><strong class="d-block">Tumaini Dashboard</strong> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>
