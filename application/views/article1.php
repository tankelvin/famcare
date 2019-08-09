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
			<div class="bg-image bg-parallax overlay" style="background-image:url('<?php echo base_url();?>assets/img/a1.jpg')"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="<?php echo site_url('Welcome/home');?>">Home</a></li>
							<li><a href="<?php echo site_url('Welcome/article');?>">Article</a></li>
							<li>Lulusan Terbaik, Putra Deddy Corbuzier Buktikan Kalau Anak “Broken Home” Juga Bisa Berprestasi</li>
						</ul>
						<h1 class="white-text">Lulusan Terbaik, Putra Deddy Corbuzier Buktikan Kalau Anak “Broken Home” Juga Bisa Berprestasi</h1>
						<ul class="blog-post-meta">
							<li class="blog-meta-author">By : Fhai</li>
							<li>18 Oct, 2018</li>
						</ul>
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

						<!-- blog post -->
						<div class="blog-post">
							<p>An aeterno percipit per. His minim maiestatis consetetur et, brute tantas iracundia id sea. Vim tota nostrum reformidans te. Nam ad appareat mediocritatem, mediocrem similique usu ex, scaevola invidunt eu sed.</p>
							<p>Reque admodum praesent ei nec. Ad eius phaedrum conclusionemque cum, pri cu suas essent saperet. No vero ludus habemus qui. Per ex errem torquatos, eam in tale sumo mentitum. Cum nulla viderer no. Pri id antiopam volutpat evertitur, in vidit interpretaris nec.</p>
							<p>Te option apeirian corrumpit nec, has et tollit minimum molestie. Nam et justo everti, tale repudiandae cu nec. Aliquip legendos evertitur ne sit, mazim sadipscing sea ei. Sea no facete probatus vulputate, ex pri reque tempor. Odio adolescens ius te, docendi suscipit indoctum at qui.</p>
							<blockquote>
							  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							</blockquote>
							<p>An aeterno percipit per. His minim maiestatis consetetur et, brute tantas iracundia id sea. Vim tota nostrum reformidans te. Nam ad appareat mediocritatem, mediocrem similique usu ex, scaevola invidunt eu sed.</p>
							<p>Reque admodum praesent ei nec. Ad eius phaedrum conclusionemque cum, pri cu suas essent saperet. No vero ludus habemus qui. Per ex errem torquatos, eam in tale sumo mentitum. Cum nulla viderer no. Pri id antiopam volutpat evertitur, in vidit interpretaris nec.</p>
							<p>Te option apeirian corrumpit nec, has et tollit minimum molestie. Nam et justo everti, tale repudiandae cu nec. Aliquip legendos evertitur ne sit, mazim sadipscing sea ei. Sea no facete probatus vulputate, ex pri reque tempor. Odio adolescens ius te, docendi suscipit indoctum at qui.</p>
						</div>
						<!-- /blog post -->

						<!-- blog share -->
						<div class="blog-share">
							<h4>Share This Post:</h4>
							<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
						</div>
						<!-- /blog share -->

					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div id="aside" class="col-md-3">

					</div>
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

		<!-- Footer -->
<?php $this->load->view('layout/footer');?>
	</body>
</html>
