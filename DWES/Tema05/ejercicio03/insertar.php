<?php
include("conexionBd.php");
$con=conectar();

$codigo=$_POST['codigo'];
$descripcion=$_POST['descripcion'];
$pcompra=$_POST['pcompra'];
$pventa=$_POST['pventa'];
$stock=$_POST['stock'];

$sql="INSERT INTO alumno VALUES('$codigo','$descripcion','$pcompra','$pventa','$stock')";
$query= $conexion->query($sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>