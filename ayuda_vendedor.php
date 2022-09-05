<?php
include ("verificar_inicio.php");
include("conexion.php");
?>

<!DOCTYPE php>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" href="/imgs/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" class="icono" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link rel="stylesheet" class="icono" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link rel="stylesheet" class="icono" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<header>
  <br>
    <nav class="navbar navbar-expand-sm  navbar-dark nav">

    <!-- LOGO -->
    <a class="navbar-brand">
      <img src="imgs/logo.jpeg" alt="logo">
    </a>

    <!-- NAVS -->
    <ul class="navbar-nav">
  
      <!--INVENTARIO-->
      <li class="nav-item ">
        <a class="nav-link" href="mod_inventario_vendedor.php">Inventario </a>
      </li>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="reg_venta_vendedor.php">Registrar Venta </a>
      </li>
    </ul>
    <a class="main-logo" href="https://progradudi.netlify.app">
  </a>

    <!-- Cerrar Sesión & Ayuda -->
    <div class="card-body d-flex justify-content-between align-items-center">
      <div>
        <ul class="nav nav-pills " >
            <li class="nav-item">
            <a class="nav-link ayuda" href="ayuda_vendedor.php">Ayuda</a>
            </li>
        </ul>
    </div>
		<a href="cerrar_sesion.php" class="Cerrar_sesion btn nav-link active border">Cerrar Sesión</a>
	</div>
  </nav>
</header>

<body>
<h1 class="entrada">Bienvenido</h1>

<section class="catalogo">
  <div class="div_catalogo">
    <img class="catalogo_img" src="imgs/arepa1.jpg" alt="">
    <img class="catalogo_img" src="imgs/arepa2.jpg" alt="">
    <img class="catalogo_img" src="imgs/arepa3.jpg" alt="">
    <img class="catalogo_img" src="imgs/arepa4.jpg" alt="">
    <img class="catalogo_img" src="imgs/arepa5.jpg" alt="">
  </div>
</section>
</body>

<footer class="contenidoayuda">
<div class="iconcenter">
<section class="ayuda1">
<span class="material-symbols-outlined">
inventory</span>
<i class="tituicono">Inventario</i>
<p class="parrafoayuda">Esta parte de nuestra pagina te ayudara a añadir productos a el inventario con solo darle click en añadir que se encuentra en la parte superior izquierda rellenando todos los campos (Nombre del producto, cantidad, tipo).</p>
</section>
</div>
<div  class="iconcenter">
<section class="ayuda2">
<span class="material-symbols-outlined">
point_of_sale
</span>
<i class="tituicono">Registrar Venta</i>
<p class="parrafoayuda">En la parte de registrar ventas puedes realizar el registro de los que vas a vender solo ingresando los datos pedidos y asi el sistema te generara el cobro de lo que ingresaste</p>
</section>
</div>
</footer>
</html>