<?php
include ("verificar_inicio.php");
include("conexion.php");

$empezar_desde = 0;
$tamaño_paginas = 3; 
$productos = "SELECT * FROM inventario LIMIT $empezar_desde,$tamaño_paginas";

$resultado = mysqli_query($conexion, $productos);

$total_paginas = 3;
?>

<!DOCTYPE php>
<html lang="en">
<head>
    <title>Inventario</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="imgs/arepazo_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
          <a class="nav-link active" aria-current="page" href="mod_inventario.php"> <span class="material-symbols-outlined">inventory_2</span>Inventario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reg_venta.php"><span class="material-symbols-outlined">point_of_sale</span>Registrar Venta </a>
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


  <!-- AGREGAR - MODAL -->

  <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#myModal">
    AÑADIR
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title bg-dark text-white">Agregar Producto</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

<form method="post" action="conexion_inventario.php" id="formularios_modal">

      <div class="modal-body">

        <div class="form-group">
          <label for="txt">Nombre del producto:</label>
          <input type="text" class="form-control" id="txt" name="nombre_producto">
        </div>
        <div class="form-group">
          <label for="txt">Cantidad</label>
          <input type="text" class="form-control" id="txt" name="cantidad">
        </div>

        <div class="form-group">
          <label for="txt">Tipo</label>
          <input type="text" class="form-control" id="txt" name="tipo">
        </div>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" data-bs-dismiss="modal" name="registrar_producto" onclick="">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="resetear()">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</form>

  <!-- AGREGAR - BUSCADOR -->
  <div class="buscador">
    <form action="buscar_producto.php" method="POST" onsubmit="return validarForm(this)">
    <input type="text" class="buscador_input" name="palabra" placeholder="Buscar...">
    <input type="submit" class="buscador_enviar"  name="buscar" value="Buscar"></input>
    </form>
</div>

<body>
<div class="tabla table-responsive">
<table class="table table-hover">
    <thead>
      <tr class="titulo_inventario">
        <th>ID_PRODUCTO</th>
        <th>NOMBRE_PRODUCTO</th>
        <th>CANTIDAD</th>
        <th>TIPO_PRODUCTO</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
      <?php 
      while($row=mysqli_fetch_assoc($resultado)){ ?>
    <tr class="contenido_inventario">
      <td><?php echo $row["id_producto"] ?></td>
      <td><?php echo $row["nombre_producto"] ?></td>
      <td><?php echo $row["cantidad"]?></td>
      <td><?php echo $row["tipo"] ?></td>
      <td><a href="borrar_producto.php?id_producto=<?php echo $row['id_producto'];?>" class="material-icons borrar" onclick="return confirm('¿Estás seguro que deseas eliminar este producto?');">delete
      <a href="modal_editar.php?id_producto=<?php echo $row['id_producto'];?>" data-bs-toggle="modal" class="material-icons editar" data-bs-target="#Editar<?php echo $row['id_producto'];?>">edit</td>
    </tr>
    <?php include("modal_editar.php");?>
<?php } ?>

</table>
<?php 
for ($i=1; $i<=$total_paginas; $i++){
  echo "<a href='?pagina=" . $i . "'>" . $i . "</a> "; 
}

?>
</div>
<script src="js/verificar_busqueda.js"></script>
<script src="js/cancelar_formulario.js"></script>

</body>
</html>