<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Astrokosmos</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />
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
  <div class="">
    <h1 class="header-logo col-xs-12 col-sm-4">Astrokosmos</h1>
    <p class="col-xs-10 col-sm-6">Diseño, tecnología y observación</p>
    <button id="btnMenu" class="header-btn-nav col-xs-2"><i class="fa fa-bars"></i></button>
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
