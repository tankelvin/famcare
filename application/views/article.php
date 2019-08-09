<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('layout/header');?>
	<body>

		<?php $this->load->view('layout/userlogin_navigation');?>

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url();?>assets/img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="<?php echo site_url('Welcome/home');?>">Home</a></li>
							<li>Article</li>
						</ul>
						<h1 class="white-text">Article Page</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-9">

						<!-- row -->
						<div class="row">

							<!-- single blog -->
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="<?php echo site_url('Welcome/article1');?>">
											<img src="<?php echo base_url();?>assets/img/a1.jpg" alt="">
										</a>
									</div>
									<h4><a href="<?php echo site_url('Welcome/article1');?>">Lulusan Terbaik, Putra Deddy Corbuzier Buktikan Kalau Anak “Broken Home” Juga Bisa Berprestasi</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: Fhai</span>
										<div class="pull-right">
											<span>18 Oct, 2018</span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

							<!-- single blog -->
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="<?php echo site_url('Welcome/article2');?>">
											<img src="<?php echo base_url();?>assets/img/a2.jpg" alt="">
										</a>
									</div>
									<h4><a href="<?php echo site_url('Welcome/article2');?>">Bagaimana Azka Corbuzier Mengubah ‘Broken Home’ Menjadi ‘Happy Home’</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: Yaw</span>
										<div class="pull-right">
											<span>1 Nov, 2017</span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

<!-- single blog -->
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="<?php echo site_url('Welcome/article3');?>">
											<img src="<?php echo base_url();?>assets/img/a3.jpg" alt="">
										</a>
									</div>
									<h4><a href="<?php echo site_url('Welcome/article3');?>">Anak korban broken home bisa sukses, mantan presiden SBY buktinya</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: brillio.net</span>
										<div class="pull-right">
											<span>6 March, 2016</span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

							<!-- single blog -->
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="<?php echo site_url('Welcome/article4');?>">
											<img src="<?php echo base_url();?>assets/img/a4.jpg" alt="">
										</a>
									</div>
									<h4><a href="<?php echo site_url('Welcome/article4');?>">Kalau Saja Bertemu Denganmu, Akan Aku Ceritakan Bagaimana Kami Melalui Hari Tanpa Sosok Ayah di Sisi</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: Krantinamalau</span>
										<div class="pull-right">
											<span>6 March, 2016</span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->
							<!-- single blog -->
							
						</div>
						<!-- /row -->

						
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div id="aside" class="col-md-3">

						<!-- posts widget -->
						<div class="widget posts-widget">
							<h3>Recents Posts</h3>

							<!-- single posts -->
							<div class="single-post">
								<a class="single-post-img" href="blog-post.html">
									<img src="<?php echo base_url();?>assets/img/post01.jpg" alt="">
								</a>
								<a href="blog-post.html">Pro eu error molestie deserunt.</a>
								<p><small>By : John Doe .18 Oct, 2017</small></p>
							</div>
							<!-- /single posts -->

							<!-- single posts -->
							<div class="single-post">
								<a class="single-post-img" href="blog-post.html">
									<img src="<?php echo base_url();?>assets/img/post02.jpg" alt="">
								</a>
								<a href="blog-post.html">Pro eu error molestie deserunt.</a>
								<p><small>By : John Doe .18 Oct, 2017</small></p>
							</div>
							<!-- /single posts -->

							<!-- single posts -->
							<div class="single-post">
								<a class="single-post-img" href="blog-post.html">
									<img src="<?php echo base_url();?>assets/img/post03.jpg" alt="">
								</a>
								<a href="blog-post.html">Pro eu error molestie deserunt.</a>
								<p><small>By : John Doe .18 Oct, 2017</small></p>
							</div>
							<!-- /single posts -->

						</div>
						<!-- /posts widget -->

					</div>
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

		<?php $this->load->view('layout/footer');?>

	</body>
</html>
