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

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <div class="col-md-10 col-md-offset-1">
                            <h2>
                                <a href="<?php echo site_url('comment/insert')?>" class="btn btn-primary  pull-right">Tambah Data</a>
                                <br>   
                            </h2>
                        </div>
                        </div>
                        <div class="body">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    		foreach ($comment as $key => $value) {
                                    	?>
                                        <tr>
                                            <td><?php echo $key+1;?></td>
                                            <td><?php echo $value->name;?></td>
                                            <td><?php echo $value->email;?></td>
                                            <td><?php echo $value->message;?></td>
                                            <td>
                                            	<a href="<?php echo site_url('comment/update/'.$value->comment_id)?>" class="btn btn-warning">Edit</a>
                                            	<a href="<?php echo site_url('comment/delete/'.$value->comment_id)?>" onClick=" return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
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
	