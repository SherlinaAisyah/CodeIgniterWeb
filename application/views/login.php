<!DOCTYPE html>
<html>
    <head>
       <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/login.css">
    <script type="text/javascript" src="<?php echo base_url()?>asset/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>asset/js/bootstrap.js"></script>
    </head>
    <body>
<div class="col-md-4 jarakatas col-md-offset-4">
<div class="panel panel-danger">
  <div class="panel-heading">
    <img class="judul" src="<?php echo base_url()?>asset/gambar/inilogo.png">
  </div>
  <div class="panel-body formisi">
      <div>
        <img class="gambar" src="<?php echo base_url()?>asset/gambar/icon.png">
      </div>
      <script type="text/javascript">
      <?php
      if($this->session->flashdata('pesan')!=null){
      echo "<div class='alert alert-danger'>".$this->session->flashdata('pesan')."</div>";}?>
      </script>
       <br>
       <form method="post" action="<?= base_url()?>index.php/User/proses_login">
       <div class="input-group">
              <span class="input-group-addon">
              
              <span class="glyphicon glyphicon-user"></span>
              
              </span>
              <input type="text" class="form-control" name="username" placeholder="Username">
              
        </div>

       <br>       
        <div class="input-group">
              <span class="input-group-addon">
              
              <span class="glyphicon glyphicon-lock"></span>
              
              </span>
              <input type="password" name="password" class="form-control" placeholder="Pasword">
              
        </div>
          <div class="checkbox">
           <div class="col-md-6">
            <label>
                <input class="left" id="login-remember" type="checkbox" name="remember" value="1"> Remember me </label></div>
            <div class="col-md-6">
             <a class="sgup">Forget Password?</a> 
            </div> 
            </div>
            <br> 
            <br>                  
<div class="btn-group btn-group-justified">
  <div class="btn-group">
      <input type="submit" name="login" value="SIGN IN" class="btn btn-warning">
  </div>
  </div>
          <br>
          <div >
             <div class="col-md-5"><hr size="50px" color="pink"></div>
             <div class="col-md-2">atau</div>
             <div class="col-md-5"><hr size="50px" color="pink"></div>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-8">
           <div class="btn-group btn-group-justified">
  <div class="btn-group">
      <input type="submit" name="daftar" value="SIGN UP" class="btn btn-success">
  </div>
  </div>
         <div class="col-md-2"></div>
          </div>
    </div>
            
</div>     
        </div>
        </form>
    </body>
</html>