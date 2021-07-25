<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Siranda Group Tour
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?=base_url();?>assets1/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets1/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <link rel="stylesheet" href="<?=base_url();?>assets1/lbs/sweet2/package/dist/sweetalert2.min.css">
 
  
  <!-- CSS Just for demo purpose, don't include it in your project -->
  


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
  <!--   Core JS Files   -->
  
  
  
</head>


<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          SGT
        </a>
        <a href="#" class="simple-text logo-normal">
          Siranda Group Tour
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="<?php if(isset($dashboard)):?> <?=$dashboard?> <?php endif?>">
            <a href="<?=base_url();?>index.php/Welcome/page">
              <i class="now-ui-icons design_app"></i>
              <p>Viajes</p>
            </a>
          </li>
          <li class="<?php if(isset($paquetes)):?> <?=$paquetes?> <?php endif?>">
            <a href="<?=base_url()?>index.php/Welcome/paquetes">
              <i class="now-ui-icons education_atom"></i>
              Paquetes
            </a>
          </li>
          <li class="<?php if(isset($destino)):?> <?=$destino?> <?php endif?>">
            <a href="<?=base_url();?>index.php/Welcome/destinos">
              <i class="now-ui-icons design_app"></i>
              <p>Destinos</p>
            </a>
          </li>
          <li class="<?php if(isset($cliente)):?> <?=$cliente?> <?php endif?>">
            <a href="<?=base_url();?>index.php/Clientes">
              <i class="now-ui-icons location_map-big"></i>
              <p>Clientes</p>
            </a>
          </li>
          <li class="<?php if(isset($ticket)):?> <?=$ticket?> <?php endif?>">
            <a href="<?=base_url();?>index.php/Ticket">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Tickets</p>
            </a>
          </li>
           <li class="<?php if(isset($transporte)):?> <?=$transporte?> <?php endif?>">
            <a href="<?=base_url();?>index.php/Transporte">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Transportes</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
         
          <li>
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="#">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute" style="background-color: red;">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <h2>Panel de Administracion</h2>
            <br>
            <?php
                if($dat = $this->session->flashdata('msg')):
              ?>

              <div class="conatiner">
                <div class="row">
                    <h5 style="margin-left: 50px;"><?=$dat?></h5>

                </div>
              </div>

              <?php else: ?>

              <?php endif ?>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?=base_url();?>index.php/Welcome/profile">Profile: <?=$this->session->nombre?></a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="<?=base_url();?>index.php/Welcome/logout">Logout</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

            <!-- End Navbar -->
       <div class="panel-header panel-header-sm" style="background-image: radial-gradient(circle at 87.5% 12.5%, #f28035 0, #f28035 50%, #f28035 100%);">
        
        </div>
          <div style="background-color: white;">
          <?php
          $this->load->view($content);  
          ?>

                </div>
            </div>
          </div>
        <script src="<?=base_url();?>assets1/assets/js/evitar.js"></script>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="<?=base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="<?=base_url();?>assets1/lbs/sweet2/package/dist/sweetalert2.min.js"></script>
        <script src="<?=base_url();?>assets1/assets/js/show_user.js"></script>
        <script src="<?=base_url();?>assets1/assets/js/clientes.js"></script>
        <script src="<?=base_url();?>assets1/assets/js/destino.js"></script>
        <script src="<?=base_url();?>assets1/assets/js/transporte.js"></script>
        <script src="<?=base_url();?>assets1/assets/js/ticket.js"></script>
        <script src="<?=base_url();?>assets1/assets/js/core/jquery.min.js"></script>
        <script src="<?=base_url();?>assets1/assets/js/core/popper.min.js"></script>
        <script src="<?=base_url();?>assets1/assets/js/core/bootstrap.min.js"></script>
        <script src="<?=base_url();?>assets1/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="<?=base_url();?>assets1/assets/js/plugins/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="<?=base_url();?>assets1/assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="<?=base_url();?>assets1/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
        <script src="<?=base_url();?>assets1/assets/demo/demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

        


      </body>


</html>