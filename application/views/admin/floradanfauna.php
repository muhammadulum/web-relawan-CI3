


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Halaman <small>Flora Fauna</small></h3>
                <a type="button" href="<?php echo base_url('admin/flora/tambahfloradanfauna') ?>" class="btn btn-primary">Tambah Data</a>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Flora Fauna</h2>
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
                          <th>Nama latin</th>
                          <th>Foto</th>
                          <th>deskripsi</th>
                          <th>status</th>
                          <th>jenis</th>
                          <th>Ancaman</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php foreach ($floradanfauna as $ff): ?>
                        <tr>
                          <td><?php echo $ff->nama ?></td>
                          <td><?php echo $ff->nama_latin ?></td>
                          <td><img src="<?php echo base_url('upload/foto/'.$ff->foto) ?>" width="64" /></td>
                          <td><?php echo $ff->deskripsi?></td>
                          <td><?php echo $ff->status ?></td>
                          <td><?php echo $ff->ancaman ?></td>
                          <td><?php echo $ff->jenis ?></td>
                          <td>
                            <a href="<?php echo base_url('admin/flora/editfloradanfauna/'.$ff->id_flora_fauna);?>" type="button" class="btn btn-primary">Edit</a>

                            <a onclick="deleteConfirm()"
											 href="<?php echo site_url('admin/flora/deletefloradanfauna/'.$ff->id_flora_fauna); ?>" type="button" class="btn btn-danger"> Hapus</a>

                       
                            
                        
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

      