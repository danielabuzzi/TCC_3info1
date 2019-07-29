<!DOCTYPE html>
<head>
    <title>D.O.A</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <methtml class="wide wow-animation" lang="en">
  <a http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CRoboto:400%7CRubik:100,400,700">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/fonts.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/animate/animate.css">  
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/select2/select2.min.css">  
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/util.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css">
    <script src="<?php echo base_url(); ?>/assets/jquery/dist/jquery.js"></script>
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a href="<?php echo site_url('geral');?>"><img class="brand-logo-light" src="<?php echo base_url('images/'); ?>" alt="" width="207" height="51"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link " href="<?php echo site_url('Geral/quemSomos');?>">Quem somos</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo site_url('Geral/projetos');?>">Projetos</a>
                      </li>
                      <li class="rd-nav-item nav-item dropdown">
                        <a class="rd-nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Doações</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?php echo site_url('Geral/orfanatos');?>">Lista de Doações</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Cadastrar Doações</a>
                        </div>
                      </li>
                      <li class="rd-nav-item nav-item dropdown">
                        <a class="rd-nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Demanda</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?php echo site_url('Geral/asilos');?>">Lista de Demanda</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Cadastrar Demanda</a>
                        </div>
                      </li>

                      <li class="rd-nav-item"><a class="rd-nav-link" href="<?php echo site_url('InstituicoesController/index');?>">Instituições</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

      <section class="parallax-container" data-parallax-img="<?php echo base_url('images/orfanato.jpg');?>">
        <div class="parallax-content breadcrumbs-custom context-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title" style="font-family: Poppins-Regular;">Bem-Vindo</h2>
                <ul class="breadcrumbs-custom-path">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">******</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>


 <?php
include('rodape.php');
?>