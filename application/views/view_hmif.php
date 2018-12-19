<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?></title>
    <meta name="description" content="Spirit8 is a Digital agency one page template built based on bootstrap framework. This template is design by Robert Berki and coded by Jenn Pereira. It is simple, mobile responsive, perfect for portfolio and agency websites. Get this for free exclusively at ThemeForces.com">
    <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
    <meta name="author" content="ThemeForces.com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url()?>img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url()?>img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="<?php echo base_url()?>css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url()?>css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('hmif/admin')?>">HMIF FT-UH</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Beranda</a></li>
            <li><a href="#tf-about" class="page-scroll">Ketua</a></li>
            <li><a href="#tf-team" class="page-scroll">Pengurus</a></li>
            <li><a href="#tf-services" class="page-scroll">Proker</a></li>
            <li><a href="#tf-works" class="page-scroll">Anggota</a></li>
            
            <li><a href="#tf-contact" class="page-scroll">Kontak</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Welcome on <strong><span class="color">HMIF FT-UH</span></strong></h1>
                <p class="lead">Himpunan Mahasiswa <strong>Informatika </strong> Fakultas Teknik Universitas Hasanuddin</p>
                <p><strong>Periode 2018/2019</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo base_url()?>img/07.png" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h4>Himpunan Mahasiswa Informatika FT-UH</h4>
                            <h2>Periode 2018/2019</h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro">Sebagai wadah untk seluruh mahasiswa teknik informatika universitas hasanuddin mengembangkan keterampilan serta kemampuan mengenai ilmu Informatika</p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Mission</strong> - <em>Mengembangkan kemampuan mahasiswa Informatika</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Skills</strong> - <em>Programmer</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Member</strong> - <em>Mahasiswa Teknik Informatika</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Meet <strong>our team</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">
                    <?php    
                        foreach($hmif as $r){ 
                    ?>
                    <div class="item">
                        <div class="thumbnail">
                            <img src="<?php echo base_url()?>img/hmif/<?php echo $r['foto_hmif']?>" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3><?php echo $r['nama_hmif'] ?></h3>
                                <p><?php echo $r['jabatan_hmif'] ?></p>
                                
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Services Section
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2><strong>Program Kerja</strong></h2>
                <div class="line">
                    <hr>
                </div>
                    <div class="space"></div>
            <div class="row">
                <?php    
                        foreach($proker as $r){ 
                    ?>
                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-desktop"></i>
                    <h4><strong><?php echo $r['judul'] ?></strong></h4>
                    <p><?php echo $r['detail'] ?></p>
                </div>
                <?php } ?>

                
            </div>
        </div>
    </div>

    <!-- Clients Section
    ==========================================-->
    <div id="tf-clients" class="text-center">
        <div class="overlay">
            <div class="container">

                <div class="section-title center">
                    <h2>Some of <strong>our Partner</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div id="clients" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="img/client/01.png">
                    </div>
                    <div class="item">
                        <img src="img/client/02.png">
                    </div>
                    <div class="item">
                        <img src="img/client/03.png">
                    </div>
                    <div class="item">
                        <img src="img/client/04.png">
                    </div>
                    <div class="item">
                        <img src="img/client/05.png">
                    </div>
                    <div class="item">
                        <img src="img/client/06.png">
                    </div>
                    <div class="item">
                        <img src="img/client/07.png">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Portfolio Section
    ==========================================-->
    <div id="tf-works">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2><strong>Anggota</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                
            </div>
            <div class="space"></div>

            <div class="categories">
                
                <ul class="cat">
                    <li class="pull-left"><h4>Filter by Type:</h4></li>
                    <li class="pull-right">
                        <ol class="type">
                            <li><a href="#" data-filter=".infokom">Infokom</a></li>
                            <li><a href="#" data-filter=".kesek">Kesek</a></li>
                            <li><a href="#" data-filter=".pendidikan" >Pendidikan</a></li>
                            <li><a href="#" data-filter=".pengmas" >Pengmas</a></li>
                            <li><a href="#" data-filter=".psdm" >PSDM</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">
                <?php    
                        foreach($infokom as $e){ 
                ?>
                <div class="col-sm-6 col-md-3 col-lg-3 infokom">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4><?php echo $e['nama_hmif'] ?></h4>
                                    <small><?php echo $e['nim_hmif'] ?></small>
                                    <div class="clearfix"></div>
                                    
                                </div>
                                <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php    
                        foreach($kesek as $d){ 
                ?>
                <div class="col-sm-6 col-md-3 col-lg-3 kesek">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4><?php echo $d['nama_hmif'] ?></h4>
                                    <small><?php echo $d['nim_hmif'] ?></small>
                                    <div class="clearfix"></div>
                                    
                                </div>
                                <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php    
                        foreach($pendidikan as $c){ 
                ?>
                <div class="col-sm-6 col-md-3 col-lg-3 pendidikan">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4><?php echo $c['nama_hmif'] ?></h4>
                                    <small><?php echo $c['nim_hmif'] ?></small>
                                    <div class="clearfix"></div>
                                    
                                </div>
                                <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php    
                        foreach($pengmas as $b){ 
                ?>
                <div class="col-sm-6 col-md-3 col-lg-3 pengmas">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4><?php echo $b['nama_hmif'] ?></h4>
                                    <small><?php echo $b['nim_hmif'] ?></small>
                                    <div class="clearfix"></div>
                                    
                                </div>
                                <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php    
                        foreach($psdm as $a){ 
                ?>
                <div class="col-sm-6 col-md-3 col-lg-3 psdm">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4><?php echo $a['nama_hmif'] ?></h4>
                                    <small><?php echo $a['nim_hmif'] ?></small>
                                    <div class="clearfix"></div>
                                    
                                </div>
                                <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>

                

            </div>
        </div>
    </div>

    

    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Feel free to <strong>contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                                   
                    </div>

                    <form action="<?php echo site_url('hmif/tambahpesan')?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea name="message" class="form-control" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn tf-btn btn-default">Submit</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2014. Designed by <a href="https://dribbble.com/shots/1817781--FREEBIE-Spirit8-Digital-agency-one-page-template">Robert Berki</a> and Coded by <a href="https://dribbble.com/jennpereira">Jenn Pereira</a></p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>