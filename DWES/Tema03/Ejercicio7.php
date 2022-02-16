<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichero</title>
</head>
<body>
<?php
    //Falta la funcion de coger un fichero de un formulario y meterlo en temp
    $handle = fopen("/tmp/PaisesEjemplo.csv","r");
    echo "<table>
            <tr>";
    $linea=fgets($handle);
    function generaFila($linea,$celda="td"){
        $linea=substr($linea,0,strlen($linea)-1); //quitar salto de línea al final
        $campos=explode(";",$linea);
        foreach ($campos as $campo) {
            echo "<tr>";
            echo "<$celda>$campo</$celda>";
        }
        echo   "</tr>";
    }
    while($linea=fgets($handle)){


    }
    fclose($handle)
?>
</body>
</html> 