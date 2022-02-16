<?php

include("conexionBd.php");
$con=conectar();

$codigo=$_POST['codigo'];
$descripcion=$_POST['descripcion'];
$pcompra=$_POST['pcompra'];
$pventa=$_POST['pventa'];
$stock=$_POST['stock'];

$sql="UPDATE producto SET  dni='$descripcion',pcompra='$pcompra',pventa='$pventa',stock='$stock' WHERE codigo='$codigo'";
$query= $conexion->query($sql);

    if($query){
        Header("Location: index.php");
    }
?>