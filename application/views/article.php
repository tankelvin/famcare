<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('layout/header');?>
	<body>
		<?php $this->load->view('layout/userlogin_navigation');?>
		<!-- Home -->
		<div id="home" class="hero-area">

		<!-- Hero-area -->
	<div class="hero-area section">

			<!-- Backgound Image -->
		<div class="bg-image bg-parallax overlay" style="background-image:url('<?php echo base_url();?>assets/img/fm2.jpg')">
			
		</div>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">Home</a></li>
							<li>Article</li>
						</ul>
						<h1 class="white-text">Article Page</h1>
					</div>
				</div>
			</div>

		
			<!-- /Backgound Image -->

			
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
										<a href="artikel1.php">
											<img src="<?php echo base_url();?>assets/img/a1.jpg" alt="">
										</a>
									</div>
									<h4><a href="blog-post.html">Lulusan Terbaik, Putra Deddy Corbuzier Buktikan Kalau Anak “Broken Home” Juga Bisa Berprestasi</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">Fhai</a></span>
										<div class="pull-right">
											<span>18 Oct, 2018</span>
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

							<!-- single blog -->
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="<?php echo base_url();?>views/artikel1.php">
											<img src="<?php echo base_url();?>assets/img/a2.jpg" alt="">
										</a>
									</div>
									<h4><a href="blog-post.html">Bagaimana Azka Corbuzier Mengubah ‘Broken Home’ Menjadi ‘Happy Home’</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">Ganis Rumpoko</a></span>
										<div class="pull-right">
											<span>18 Oct, 2017</span>
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

							<!-- single blog -->
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="blog-post.html">
											<img src="<?php echo base_url();?>assets/img/a3.jpg" alt="">
										</a>
									</div>
									<h4><a href="blog-post.html">Anak korban broken home bisa sukses, mantan presiden SBY buktinya</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">brillio.net</a></span>
										<div class="pull-right">
											<span>2 Jan, 2016</span>
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

							<!-- single blog -->
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="blog-post.html">
											<img src="<?php echo base_url();?>assets/img/a4.jpg" alt="">
										</a>
									</div>
									<h4><a href="blog-post.html">Kalau Saja Bertemu Denganmu, Akan Aku Ceritakan Bagaimana Kami Melalui Hari Tanpa Sosok Ayah di Sisi</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">Krantinamalau</a></span>
										<div class="pull-right">
											<span>1 Sep, 2015</span>
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

						</div>
						<!-- /row -->

						<!-- row -->
						<div class="row">

							<!-- pagination -->
							<div class="col-md-12">
								<div class="post-pagination">
									<a href="#" class="pagination-back pull-left">Back</a>
									<ul class="pages">
										<li class="active">1</li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
									</ul>
									<a href="#" class="pagination-next pull-right">Next</a>
								</div>
							</div>	
							<!-- pagination -->

						</div>
						<!-- /row -->
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div id="aside" class="col-md-3">

						<!-- search widget -->
						<div class="widget search-widget">
							<form>
								<input class="input" type="text" name="search">
								<button><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /search widget -->

						<!-- category widget -->
						<div class="widget category-widget">
							<h3>Categories</h3>
							<a class="category" href="#">Broken Home <span>12</span></a>
							<a class="category" href="#">Lonely <span>5</span></a>
							<a class="category" href="#">Depressed <span>24</span></a>
							<a class="category" href="#">Happy <span>78</span></a>
							<a class="category" href="#">Family <span>36</span></a>
						</div>
						<!-- /category widget -->

						<!-- posts widget -->
						<div class="widget posts-widget">
							<h3>Recents Posts</h3>

							<!-- single posts -->
							<div class="single-post">
								<a class="single-post-img" href="blog-post.html">
									<img src="./img/post01.jpg" alt="">
								</a>
								<a href="blog-post.html">Pro eu error molestie deserunt.</a>
								<p><small>By : John Doe .18 Oct, 2017</small></p>
							</div>
							<!-- /single posts -->

							<!-- single posts -->
							<div class="single-post">
								<a class="single-post-img" href="blog-post.html">
									<img src="./img/post02.jpg" alt="">
								</a>
								<a href="blog-post.html">Pro eu error molestie deserunt.</a>
								<p><small>By : John Doe .18 Oct, 2017</small></p>
							</div>
							<!-- /single posts -->

							<!-- single posts -->
							<div class="single-post">
								<a class="single-post-img" href="blog-post.html">
									<img src="./img/post03.jpg" alt="">
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
		</div>

		<?php $this->load->view('layout/footer');?> 
</body>
</html>
	



