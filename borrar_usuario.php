<?php
//llamar la conexion a la base de datos
include("conexion.php");

// Creacion de variable del id
$id_usuario = $_GET['id_usuario'];

// Creacion de la variable que va ejecurar el DELETE
$eliminar = "DELETE FROM usuario WHERE id_usuario = '$id_usuario'";

// Ejecucion de la variable
$resultado = mysqli_query($conexion,$eliminar);

// Condicional para saber si se ejecutó el DELETE

if($resultado){
    echo'<script type="text/javascript"> alert("Se eliminó correctamente.");window.location.href="usuarios.php";</script>';

} else {
	echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";}