<?php
//llamar la conexion de la base de datos y el verificador de inicio de sesion.
include ("verificar_inicio.php");
include("conexion.php");

//se crea la variable a guardar lo ingresado en el input de busqueda
$busqueda = strtolower($_REQUEST['palabra']);

//Creacion de la variable que va a obtener la consulta
$sql=("SELECT * FROM usuario WHERE
                            id_usuario LIKE '%$busqueda%' OR
                            nombre_usuario LIKE '%$busqueda%' OR
                            telefono LIKE '%$busqueda%' OR
                            correo LIKE '%$busqueda%' OR 
                            tipo_usuario LIKE '%$busqueda%' ");

//Ejecucion de la busqueda
$query=mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/imgs/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,-25" />
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="confirmacion_borrar_usuario.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header>
<br>
   <!-- NAVS -->
    <nav class="navbar navbar-expand  navbar-dark nav" >

    <!-- LOGO -->
    <a class="navbar-brand">
      <img src="imgs/logo.jpeg" alt="logo" >
    </a>

    <ul class="navbar-nav">

      <li class="nav-item ">
        <a class="nav-link " href="mod_inventario.php">Inventario </a>
      </li>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="reg_venta.php">Registrar Venta </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="usuarios.php">Usuarios </a>
      </li>
    </ul>


    <!-- Cerrar Sesión & Ayuda -->
    <div class="card-body d-flex justify-content-between align-items-center">
      <div>
        <ul class="nav nav-pills " >
            <li class="nav-item">
            <a class="nav-link ayuda" href="ayuda.php">Ayuda</a>
            </li>
        </ul>
    </div>
						<a href="cerrar_sesion.php" class="Cerrar_sesion btn nav-link active border">Cerrar Sesión  </a>
					</div>
  </nav>  
</header>



  <!-- AÑADIR - MODAL -->

  <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#myModal">
    AÑADIR
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title bg-dark text-white">Agregar Usuario</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

<form method="post" action="conexion_usuario.php" id="formularios_modal">

      <div class="modal-body">

        <div class="form-group">
          <label for="txt">Nombre del usuario: </label>
          <input type="text" class="form-control" id="txt" name="nombre_usuario">
        </div>
        <div class="form-group">
          <label for="txt">Telefono: </label>
          <input type="text" class="form-control" id="txt" name="telefono">
        </div>

        <div class="form-group">
          <label for="txt">Correo Electronico: </label>
          <input type="email" class="form-control" id="txt" name="correo">
        </div>

        <div class="form-group">
          <label for="txt">Tipo usuario: </label>
          <input type="text" class="form-control" id="txt" name="tipo_usuario">
        </div>

        <div class="form-group">
          <label for="txt">Contraseña: </label>
          <input type="password" class="form-control" id="txt" name="contraseña">
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" data-bs-dismiss="modal" name="registrar_usuario">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="resetear()">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</form>


<!---- BUSCADOR ---->
<div class="buscador">
    <form action="buscar_usuario.php" method="POST" >
    <input type="text" class="buscador_input" name="palabra" placeholder="Buscar..." value="<?php echo $busqueda?>">
    <input type="submit" class="buscador_enviar"  name="buscar" value="Buscar"></input>
    </form>
</div>

<body>
  <table class="table mt-0 ml-1">
    <thead>
      <tr class="titulo_inventario">
        <th>ID_USUARIO</th>
        <th>NOMBRE_USUARIO</th>
        <th>TELEFONO</th>
        <th>CORREO</th>
        <th>TIPO_USUARIO</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <!-- Bucle para llamar los datos de la base de datos -->
    <?php while($row=mysqli_fetch_array($query)){ ?>
    <tr class="table-success">
      <td><?php echo $row["id_usuario"] ?></td>
      <td><?php echo $row["nombre_usuario"] ?></td>
      <td><?php echo $row["telefono"] ?></td>
      <td><?php echo $row["correo"] ?></td>
      <td><?php echo $row["tipo_usuario"] ?></td>
      <td><a href="borrar_usuario.php?id_usuario=<?php echo$row['id_usuario'];?>" class="material-icons borrar" onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?');">delete
      <a href="modal_editar_u.php?id_usuario=<?php echo $row['id_usuario'];?>" data-bs-toggle="modal" class="material-icons editar" data-bs-target="#Editar_usuario<?php echo $row['id_usuario'];?>">edit</td>
    </tr>

    <?php include("modal_editar_u.php");?>
<?php } ?>

</table>

<script src="js/cancelar_formulario.js"></script>
</body>

<footer>
</footer>
</html>