<?php
include ("verificar_inicio.php");
include("conexion.php");
$resultado = $conexion->query("SELECT * FROM registro_ventas"); 
$resultado1 = $conexion->query("SELECT MAX(precio) AS PrecioMaximo FROM registro_ventas");
?>

<!DOCTYPE php>
<html lang="en">
<head>
    <title>Registrar Venta</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="/imgs/logo.jpeg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
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
            <a class="nav-link" aria-current="page" href="mod_inventario_vendedor.php"> <span class="material-symbols-outlined">inventory_2</span>Inventario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="reg_venta_vendedor.php"><span class="material-symbols-outlined">point_of_sale</span>Registrar Venta </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="ayuda_vendedor.php"> <span class="material-symbols-outlined">info</span>Ayuda</a>
          </li>
          <li class="nav-item">
          <a href="cerrar_sesion.php" class="nav-link cerrar_sesion"><span class="material-symbols-outlined">logout</span>Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


<body>
  <div class="container">
  <form action="conexion_venta_vendedor.php" method="post" class="needs-validation mt-5 " novalidate>
    <div class="form-group">
      <label for="uname">ID_Vendedor</label>
      <input type="number" class="form-control venta" id="uname" placeholder="ID_VENDEDOR..." name="vendedor" required>
    </div>
    <div class="form-group">
      <label for="uname">Producto:</label>
      <input type="text" class="form-control venta" id="uname" placeholder="Nombre del producto..." name="producto" required>
    </div>
    <div class="form-group">
      <label for="uname">Cantidad</label>
      <input type="number" class="form-control venta" id="uname" placeholder="Cantidad de productos..." name="vendedor" required>
    </div>
    <div class="form-group">
      <label for="pwd">Precio:</label>
      <input type="number" class="form-control venta" id="pwd" placeholder="Precio..." name="precio" required>
    </div>
    <input type="submit" class="btn btn-primary enviar_venta" value="Enviar" id="boton_venta" onclick="return confirm('¿Estás seguro de que desea registrar la venta?');"></input>
  </form>
</div>

</body>

<footer class="footer">
  <?php echo "Ventas realizadas: ".$resultado->num_rows;?> <br>
  <p>La venta mayor es: <?php if (mysqli_num_rows($resultado1) > 0) {
	while($rowData = mysqli_fetch_array($resultado1)){

    if($rowData["PrecioMaximo"] != 0){
      echo $rowData["PrecioMaximo"];
    }else{
      echo "0";
    }
  	
	}
}?></p>

<script src="js/sumarventa.js"></script>
</footer>
</html>