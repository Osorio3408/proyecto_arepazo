<?php
//llamar la conexion a la base de datos
include("conexion.php");

// Creacion de variable del id
$id_producto = $_GET['id_producto'];

// Creacion de la variable que va ejecurar el DELETE
$eliminar = "DELETE FROM inventario WHERE id_producto = '$id_producto'";

// Ejecucion de la variable
$resultado = mysqli_query($conexion,$eliminar);

// Condicional para saber si se ejecutó el DELETE
if($resultado){
    echo'<script type="text/javascript"> alert("Se eliminó correctamente.");window.location.href="mod_inventario.php";</script>';

} else {
	echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";}
?>