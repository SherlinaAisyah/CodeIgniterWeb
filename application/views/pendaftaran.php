<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/form.css">
	<script type="text/javascript" src="<?= base_url()?>asset/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="<?= base_url()?>asset/js/bootstrap.js"></script>
	<title> SIGN UP</title>
</head>
<body>
	<div class="col-md-4 col-md-offset-4">
	<div class="panel panel-success">
      <div class="panel-heading">
        <h3 style="text-align: center;" class="panel-title">Create New Acount</h3>
      </div>
      <div class="panel-body">
          <form><?= $this->session->flashdata('pesan');?> </form>
         <form method="post" action="<?= base_url()?>index.php/User/daftar">
          <label>Username </label>
            <input type="text" name="nama_user" class="sherlina" id="userid">
            <label>Password :  </label>
            <input type="password" name="pass" class="sherlina" id="pass">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama" class="sherlina" id="nama" >
            <label>Alamat :</label>
            <textarea rows="5" type="text" name="alamat" class="sherlina" id="alamat"></textarea>
            <label>Nomor Telepon :</label>
            <input type="int" name="telp" class="sherlina" id="tlp" >
            <label>Gender</label>
            <input type="radio" name="gender" value="l">
            <span> L</span>
            <input type="radio" name="gender" value="p">
            <span>P</span>
            <input name="daftar" id="tombol" value="Sign Up" type="submit" >
            </form>

      </div>
    </div>
  </div>
</body>
</html>