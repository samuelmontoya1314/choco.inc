<?php 



include ("data_base.php");

if (isset($_POST["boton"]))
{
    $nombre=$_POST["nombre_p"];
    $marca=$_POST["marca_p"];
    $precio=$_POST["precio_p"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];


    $op_db= new BaseDatos_amiguis();
   

    $consultarSQL="INSERT INTO productos(nombre, marca, precio, descripcion,foto) VALUES ('$nombre','$marca','$precio','$descripcion','$foto')";

    $op_db ->agregarDatos($consultarSQL);

    
    
}



?>