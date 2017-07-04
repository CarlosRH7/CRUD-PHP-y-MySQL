<?php
	$username="root";//nombtre de usuario de mi BD 
	$password="";//Contrasea de mi BD
	$hostname="127.0.0.1";//Dirección del servidor de mi BD 
	$database="blog";//Nombre de mi BD
	
	// me conecto a mi BD
	$link=mysqli_connect($hostname,$username,$password,$database);
	//Verifico mi conección ami BD 
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL:";
		return;
	}
	else {
		echo "conectado";
	}

	$link->query("SET NAMES 'utf8'");
	date_default_timezone_set('America/Mexico_City');
?>