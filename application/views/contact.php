<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('layout/header');?>
	<body>
		<?php $this->load->view('layout/userlogin_navigation');?>

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url()?>assets/img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="<?php echo site_url('Welcome/index');?>">Home</a></li>
							<li>Contact</li>
						</ul>
						<h1 class="white-text">Get In Touch</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- contact form -->
					<div class="col-md-6">
						<div class="contact-form">
							<h4>Send A Message</h4>
							<form>
								<input class="input" type="text" name="name" placeholder="Name">
								<input class="input" type="email" name="email" placeholder="Email">
								<textarea class="input" name="message" placeholder="Enter your Message"></textarea>
								<button class="main-button icon-button pull-right">Send Message</button>
							</form>
						</div>
					</div>
					<!-- /contact form -->

					<!-- contact information -->
					<div class="col-md-5 col-md-offset-1">
						<h4>Contact Information</h4>
						<ul class="contact-details">
							<li><i class="fa fa-envelope"></i>famcare@gmail.com</li>
							<li><i class="fa fa-phone"></i>+62 812 6652 7871</li>
							<li><i class="fa fa-map-marker"></i>Umban Sari Street No. 1</li>
						</ul>

						<!-- contact map -->
						<div id="contact-map"></div>
						<!-- /contact map -->

					</div>
					<!-- contact information -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->

		<?php $this->load->view('layout/footer');?>
	</body>
</html>
