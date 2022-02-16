<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <?php
    //Para que nos funcione correctamente debemos tener el fichero notasAlumnos en /var/www/phpdata y que wwwdata tenga permisos en esa carpeta
    $fichero = "notasAlumnos.txt";
    $arrayAlumnos = [];
    echo "<table border='1'>
            <tr>
            <th>Alumno</th>
            <th>Nota</th>
            ";
    if (file_exists($fichero)) {
        $handle=fopen($fichero,"r");
        while($linea=fgets($handle)){
            $campos=explode(",",$linea);
            $nota = intval($campos[1]);
            $arrayAlumnos+=[$campos[0] => $nota];
        }
        arsort($arrayAlumnos);
        foreach($arrayAlumnos as $nombre=>$nota){
        echo "<tr>
                <td>$nombre</td>
                <td>$nota</td>
            <tr>";
        }
    }
    echo "   
          </table>";
    ?>
</body>
</html>