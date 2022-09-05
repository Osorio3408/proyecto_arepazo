<?php

include("conexion.php");

$id_usuario = $_POST['id_usuario'];
$nombre_usuario = $_POST['nombre_usuario'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$tipo_usuario = $_POST['tipo_usuario'];

$update = ("UPDATE `usuario` SET nombre_usuario = '$nombre_usuario', telefono = '$telefono', correo = '$correo', tipo_usuario = '$tipo_usuario' WHERE id_usuario = '$id_usuario'");

$resultado_update = mysqli_query($conexion,$update);

if($resultado_update){
    ?> <script src="js/confirmacion_editar_usuario.js"></script><?php
}else{
    echo "error";
}
?>