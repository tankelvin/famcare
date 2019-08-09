<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('layout/header');?>
	<body>
		<?php $this->load->view('layout/adminlogin_navigation');?>
		<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url();?>assets/img/fm2.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1 class="white-text">Welcome Admin</h1>
							<a class="main-button icon-button" href="<?php echo site_url('User/index');?>">Show User</a>
							<a class="main-button icon-button" href="<?php echo site_url('Welcome/comment');?>">Show Comment</a>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

		<?php $this->load->view('layout/footer');?>
		
	</body>
</html>
	