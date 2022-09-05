<?php
//llamar la conexion de la base de datos y el verificador de inicio de sesion.
include ("verificar_inicio.php");
include("conexion.php");

//se crea la variable a guardar lo ingresado en el input de busqueda
$busqueda = strtolower($_REQUEST['palabra']);

//Creacion de la variable que va a obtener la consulta
$sql=("SELECT * FROM inventario WHERE
                            id_producto LIKE '%$busqueda%' OR
                            nombre_producto LIKE '%$busqueda%' OR
                            cantidad LIKE '%$busqueda%' OR
                            tipo LIKE '%$busqueda%' ");

//Ejecucion de la busqueda
$query=mysqli_query($conexion, $sql);
?>

<!DOCTYPE php>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,-25" />
    <link rel="shortcut icon" href="/imgs/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<header>
  <br>
      <!-- NAVS -->
    <nav class="navbar navbar-expand-sm  navbar-dark nav">

    <!-- LOGO -->
    <a class="navbar-brand">
      <img src="imgs/logo.jpeg" alt="logo">
    </a>

    <ul class="navbar-nav">
      <!--INVENTARIO-->
      <li class="nav-item ">
        <a class="nav-link text-light" href="mod_inventario.php">Inventario </a>
      </li>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="reg_venta.php">Registrar Venta </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="usuarios.php">Usuarios </a>
      </li>
    </ul>
    <a class="main-logo" href="https://progradudi.netlify.app">
  </a>

    <!-- Cerrar Sesión & Ayuda -->
    <div class="card-body d-flex justify-content-between align-items-center">
      <div>
        <ul class="nav nav-pills " >
            <li class="nav-item">
            <a class="nav-link ayuda" href="ayuda.php">Ayuda</a>
            </li>
        </ul>
    </div>
		<a href="cerrar_sesion.php" class="Cerrar_sesion btn nav-link active border">Cerrar Sesión</a>
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

  <!----- BUSCADOR ------>
<div class="buscador">
    <form action="buscar_producto.php" method="POST" >
    <input type="text" class="buscador_input" name="palabra" placeholder="Buscar..." value="<?php echo $busqueda; ?>">
    <input type="submit" class="buscador_enviar"  name="buscar" value="Buscar"></input>
    </form>
</div>

<body>
<table class="table mt-0 ml-1">
    <thead>
      <tr class="titulo_inventario">
        <th>ID_USUARIO</th>
        <th>NOMBRE_USUARIO</th>
        <th>CANTIDAD</th>
        <th>TIPO_PRODUCTO</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <!-- Bucle para llamar los datos de la base de datos -->
    <?php while($row=mysqli_fetch_array($query)){ ?>
    <tr class="table-success">
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
<script src="js/cancelar_formulario.js"></script>
</body>
</html>