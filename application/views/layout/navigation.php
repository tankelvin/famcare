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
						<li><a href="<?php echo site_url('welcome/index');?>">Home</a></li>
						<li><a href="<?php echo site_url('Welcome/blog');?>"> course</a></li>
						<li><a href="<?php site_url('welcome/acticle');?>">Article</a></li>
						<li><a href="<?php site_url('welcome/contact');?>">Contact</a></li>
						<li><a href="<?php site_url('welcome/login');?>" data-toggle="modal" data-target="#simpleModal">Login</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->