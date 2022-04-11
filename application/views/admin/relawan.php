


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Halaman <small>Relawan</small></h3>
                <a type="button" href="<?php echo base_url('admin/relawan/tambahrelawan') ?>" class="btn btn-primary">Tambah Data</a>
                <a type="button" href="<?php echo base_url('admin/relawan/cetakrelawan') ?>" class="btn btn-success">Print Relawan</a>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Relawan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li> -->
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Masuk</th>
                          <th>No Hp</th>
                          <th>Email</th>
                          <th>Motivasi</th>
                          <th>Asal Sekolah</th>
                          <th>Angkatan</th>
                          <th>Foto</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php foreach ($relawan as $rlwn): ?>
                        <tr>
                          <td><?php echo $rlwn->nama_orang ?></td>
                          <td><?php echo $rlwn->alamat ?></td>
                          <td><?php echo $rlwn->tanggal_lahir ?></td>
                          <td><?php echo $rlwn->jenis_kelamin ?></td>
                          <td><?php echo $rlwn->tanggal_masuk ?></td>
                          <td><?php echo $rlwn->no_hp ?></td>
                          <td><?php echo $rlwn->email ?></td>
                          <td><?php echo $rlwn->motivasi ?></td>
                          <td><?php echo $rlwn->asal_sekolah ?></td>
                          <td><?php echo $rlwn->angkatan ?></td>
                          <td>
                          <img src="<?php echo base_url('upload/foto/'.$rlwn->foto) ?>" width="64" />
                          </td>
                          <td><?php echo $rlwn->status?></td>
                          <td>
                            <a href="<?php echo base_url('admin/relawan/editrelawan/'.$rlwn->id_relawan);?>" type="button" class="btn btn-primary">Edit</a>

                            <a onclick="deleteConfirm()"
											 href="<?php echo site_url('admin/relawan/deleterelawan/'.$rlwn->id_relawan) ?>" type="button" class="btn btn-danger"> Hapus</a>

                       
                            
                        
                          </td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                

             

              

            

              
             
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      