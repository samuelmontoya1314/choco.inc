<?php 

include("data_base.php");

$id=$_GET["id"];

$op_delete= new Basedatos_amiguis;

$consulta="DELETE FROM `productos` WHERE id_producto='$id'";

$op_delete->eliminarDatos($consulta);

header("location:productos.php");

?>