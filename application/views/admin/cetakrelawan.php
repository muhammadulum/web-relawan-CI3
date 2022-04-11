<html>
	<head>
		<style>
			table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			td, th {
			  border: 1px solid #000000;
			  text-align: center;
			  height: 20px;
			  margin: 8px;
			}

		</style>
	</head>
	<body>
    <center>
        <img src="<?php echo base_url('assets/');?>images/logo1.png" alt="" style="width: 200px;">
		</center>
		<div style="text-align: center; font-size:34px; color:'#dddddd'"><i>Laporan Relawan RK Tajam</i></div>
      
	
		<hr>
		<p></p>
		<table cellpadding="6" >
			<tr>
            <th>Nama</th>
                          <th>Alamat</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Masuk</th>
                          <th>No Hp</th>
                          <th>Email</th>
                          <th>Asal Sekolah</th>
                          <th>Angkatan</th>
                          <th>Status</th>
                         
			</tr>
            <?php foreach ($relawan as $rlwn): ?>
                        <tr>
                          <td><?php echo $rlwn->nama_orang ?></td>
                          <td><?php echo $rlwn->alamat ?></td>
                          <td><?php echo $rlwn->tanggal_lahir ?></td>
                          <td><?php echo $rlwn->jenis_kelamin ?></td>
                          <td><?php echo $rlwn->tanggal_masuk ?></td>
                          <td><?php echo $rlwn->no_hp ?></td>
                          <td><?php echo $rlwn->email ?></td>
                         
                          <td><?php echo $rlwn->asal_sekolah ?></td>
                          <td><?php echo $rlwn->angkatan ?></td>
                         
                          <td><?php echo $rlwn->status?></td>
                          
                        </tr>
                        <?php endforeach;?>
		</table>
        <hr>
        <div style="text-align: center; font-size:20px; color:'#dddddd'"><i>Total Jumlah Relawan :<?php echo $total?> </i></div>
        
        <hr>
	</body>
  <script type="text/javascript">
  window.print();
</script>
</html>