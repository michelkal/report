<body>

	<div class="site-wrapper">

		<!-- Header -->
		<header class="header header-menu-fullw">

			<div class="header-top">
				<div class="container">
					<div class="header-top-left">
						<ul class="social-links-header">
							<li><a href="#" class="btn btn-sm"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="btn btn-sm"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="btn btn-sm"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="btn btn-sm"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#" class="btn btn-sm"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="btn btn-sm"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<div class="header-top-right">
						<a href="page-login.html" class="btn btn-sm"><i class="fa fa-sign-in"></i> Login</a><a href="page-login.html" class="btn btn-sm"><i class="fa fa-unlock"></i> Register</a>
					</div>
				</div>
			</div>
			<div class="header-main">
				<div class="container">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html"><img src="{{ URL::asset('images/artisan_small.png') }}"></a>
						<!-- <h1><a href="index.html"><span>Handy</span>Man</a></h1> -->
					</div>
					<!-- Logo / End -->

					<button type="button" class="navbar-toggle">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Navigation -->
					<nav class="nav-main">
						<div class="nav-main-inner">
							<ul data-breakpoint="992" class="flexnav">
								<li><a href="/">Home</a></li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="page-about.html">About Us</a></li>
										<li><a href="page-services.html">Services</a></li>
										<li><a href="page-team.html">Team</a></li>
										<li><a href="page-team-member.html">Team Member</a></li>
										<li><a href="page-faqs.html">FAQs</a></li>
										<li><a href="page-fullwidth.html">Full Width</a></li>
										<li><a href="page-left-sidebar.html">Left Sidebar</a></li>
										<li><a href="page-right-sidebar.html">Right Sidebar</a></li>
										<li><a href="page-login.html">Login &amp; Register</a></li>
										<li><a href="page-404.html">404</a></li>
									</ul>
								</li>
								<li><a href="#">Features</a>
									<ul>
										<li><a href="features-shortcodes.html">Shortcodes</a></li>
										<li><a href="features-pricing-tables.html">Pricing Tables</a></li>
										<li><a href="features-typography.html">Typography</a></li>
										<li><a href="features-columns.html">Columns</a></li>
										<li><a href="features-icons.html">Icons</a></li>
									</ul>
								</li>
								<li class="active"><a href="#">Jobs</a>
									<ul>
										<li class="active"><a href="job-post-profile.html">Post a Profile</a></li>
										<li><a href="job-post-job.html">Post a Job</a></li>
										<li><a href="job-professionals.html">Professionals</a></li>
										<li><a href="job-dashboard.html">Dashboard</a></li>
										<li><a href="job-profile.html">Profile</a></li>
									</ul>
								</li>
								<li><a href="blog-right-sidebar.html">Blog</a>
									<ul>
										<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
										<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
										<li><a href="blog-fullwidth.html">Blog Full Width</a></li>
										<li><a href="blog-post.html">Single Post</a></li>
									</ul>
								</li>
								<li><a href="page-contacts.html">Contacts</a></li>
							</ul>
						</div>
					</nav>
					<!-- Navigation / End -->

				</div>
			</div>
			
		</header>
		<!-- Header / End -->
		@yield('content')

