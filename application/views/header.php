
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FEDEX</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/plantilla/assets/img/favicon.ico">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <!-- Importacion de boostrap V5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <!--importar api key googlemaps -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy8dm0BIYaplqYBXAmclsFJpXVawXhElc&libraries=places&callback=initMap"> </script>
        		<!-- CSS here -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>/plantilla/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo base_url(); ?>/plantilla/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="<?php echo base_url(); ?>/plantilla/assets/css/flaticon.css">
            <link rel="stylesheet" href="<?php echo base_url(); ?>/plantilla/assets/css/slicknav.css">
            <link rel="stylesheet" href="<?php echo base_url(); ?>/plantilla/assets/css/animate.min.css">
            <link rel="stylesheet" href="<?php echo base_url(); ?>/plantilla/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="<?php echo base_url(); ?>/plantilla/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?php echo base_url(); ?>/plantilla/assets/css/themify-icons.css">
            <link rel="stylesheet" href="<?php echo base_url(); ?>/plantilla/assets/css/slick.css">
            <link rel="stylesheet" href="<?php echo base_url(); ?>/plantilla/assets/css/nice-select.css">
            <link rel="stylesheet" href="<?php echo base_url(); ?>/plantilla/assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url(); ?>/plantilla/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="header-info-left">
                                <ul>
                                    <li>needhelp@fedex.com</li>
                                    <li>09-84-68-24-69</li>
                                    <li> Little Rock, Arkansas, Estados Unidos</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-info-right f-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                   <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                  <a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>/plantilla/assets/img/logo/logo2.png" alt="" style="height:70px; with:70px"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="<?php echo site_url(); ?>">Inicio</a></li>
                                            <li><a href="#">Sucursales</a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo site_url();?>/sucursales/nuevo">Ingresar sucursal</a></li>
                                                    <li><a href="<?php echo site_url();?>/sucursales/index">Listar registros</a></li>
                                                    <li><a href="<?php echo site_url();?>/sucursales/sucursal">Ubicacion</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Clientes</a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo site_url();?>/clientes/nuevo">Ingresar Cliente</a></li>
                                                    <li><a href="<?php echo site_url();?>/clientes/index">listar Clientes</a></li>
                                                    <li><a href="<?php echo site_url();?>/clientes/cliente">Ubicacion</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Productos</a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo site_url();?>/productos/nuevo">Ingresar Producto</a></li>
                                                    <li><a href="<?php echo site_url();?>/productos/index">listar Productos</a></li>
                                                    <li><a href="<?php echo site_url();?>/productos/producto">Ubicacion</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo site_url();?>/generales/general">Ruta</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
