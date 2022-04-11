<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>RK Tajam Login</title>

    <!-- Bootstrap core CSS -->
<link href="<?php echo base_url('assets/');?>bootsrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/');?>css/floating-labels.css" rel="stylesheet">
  </head>
  <body >
    <form class="form-signin" method="post" action="<?php echo base_url('auth/login/aksi_login');?>">
  <div class="text-center mb-4">
    <img class="mb-4" src="<?php echo base_url('assets/');?>images/logo1.png"  width="120" height="100">
    <h1 class="h3 mb-3 font-weight-normal">Login Admin</h1>
    <p> Silakan Masukan Username dan Password , Sebelum Masuk Ke dalam Dashboard Admin</p>
    <?= $this->session->flashdata('message'); ?>
  </div>

  <div class="form-label-group">
    <input type="text" id="nama_admin" name="nama_admin" class="form-control" placeholder="Nama Admin" required autofocus>
    <label for="username">Nama Admin</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    <label for="password">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
     <!--  <input type="checkbox" value="remember-me"> Remember me -->
    </label>
  </div>
 <!--  <p>Belum mendaftar? Silahkan klik <a href="<?php echo base_url('auth/login/regist') ?>">daftar disini.</a></p> -->
                </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2021 by. RK Tajam</p>
</form>
<script type="text/javascript">
    function validasi() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;        
        if (username != "" && password!="") {
            return true;
        }else{
            alert('Username dan Password harus di isi !');
            return false;
        }
    }
 
</script>
</body>
</html>
