<?php 
include("conexion.php");
$id=$_POST['id'];
$sqlEliminar="DELETE FROM t_persona WHERE id=$id";
echo $rEliminar=mysqli_query($db,$sqlEliminar);
 ?>