<?php


  include("data_base.php");
 
  if (isset($_POST["botonEditar"])) {


    $id=$_GET["id"];
    
    $nombre=$_POST["nombreEditar"];
    $marca=$_POST["marcaEditar"];
    $precio=$_POST["precioEditar"];
    $descripcion=$_POST["descripcionEditar"];
    $foto=$_POST["fotoEditar"];

    $operacionBD=new BaseDatos_amiguis();   

    $consultarSQL="UPDATE productos SET nombre='$nombre',marca='$marca',precio='$precio',descripcion='$descripcion',foto='$foto' WHERE id_producto='$id' ";
    $operacionBD->actualizarDatos($consultarSQL);


    header("location:productos.php");
 }






?>