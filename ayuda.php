<?php

include ("verificar_inicio.php");
include("conexion.php");
?>

<!DOCTYPE php>
<html lang="en">
<head>
    <title>Ayuda</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="imgs/arepazo_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">
      <img src="imgs/arepazo_logo.png" alt="logo">
    </a>  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="mod_inventario.php"> <span class="material-symbols-outlined">inventory_2</span>Inventario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reg_venta.php"><span class="material-symbols-outlined">point_of_sale</span>Registrar Venta </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuarios.php"> <span class="material-symbols-outlined">group</span>Usuarios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="ayuda.php"> <span class="material-symbols-outlined">info</span>Ayuda</a>
        </li>
        <li class="nav-item">
        <a href="cerrar_sesion.php" class="nav-link cerrar_sesion"><span class="material-symbols-outlined">logout</span>Cerrar Sesión</a>
        </li>
        <li>
          <div class="info_usuario">

          </div>
        </li>
      </ul>
    </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
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
<div  class="iconcenter">
<section class="ayuda3">
<span class="material-symbols-outlined">
group_add
</span>
<i class="tituicono">Usuarios</i>
<p class="parrafoayuda">La ventana de usuarios te servira para agregar personas nuevas, eliminar personas y renovar datos solo ingresando los datos pedidos de la manera correcta asi podras obtener la accesibilidad de los usuarios nuevos.</p>
</section>
</div>
</footer>
</html>
