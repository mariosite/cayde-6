<?php
	$server = "localhost";
	$database = "dosquebr_DirMunicipal";
	$user = "dosquebr_dqs";
	$pass = "s1st3m4s";
	
	$tablaDB1 = "Directorio";
	
	$conexion = new mysqli($server,$user,$pass,$database);

	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}
?>