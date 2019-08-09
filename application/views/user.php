<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('layout/header');?>
	<body>
		<?php $this->load->view('layout/adminlogin_navigation');?>
		<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Hero-area -->
			<div class="hero-area section">

				<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url();?>assets/img/page-background.jpg)"></div>

				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 text-center">
							<ul class="hero-area-tree">
								<li><a href="<?php echo site_url('Welcome/homeadmin');?>">Home</a></li>
								<li>User</li>
							</ul>
							<h1 class="white-text">Users</h1>

						</div>
					</div>
				</div>

			</div>
			<!-- /Hero-area -->

		</div>
		<!-- /Home -->

		<?php $this->load->view('layout/footer');?>
		
	</body>
</html>
	