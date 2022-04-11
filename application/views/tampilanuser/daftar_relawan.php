 <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        <?= $this->session->flashdata('message'); ?>
          <h1>Ayo Jadi Relawan !</h1>
          <h2>Buktikan jiwa muda mu menjadi relawan di RK TAJAM</h2>
          <h5>Siapkan diri anda utuk menjadi bagian dari perjuangan lini konservasi. Kami mempersiapkan generasi hijau untuk Indonesia yang lebih baik!</h5>

          <a href="" class="btn-get-button" data-toggle="modal" data-target="#myModal">Daftarkan diri anda disini!</a>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?php echo base_url('assets/');?>/user/assets/img/orangutan.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Daftarkan diri anda disini!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('Home/fungsitambah') ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
     <label for="exampleInputEmail1">Nama Lengkap</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" name="nama" required>
  </div>
   <div class="form-group">
     <label for="exampleInputEmail1">Alamat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" name="alamat" required>
  </div>
   <div class="form-group">
     <label for="exampleInputEmail1">Tanggal Lahir</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
  </div>
     <!-- <div class="form-group">
       <label for="exampleInputEmail1">Jenis Kelamin</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Kelamin" name="jenis_kelamin" required>
  </div> -->

  <div class="form-group">
    <label for="sel1">Jenis Kelamin:</label>
    <select class="form-control" id="pilihJurusan" name="jenis_kelamin">
    	<option>-</option>
      <option>Laki-Laki</option>
      <option>Perempuan</option>
    </select>
  </div>
 

     <div class="form-group">
       <label for="exampleInputEmail1">Asal Instansi</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Asal Sekolah" name="asal_sekolah" required>
  </div>
     <div class="form-group">
       <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" required>
  </div>
     <div class="form-group">
       <label for="exampleInputEmail1">No Hp</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Hp" name="no_hp" required>
  </div>
   <div class="form-group">
     <label for="exampleInputEmail1">Motivasi</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Motivasi" name="motivasi" required>
  </div>
 <div class="form-group">
   <label for="exampleInputEmail1">Foto</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Foto" name="foto">
  </div>

  <!-- <div class="form-group">
     <label for="exampleInputEmail1">Tanggal Masuk</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tanggal_masuk" name="tanggal_masuk" required>
  </div>
  <div class="form-group">
     <label for="exampleInputEmail1">Angkatan</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Angkatan" name="angkatan" required>
  </div>
  <div class="form-group">
     <label for="exampleInputEmail1">Status</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status" name="status" required>
  </div> -->
  <button type="submit" class="btn btn-success">Kirim</button>
</form>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>
  <main id="main">
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          
          <p>Kontak Kami</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <?php foreach ($data as $hs): ?>
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Alamat:</h4>
                <p><?php echo $hs->nama_alamat ?></p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo $hs->email ?></p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>No Whatsapp:</h4>
                <p><?php echo $hs->no_wa ?></p>
              </div>

              <iframe src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fyayasanpalung.com%2Ftajam%2F&psig=AOvVaw0pBQ5uzmbPu8rWvOkIGEzY&ust=1630437098408000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCIiZ0dK52fICFQAAAAAdAAAAABAD" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
                <?php endforeach;?>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="<?php echo base_url('home/kontak');?>" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Nama Lengkap</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Pesan</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
  </main><!-- End #main -->

 