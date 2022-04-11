

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Halaman Flora Fauna</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
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
									<h2>Form FLora Fauna</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<!-- <li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li> -->
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
                                    
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('admin/flora/fungsiedit') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_flora_fauna" value="<?php echo $floradanfauna->id_flora_fauna?>" />
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" class="form-control " name="nama" value="<?php echo $floradanfauna->nama?>">
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Latin<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" class="form-control " name="nama_latin" value="<?php echo $floradanfauna->nama_latin?>">
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Foto
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" id="first-name"  class="form-control " name="foto">
                                                <input type="hidden" id="first-name"  class="form-control " name="old_image" value="<?php echo $floradanfauna->foto?>">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Deskripsi<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea type="text" id="first-name" required="required" class="form-control " name="deskripsi" value="<?php echo $floradanfauna->deskripsi?>"></textarea>
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">status<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" class="form-control " name="status" value="<?php echo $floradanfauna->status?>">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">jenis<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" class="form-control " name="jenis" value="<?php echo $floradanfauna->jenis?>">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ancaman<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea type="text" id="first-name" required="required" class="form-control " name="ancaman" value="<?php echo $floradanfauna->ancaman?>"></textarea>
											</div>
										</div>

										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												
												<button type="submit" class="btn btn-success">Submit</button>
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

		