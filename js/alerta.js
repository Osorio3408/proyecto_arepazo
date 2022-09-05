function confirmacion(){
   let confirmacion = ("Está seguro de que desea eliminar este usuario ?");
   if(confirmacion){
    $resultado = mysqli_query($conexion,$eliminar);
    alert("Se eliminó correctamente.");
   }else{
    alert('No se pudo eliminar');
   }
}