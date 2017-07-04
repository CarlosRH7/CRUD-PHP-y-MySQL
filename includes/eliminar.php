<?php 
include_once'config.php';
global $link;


$query="DELETE FROM post WHERE id_post='".$_GET['id_post']."'";
$result=$link->query($query);


if ($result) {
	header('Location: ../index.php');
}else{
	echo "Hubo un error".$link->error;
}




 ?>