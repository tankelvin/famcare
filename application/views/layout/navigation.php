		<!-- Header -->
		<header id="header" class="transparent-nav">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.html">
							<img src="<?php echo base_url();?>assets/img/logo-alt.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="<?php echo site_url('Welcome/index');?>">Home</a></li>
						<li><a href="<?php echo site_url('Welcome/courses');?>">Course</a></li>
						<li><a href="<?php echo site_url('Welcome/article');?>">Article</a></li>
						<li><a href="<?php echo site_url('Welcome/contact');?>">Contact</a></li>
						<li data-toggle="modal" data-target="#mylogin"><a href="#">Login</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->