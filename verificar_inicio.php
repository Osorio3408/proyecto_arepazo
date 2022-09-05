<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	header("location: iniciar_seccion.php");
	exit;
}


?>