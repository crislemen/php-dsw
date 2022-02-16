<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
    <style>
        img{
            width: 125px;
        }
    </style>
</head>
<body>
    <?php
    function primitiva(){
        $res=[];
        while (count($res)<6) {
            $n=rand(1,49);
            if (!in_array($n,$res)) {
                array_push($res,$n);
            }
        }
        sort($res);
        return $res;
    }
    $sorteo=primitiva();
    echo "\t<table cellpadding='5' border='1'>\n\t<tr>";
    foreach ($sorteo as $valor) {
        echo "<td>";
        if ($valor<10) {
            echo "<img src='../imagenes/imgNumeros/$valor.png'/>";
        } else{
            $svalor=strval($valor);
            echo "<img src='../imagenes/imgNumeros/$svalor[0].png'/>";
            echo "<img src='../imagenes/imgNumeros/$svalor[1].png'/>";
        }
    }
    
    ?>
</body>
</html>