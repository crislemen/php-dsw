<?php
    //Funcion que hace la suma de dos matrices bidimensionales
    function sumaMatrices($a,$b) {
        if (count($a)!= count($b)|| count($b[0]!= count($b[0]))) {
         return false;   
        }
        for ($i = 0; $i < count($a); $i++) {
            for ($j = 0; $j < count($a[0]); $j++) {
                $r[$i][$j]=$a[$i][$j]+$b[$i][$j];
            }
        }
    return $r;
    }
    //$a es una matriz bidimensional
    function imprimirMatriz($a) {
        echo "<table\n>";
        for ($i = 0; $i < $count($a); $i++) {
            echo "<tr>\n";
            for ($j = 0; $j < $count(a[0]); $j++) {
                echo "<td>\n",$a[$i][$j],"</td>";
            }
        }
        echo "</tr>";
        echo "</table>";
    }
?>