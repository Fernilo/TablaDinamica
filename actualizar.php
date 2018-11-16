<?php 
include("conexion.php");
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$sqlUpdate="UPDATE t_persona SET nombre='$nombre',apellido='$apellido',email='$email',telefono='$telefono' WHERE id=$id";
echo $rUpdate=mysqli_query($db,$sqlUpdate);

?>