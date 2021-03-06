<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Astrokosmos</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <script type="text/javascript">
    document.addEventListener( "DOMContentLoaded", function(){
      var btnMenu = document.getElementById('btnMenu');
      var navbarMenu = document.getElementById('navbarMenu');

      btnMenu.addEventListener('click', onClickMenu);

      function onClickMenu() {
          navbarMenu.classList.toggle('header-menu-list--show');
      }
    });
  </script>
</head>
<body>

<header class="header">
  <div class="row middle-sm">
    <div class="col-xs-9 col-sm-6">
      <h1 id="title" class="header-logo">Astrokosmos</h1>
      <p class="header-slogan">Diseño, tecnología y observación</p>
    </div>
    <div class="header-number col-sm-offset-2 col-sm-4">
        <i class="header-number--green fa fa-whatsapp"></i> +521 222 516 0533
    </div>
    <button id="btnMenu" class="header-btn-nav col-xs-3"><i class="fa fa-bars"></i></button>
  </div>
  <nav class="header-menu-navbar">
    <ul id="navbarMenu" class="header-menu-list">
      <li class="header-menu-list-item"><a href="#home">Inicio</a></li>
      <li class="header-menu-list-item"><a href="#about">Productos</a></li>
      <li class="header-menu-list-item"> <a href="#portfolio">Acerca de</a></li>
      <li class="header-menu-list-item"><a href="#contact">Contacto</a></li>
    </ul>
  </nav>
</header>
