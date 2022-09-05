<?php
include ("verificar_inicio.php");
include("conexion.php");
$id = $conexion->query("SELECT * FROM usuario");
$id_final = mysqli_fetch_array($id);
$resultado = $conexion->query("SELECT * FROM registro_ventas"); 
$resultado1 = $conexion->query("SELECT MAX(precio) AS PrecioMaximo FROM registro_ventas");
?>

<!DOCTYPE php>
<html lang="en">
<head>
    <title>Registrar Venta</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imgs/arepazo_logo.png" type="image/x-icon">
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
            <a class="nav-link active" href="reg_venta.php"><span class="material-symbols-outlined">point_of_sale</span>Registrar Venta </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usuarios.php"> <span class="material-symbols-outlined">group</span>Usuarios</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="ayuda.php"> <span class="material-symbols-outlined">info</span>Ayuda</a>
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
  <form action="conexion_venta.php" method="post" class="needs-validation mt-5 " novalidate>
    <div class="form-group">
      <label for="uname">ID_Vendedor</label>
      <input type="number" class="form-control venta" id="uname" placeholder="ID_VENDEDOR..." name="vendedor" value="<?php $id_final["id_usuario"]?>">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
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