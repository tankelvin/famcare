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
							<h1 class="white-text">Data User</h1>

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
                            <form action="<?php echo site_url('user/insert_aksi')?>" method="post"><br>
                                <input type="hidden" name="$user_id" value="<?php if(isset($user->user_id)) echo $user->user_id?>">
                                <label for="email_address">Nama User</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" name="username" placeholder="Masukkan Nama Anda" value="<?php if(isset($user->username)) echo $user->username?>">
                                    </div>
                                </div>
                                <label for="password">Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="password" class="form-control" name="email" placeholder="Masukkan Email Anda" value="<?php if(isset($user->email)) echo $user->email?>">
                                    </div>
                                </div>
                                <label for="email_address">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="email_address" class="form-control" name="password" placeholder="Masukkan Password Anda" value="<?php if(isset($user->password)) echo $user->password?>">
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
	