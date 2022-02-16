<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Suma de matrices</title>
<style>
    img{
        width: 100px;
    }
</style>
</head>
<body>
<?php 
$num=rand(10000,99999);
$numStr=strval($num);
for ($i = 0; $i < strlen($numStr); $i++) {
    echo "<img src='../imagenes/imgNumeros/$numStr[$i].png'/>";
}
?>
</body>