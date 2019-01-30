<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width,initial-scale=1">-----!untuk ukuran di berbagai device!-----
    <title><?= $judul;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/toko.css">
    <script type="text/javascript" src="<?php echo base_url()?>asset/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>asset/js/bootstrap.js"></script>   
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container-fluid">
       <div class="navbar-header">
          <a class="navbar-brand" href="#"><b>SKECHERS </b></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li class="active"><a href="<?= base_url()?>index.php/Admin/index">HOME</a></li>
          
        <li><a href="<?= base_url()?>index.php/Admin/profil">PROFIL</a></li>

        <li><a href="<?= base_url()?>index.php/Admin/saran">SARAN</a></li> 
        
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <li><form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="input" placeholder=" Cari produk dan barang">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </li>
      <?php if ($this->session->userdata('login')==TRUE){ ?>
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img style="width: 20px; height: 20px;" src="<?= base_url()?>asset/gambar/icon.png" class="user-image" alt="User Image">
              <span><?= $this->session->userdata('nama')?></span>
            </a>
          </li>
          <li>
            <a href="<?=base_url('index.php/User/logout')?>">Logout</a>
          </li>
           
        <?php }
        else{?>
        <li><a href="<?= base_url()?>index.php/User/index">Sign Up</a></li>
        <li><a href="<?= base_url()?>index.php/User/login">Login</a></li>
        <?php } ?>
    </ul>
    
    </div>
  </div>
</nav>       


<div class="container">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url()?>asset/gambar/judul%201.png" alt="...">
      <div class="carousel-caption">
          <h2>SKECHERS GO FLEX WALK </h2>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url()?>asset/gambar/judul%202.png" alt="...">
      <div class="carousel-caption">
        <h2> SKECHERS GO WALK</h2>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url()?>asset/gambar/judul%203.png" alt="...">
      <div class="carousel-caption">
        <h2> FLEX APPEAL 2.0 - HIGH ENERGY</h2>
      </div>
      </div>
      <div class="item">
      <img src="<?php echo base_url()?>asset/gambar/judul%204.png" alt="...">
      <div class="carousel-caption">
        <h2>SKECHERS STREET LOS ANGELES</h2>
      </div>
  </div>
</div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
</div>
        <div class="container jarak-atas">
            <div class="row">
            <div class="col-md-3">
               <div class="panel panel-success">
                <div class="panel-heading">
                      <h3 class="panel-title"><b>Kategori</b></h3>
                  </div>
                <ul class="list-group">
                  <li class="list-group-item">
                    <a>Casual</a><span class="badge">95</span>
                  </li>
                  <li class="list-group-item active">
                      <a class="kat">Runing</a><span class="badge">94</span>
                  </li>
                  <li class="list-group-item">
                    <a >Sporty</a><span class="badge">164</span>
                  </li>
                  <li class="list-group-item">
                    <a>Kids </a><span class="badge">34</span>
                  </li>
                  <li class="list-group-item">
                    <a>Boots</a><span class="badge">64</span>
                        
                  </li>
                  <li class="list-group-item">
                    <a>Flat</a><span class="badge">74</span>
                        
                  </li>
                </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-warning">
                  <div class="panel-heading">
                      <h3 class="panel-title"><?= $judul;?></b></h3>
                  </div>
                <div class="panel-body">
                   
                    <?php
                    $this->load->view($konten);
                    ?>

                   
                    
              </div>
                </div>
            </div>
            </div>
        </div>
          <div class="row">
          <div class="col-md-1"></div>
           <div class="col-md-10 promo">
                    <img src="<?php echo base_url()?>asset/gambar/sale.jpg" width="1150" height="200" >
                    
            </div>
            </div>
    <b><hr  size="12px" color="lightpink"></b>
           <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-danger">
                  <div class="panel-heading">
<ul class="pager">
 <li><h3 class="panel-title big"><b>BIG SALE</b></h3></li>
  <li class="next"><a href="#">See All &rarr;</a></li>
</ul>
                  </div>
                  <div class="panel-body">
                   <div class="inisale">
                    <img src="<?php echo base_url()?>asset/gambar/bigsale.png" height="400px" width="300px" alt="...">
                    <div class="col-md-8">
                    
<?php 
foreach($sepatu as $sep){
?>
<div class="col-sm-5 col-md-4 disc">
    <div class="thumbnail 1">
      <img src="<?php echo base_url()?>asset/gambar/<?= $sep->gambar?>" alt="...">
      <div class="caption">
        <h3><?= $sep->barang?></h3>
        <p class="normal"><?= $sep->h_awal?></p>
        <p class="harga"><?= $sep->h_akhir?></p>
        <p class="button"><a href="#" class="btn btn-primary" role="button">Buy</a> <a href="<?= base_url()?>index.php/Admin/detil/<?= $sep->nmr_barang?>" class="btn btn-default" role="button">Details</a></p>
      </div>
    </div>
  </div>

<?php }?>

</div>
</div>
                    
                       </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="row">
              <div class="col-md-12 top"></div>
            </div>

<footer class="footer">
    <div class="container">
        <div class="row">
         <hr class="gariss">
        <div class="col-sm-4">
            <h4 class="title"></h4>
            <p></p>
            <p></p>
            <ul class="payment">
            <li><a href="#"><img src="<?php echo base_url()?>asset/gambar/logo.png" width="150px" height="150px"></a></li>           
            </ul>
</div>
        <div class="col-sm-4">
            <h4 class="title">About Us</h4>
            <span class="acount-icon">          
            <small><a href="#">Corporate Info</a></small>
            <small><a href="#">Career</a></small>
            <small><a href="#">Affiliate Info</a></small>
            <small><a href="#">Retail Licensing</a></small>
            <small><a href="#">Commercial</a></small>          
            </span>
            </div>

<div class="col-sm-4">
            <h4 class="title">Payment Methods</h4>
            <p></p>
            <ul class="payment">
            <li><a href="#"><img src="<?php echo base_url()?>asset/gambar/visa.jpg" width="100px" height="100px;"></a></li>
            <li><a href="#"><img src="<?php echo base_url()?>asset/gambar/kartu.png" width="100px" height="100px;"></a></li>            
            <li><a href="#"><i class="fa fa-paypal" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
            </ul>
</div>
        
        </div>
        <hr class="gariss">
    
 <div class="row text-center copy"> © 2017. Skechers.com</div>
<div class="btn-group btn-group-md bahasa">
  <button type="button" class="btn btn-danger">English</button>
  <button type="button" class="btn btn-default">Indonesia</button>
  <div></div>
</div>
       
        
        </div>
        </footer>
</body>
</html>