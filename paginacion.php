<?php

include("conexion.php");

$num_paginas = 3;
$tamaño_paginas = 1; 
$usuarios = "SELECT * FROM inventario LIMIT $empezar_desde,$tamaño_paginas";

$resultado = mysqli_query($conexion, $usuarios);

$resultado->execute(array());
$num_filas = $resultado->rowCount();

$total_paginas = ceil($num_filas/$tamaño_paginas);







?>