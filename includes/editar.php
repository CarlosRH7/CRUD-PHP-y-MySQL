<?php
include_once'config.php';
global $link;


$query="UPDATE post SET titulo_post='".$_POST['titulo']."' WHERE id_post='".$_POST['id_post']."' ";

$result=$link->query($query);

if ($result) {
	header('Location: ../index.php');
}
else{
	echo "Hubo un error".$link->error;
}


 ?>