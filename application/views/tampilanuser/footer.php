
 <footer id="footer">
<div class="footer-top">
  <div class="container">
    <div class="row">
    <?php foreach ($data as $hs): ?>

      <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
        <h3>Alamat</h3>
        <p>
        <?php echo $hs->nama_alamat ?><br>
          <strong>WA:</strong> <?php echo $hs->no_wa ?><br>
          <strong>Email:</strong> <?php echo $hs->email ?><br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
        <h4>Sosial Media Kami</h4>
        <p>Silahkan Kunjungi sosial media kami untuk info terupdate dari RK Tajam</p>
        <div class="social-links mt-3">
          <a href="https://www.facebook.com/groups/161620813893197/" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/rk_tajam/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href=" https://www.youtube.com/channel/UC-buJnLP16Rhcqg49se_M3A" class="google-plus"><i class="bx bxl-youtube"></i></a>
          <a href="https://www.instagram.com/yayasan_palung/channel/" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
        <h4>Mitra Kami</h4>
        
       
        <img src="<?php echo base_url('assets/');?>/user/assets/img/logo2.png" alt="" style="width: 100px; height: 100px;">
        <img src="<?php echo base_url('assets/');?>/user/assets/img/amki.jpg" alt="" style="width: 100px; height: 100px;">
        </div>
      </div>

    </div>
  </div>
  <?php endforeach;?>
</div>

<div class="container py-4">
  <div class="copyright">
    &copy; Copyright <strong><span>RK Tajam</span></strong>2021
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
    Designed by <a href="https://bootstrapmade.com/">RK-Tajam</a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url('assets/');?>/user/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets/');?>/user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets/');?>/user/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url('assets/');?>/user/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url('assets/');?>/user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url('assets/');?>/user/assets/vendor/venobox/venobox.min.js"></script>
<script src="<?php echo base_url('assets/');?>/user/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url('assets/');?>/user/assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url('assets/');?>/user/assets/js/main.js"></script>

</body>

</html>