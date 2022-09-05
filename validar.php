<?php
session_start();


if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true ){
  header("Location: mod_inventario.php");
  exit;
}

include ("conexion.php");



$nombre_usuario = $_POST['nombre_usuario'];
$contraseña = $_POST['contraseña'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
$consulta = "SELECT * FROM usuario WHERE nombre_usuario='$nombre_usuario' and contraseña='$contraseña'";

$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
$fila = mysqli_fetch_array($resultado);

if($filas>0){
  if($fila['tipo_usuario'] == "admin" || $fila['tipo_usuario'] == "Admin" || $fila['tipo_usuario'] == "administrador" || $fila['tipo_usuario'] == "Administrador" ){
    $fila['nombre_usuario'] = $usuario_info;
    header("location:mod_inventario.php");
    $_SESSION["loggedin"] = true;}

 if($fila['tipo_usuario'] == "vendedor" || $fila['tipo_usuario'] == "Vendedor"){
  $fila['nombre_usuario'] = $usuario_info;
    header("location:mod_inventario_vendedor.php");
    $_SESSION["loggedin"] = true;}
     
}else if(empty(trim($contraseña)) && empty(trim($nombre_usuario))){
  ?><script src="js/falta_contraseña_usuario.js"></script><?php
}if( empty(trim($nombre_usuario))){
  ?><script src="js/falta_nombre_usuario.js"></script><?php
}if( empty(trim($contraseña))){
  ?><script src="js/falta_contraseña.js"></script><?php
}{
  ?><script src="js/error_inicio.js"></script><?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
}
?>