<?php
//Se llama la conexion a la base de datos
include "conexion.php";

//Creacion de las variables que van a obtener los datos ingresados
$id_vendedor=$_POST ["vendedor"];
$tipo_producto=$_POST ["producto"];
$precio=$_POST ["precio"];

//Creacion de la variable que va a insertar los datos
$insertarr= "INSERT INTO `registro_ventas`(`id_vendedor`, `nombre_producto`, `precio`) VALUES ('$id_vendedor','$tipo_producto','$precio')";

//se ejecuta la variable y se verifica si se hizo o hubo un error
if(mysqli_query($conexion,$insertarr)){
    echo '<script type="text/javascript">
    alert("Venta guardada correctamente.");
    window.location.href="reg_venta_vendedor.php";
    </script>';
}else{
    echo '<script type="text/javascript">
    alert("Ocurrió un error, verifique la conexion.");
    window.location.href="mod_inventario_vendedor.php";
    </script>';
}
?>