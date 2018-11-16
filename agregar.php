<?php 
include("conexion.php");
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$sqlInsertar="INSERT INTO t_persona (nombre,apellido,email,telefono) VALUES('$nombre','$apellido','$email','$telefono')";
	echo $rInsertar=mysqli_query($db,$sqlInsertar);

 ?>