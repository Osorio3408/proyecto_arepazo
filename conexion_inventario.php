<?php
//Se llama la conexion a la base de datos
include "conexion.php";

//Creacion de las variables que van a obtener los datos ingresados
$nombre_producto= $_POST["nombre_producto"];
$cantidad=$_POST["cantidad"];
$tipo =$_POST["tipo"];

//Creacion de la variable que va a insertar los datos
$insert = "INSERT INTO `inventario`( `nombre_producto`, `cantidad`, `tipo`) VALUES ('$nombre_producto','$cantidad','$tipo')";

//se ejecuta la variable y se verifica si se hizo o hubo un error
if(mysqli_query($conexion,$insert)){
        ?><script src="js/alerta_agregar_producto.js"></script><?php
}else{
    echo '<script type="text/javascript">
    alert("Ocurrió un error, verifique la conexion.");
    window.location.href="mod_inventario.php";
    </script>';
}

?>