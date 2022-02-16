<?php
    //Para que nos funcione correctamente debemos tener el fichero notasAlumnos en /var/www/phpdata y que wwwdata tenga permisos en esa carpeta
    $fichero = "notasAlumnos.txt";
    $arrayAlumnos = [];
    echo "
        <h1>Resultados</h1>
        <table>
            <tr>
            ";
    if (file_exists($fichero)) {
        $handle=fopen($fichero,"r");
        while($linea=fgets($handle)){
            $campos=explode(";",$linea);
            $nota = floatval($campos[1]);
            $arrayAlumnos+=[$campos[0] => $nota];
        }
        asort($arrayAlumnos);
        $notaMayor=0;
        $notaMenor=10;
        $sumaNotas=0;
        $contador=0;
        foreach($arrayAlumnos as $nombre=>$nota){
            if ($notaMayor<$nota) {
                $alumnoMejorNota=$nombre;
                $notaMayor= $nota;
            }
            if ($notaMenor>$nota) {
                $alumnoPeorNota=$nombre;
                $notaMenor=$nota;
            }
        echo "<tr>
                <td>$nombre</td>
                <td>$nota</td>
            <tr>";
            $contador ++;
        $sumaNotas= $sumaNotas + $nota;
        }
        $media=$sumaNotas/$contador;
    }

    echo "   
          </table>";
          echo "<hr>";
          echo "<p>El alumno con la mejor nota es $alumnoMejorNota con un $notaMayor";
          echo "<p>El alumno con la peor nota es $alumnoPeorNota con un $notaMenor";
          echo "<p>La suma de las notas de los alumnos en total es $media</p>"
    ?>