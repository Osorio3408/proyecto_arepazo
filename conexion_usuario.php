<?php
//Se llama la conexion a la base de datos
include "conexion.php";

//Creacion de las variables que van a obtener los datos ingresados
$nombre_usuario = $_POST ["nombre_usuario"];
$telefono= $_POST ["telefono"];
$correo=$_POST["correo"];
$contraseña =$_POST["contraseña"];
$tipo_usuario=$_POST["tipo_usuario"];

//Creacion de la variable que va a insertar los datos
$insertar="INSERT INTO `usuario`( `nombre_usuario`, `telefono`, `correo`, `contraseña`, `tipo_usuario`) VALUES ('$nombre_usuario','$telefono','$correo','$contraseña','$tipo_usuario')";

//se ejecuta la variable y se verifica si se hizo o hubo un error
if(mysqli_query($conexion,$insertar)){
    echo '<script type="text/javascript">
        alert("Usuario guardado correctamente.");
        window.location.href="usuarios.php";
        </script>';
}else{
    echo '<script type="text/javascript">
    alert("Ocurrió un error, verifique la conexion.");
    window.location.href="mod_inventario.php";
    </script>';
}
?>