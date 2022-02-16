<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brisca</title>
    <style>
        img{
            width: 50px;
        }
    </style>
</head>
<body>
<?php

        function numeros(){
            $res=[];
            while (count($res)<10) {
                $n=rand(1,48);
                if (!in_array($n,$res)) {
                    array_push($res,$n);
                }
            }
            return $res;
        }
        $brisca=numeros();

        echo "\t<table cellpadding='5' border='1'>\n\t<tr>";
        $puntos =[];
        foreach ($brisca as $valor) {
            if ($valor<=12) {
                $palo="bastos";
            }else if ($valor<=24){
                $palo="copas";
            }else if($valor<=36){
                $palo="oros";
            }else {
                $palo="oros";
            }
            $numeroCarta=$valor%12;
            if ($numeroCarta == 0) {
                $numeroCarta = 12;
            }
                
                switch ($numeroCarta) {
                    case 1:
                        array_push($puntos,11);
                        break;
                    case 3:
                        array_push($puntos,10);
                        break;
                    case 12:
                        array_push($puntos,4);
                        break;
                    case 11:
                        array_push($puntos,3);
                        break;
                    case 10:
                        array_push($puntos,2);
                        break;
                    default:
                        break;
                }
            echo "<td><img src='../imagenes/barajaEspa/$palo/$palo$numeroCarta.png'/>$numeroCarta</td>";

        }
        $suma=array_sum($puntos);
        echo"
        <p> La suma de los puntos es: $suma</p>";
?>
</body>
</html>