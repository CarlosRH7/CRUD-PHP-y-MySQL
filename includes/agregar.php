<?php 
include_once 'config.php';//es para incluir un archivo
//require_once 'config.php';//especifaca que el archivo debe incluirce 


global $link;

//query para agregar datos
$query="INSERT INTO post (titulo_post, autor_post, contenido_post, fecha_post, imagen_post) 
		VALUES('".$_POST['titulo']."', '".$_POST['autor']."', '".$_POST['contenido']."', '".$_post['fecha']."', '".$_POST['img']."' )";

$result=$link->query($query);

if ($result) {
	header('Location: ../index.php');
}else{
	echo "Hay un error";
}






//print_r($_POST);





?>