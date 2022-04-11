
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Halaman profile</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<!-- <input type="text" class="form-control" placeholder="Search for..."> -->
									<span class="input-group-btn">
										<!-- <button class="btn btn-default" type="button">Go!</button> -->
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Profile</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
                                    
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('admin/profile_admin/update_admin') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_admin" value="<?php echo $hasil->id_admin?>" />
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Admin<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="nama_admin" required="required" class="form-control " name="nama_admin" value="<?php echo $hasil->nama_admin?>" readonly>
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Password<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="password_baru" class="form-control " name="password_baru" value="" readonly="">
											</div>
										</div>

												<!-- ini password lama kalo semisal gak ngerubah password -->
												<input type="hidden" id="first-name" required="required" class="form-control " name="password_lama" value="<?php echo $hasil->password?>">
											

                                        
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Jabatan<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="jabatan" required="required" class="form-control " name="jabatan" value="<?php echo $hasil->jabatan?>" readonly>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												
												<button type="submit" class="btn btn-success">Submit</button>
												<button type="button" id="ubah"class="btn btn-primary">Ubah</button>
												<button type="reset" id="ubah"class="btn btn-danger">Batal</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

			

				

					


					
				</div>
			</div>
			<!-- /page content -->
			

		