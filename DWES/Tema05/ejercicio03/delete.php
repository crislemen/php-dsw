<?php

include("conexionBd.php");
$con=conectar();

$codigo=$_GET['id'];

$sql="DELETE FROM producto  WHERE codigo='$codigo'";
$query= $conexion->query($sql);

    if($query){
        Header("Location: producto.php");
    }
?>
