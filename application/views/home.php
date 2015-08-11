<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LONG-TRY</title>
<!-- Bootstrap -->
<link href="<?php echo base_url();?>asset/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>asset/css/longtry.css" rel="stylesheet" type="text/css" />
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="<?php echo base_url();?>asset/js/assets/html5shiv.js"></script>
  <script src="<?php echo base_url();?>asset/js/assets/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="mobile-longtry-area visible-xs">
  <div class="container">
    <div class="row">
      <div class="mobile-longtry-logo-area">
        <div class="logo-head-area"> <span class="line-head-logoleft hidden-xs"></span>
          <div class="logo-head-longtry"><a href="www.long-try.com"><span class="head-longtry">ลองถ่าย</span></a></div>
          <span class="line-head-logoright hidden-xs"></span> </div>
      </div>
      <div class="navbar-header">
        <button data-target=".longtry-mobile-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><img src="<?php echo base_url();?>asset/images/menu-down.png"/> </button>
      </div>
      <ul class="nav collapse longtry-mobile-collapse">
        <li><a href="#">CONGRATULATIONS</a></li>
        <li><a href="#">PORTRAIT</a></li>
        <li><a href="#">STUDIO</a></li>
        <li><a href="#">EVENT</a></li>
        <li><a href="#">VIDEO</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="longtry-nav-area hidden-xs">
  <div class="container">
    <div class="longtry-logo-area">
      <div class="logo-head-wrapper">
        <div class="logo-head-area"> <span class="line-head-logoleft hidden-xs" ></span>
          <div class="logo-head-longtry"><a href="www.long-try.com"><span class="head-longtry">ลองถ่าย</span></a><p>www.long-try.com</p></div>
          <span class="line-head-logoright hidden-xs"></span> </div>
      </div>
    </div>
    <div class="navbar-header">
      <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><img src="<?php echo base_url();?>asset/images/menu-down.png"/> </button>
    </div>
    <ul class="nav collapse navbar-collapse">
      <li><a href="#">CONGRATULATIONS</a></li>
      <li><a href="#">PORTRAIT</a></li>
      <li ><a href="#" class="active">STUDIO</a></li>
      <li><a href="#">EVENT</a></li>
      <li><a href="#">VIDEO</a></li>
      <li><a href="#">CONTACT</a></li>
    </ul>
  </div>
</div>
<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
  <div class="carousel-area"> <a class="prev carousel-control" href="#myCarousel" data-slide="prev"><img src="<?php echo base_url();?>asset/images/arrow-prou.png" /></a> <a class="next carousel-control" href="#myCarousel" data-slide="next"><img src="<?php echo base_url();?>asset/images/arrow-next.png" /></a> </div>
  <!-- Wrapper for slides -->
  <ul class="carousel-inner">
    <li class="item active">
      <div class="title-hilight">
        <p>WEDING</p>
        <a href="#" class="view-more-hilight">VIEW</a> </div>
      <span class="fill"><img src="<?php echo base_url();?>asset/images/hilight-01.jpg"/></span> </li>
    <li class="item">
      <div class="title-hilight">
        <p>STUDiO</p>
        <a href="#" class="view-more-hilight">VIEW</a> </div>
      <span class="fill"><img src="<?php echo base_url();?>asset/images/hilight-02.jpg"/></span> </li>
    <li class="item">
      <div class="title-hilight">
        <p>EVENT</p>
        <a href="#" class="view-more-hilight">VIEW</a> </div>
      <span class="fill"><img src="<?php echo base_url();?>asset/images/hilight-01.jpg"/></span> </li>
    <li class="item">
      <div class="title-hilight">
        <p>CONGRATULATIONS</p>
        <a href="#" class="view-more-hilight">VIEW</a> </div>
      <span class="fill"><img src="<?php echo base_url();?>asset/images/hilight-02.jpg"/></span> </li>
  </ul>
</header>
<div class="content-area">
  <div class="container">
    <div class="row">
        <div class="title-longtry">
          <h1>CREATIVE PHOTOGRAPHERS</h1>
          <span class="line-head"></span> </div>
    
      <div class="thump-longtry-area">
        <ul class="thump-longtry">
          <?php foreach($album_list as $album) : ?>
            <li><span class="title-cat"><?php echo $album['album_name'];?></span> <a href="<?php echo base_url();?>album/<?php echo $album['album_id'];?>"> <img src="<?php echo base_url();?>upload/album_cover/<?php echo $album['album_id'];?>.jpg" /> </a> </li>          
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<div class="footer-area">
  <div class="container">
    <div class="row">
      <div class="logo-footer"><a href="#"><img src="<?php echo base_url();?>asset/images/logo-longtry.png"/></a>
        <p>www.long-try.com</p>
      </div>
      <div class="footer-contact">E-mail : amikona@hotmail.com   l   Mobile : 0968641669   l   ID Line : iBallZa</div>
    
    </div>
  </div>
</div>
  <p class="copy-right">Copyright 2015 Long-Try Studio. All rights reserved.</p>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>asset/js/fluid.thumbs.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url();?>asset/js/bootstrap.min_2014.js"></script>
</body>
</html>
