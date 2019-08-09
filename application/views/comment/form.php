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
								<li>Comment</li>
							</ul>
							<h1 class="white-text">Comments</h1>

						</div>
					</div>
				</div>

			</div>
			<!-- /Hero-area -->

			<section class="content">
        <div class="container-fluid">
           <div class="card">
                        <div class="body">
                        <div class="col-md-10 col-md-offset-1">
                            <form action="<?php echo site_url('Comment/insert_aksi')?>" method="post"><br>
                                <input type="hidden" name="comment_id" value="<?php if(isset($comment->comment_id)) echo $comment->comment_id?>">
                                <label for="email_address">Nama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" name="name" placeholder="Masukkan Nama Anda" value="<?php if(isset($comment->name)) echo $comment->name?>">
                                    </div>
                                </div>
                                <label for="password">Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="password" class="form-control" name="email" placeholder="Masukkan Email Anda" value="<?php if(isset($comment->email)) echo $comment->email?>">
                                    </div>
                                </div>
                                <label for="email_address">Message</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" name="message" placeholder="Masukkan Pesan Anda" value="<?php if(isset($comment->message)) echo $comment->message?>">
                                    </div>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Tambah</button>
                            </form>
                        </div>
                    </div>
                    </div>
        </div>
    </section>

		</div>
		<!-- /Home -->

		<?php $this->load->view('layout/footer');?>
		
	</body>
</html>
	