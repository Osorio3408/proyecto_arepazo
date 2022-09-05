<?php
include("conexion.php");

$id_producto = $_POST['id_producto'];
$nombre_producto = $_POST['nombre_producto'];
$cantidad = $_POST['cantidad'];
$tipo = $_POST['tipo'];

$update = ("UPDATE `inventario` SET nombre_producto = '$nombre_producto', cantidad = '$cantidad', tipo = '$tipo' WHERE id_producto = '$id_producto'");

$resultado_update = mysqli_query($conexion,$update);

if($resultado_update){
    ?> <script src="js/confirmacion_editar_producto.js"></script><?php
}else{
    echo "error";
}
?>