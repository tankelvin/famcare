<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('layout/header');?>
	<body>

			<!-- Header -->
		<?php $this->load->view('layout/userlogin_navigation');?>
		<!-- /Header -->

		<!-- Hero-area -->
		<div class="hero-area section">

			<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url();?>assets/img/page-background.jpg)"></div>

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="<?php echo site_url('Welcome/home');?>">Home</a></li>
							<li>Courses</li>
						</ul>
						<h1 class="white-text">Courses</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>Welcome</h2>
						<p class="lead">Follow These Treatments Below, Click To Start</p>
					</div>
				</div>
				<!-- /row -->

				<!-- courses -->
				<div id="courses-wrapper">

					<!-- row -->
					<div class="row">

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="<?php echo base_url();?>todolist/index.php " class="course-img">
									<img src="<?php echo base_url();?>assets/img/course01.jpg" alt="">						
									<i class="course-link-icon fa fa-link"></i>
								</a>
	
								<a class="course-title" href="<?php echo base_url();?>todolist/index.php "> Make a Relationship </a>
								<div class="course-details">
									<?php $this->load->view('layout/progress');?>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="<?php echo base_url();?>todolist/progress2.php" class="course-img">
									<img src="<?php echo base_url();?>assets/img/course02.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								
								<a class="course-title" href="<?php echo base_url();?>todolist/progress2.php ">Get back your life</a>
								<div class="course-details">
									<?php $this->load->view('layout/progress2');?>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="<?php echo base_url();?>todolist/progress3.php" class="course-img">
									<img src="<?php echo base_url();?>assets/img/course03.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="<?php echo base_url();?>todolist/progress3.php ">Try to love something</a>
								<div class="course-details">
									<?php $this->load->view('layout/progress3');?>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="<?php echo base_url();?>todolist/progress4.php" class="course-img">
									<img src="<?php echo base_url();?>assets/img/course04.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="<?php echo base_url();?>todolist/progress4.php ">Make a new life</a>
								<div class="course-details">
									<?php $this->load->view('layout/progress4');?>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->
		<?php $this->load->view('layout/footer');?>
	</body>
	
</html>
