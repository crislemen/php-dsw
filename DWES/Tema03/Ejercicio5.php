<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Fecha y Hora</title>
</head>
<body>
    <?php
    function mostrarHoraActual($fecha = null){
        echo "<table>";
        date_default_timezone_set('Atlantic/Canary');
        if ($fecha==null) {
            $fecha=getdate();
        }
        $claves=['hours','minutes','seconds'];
        foreach ($claves as $c ) {
            echo"<td>$fecha[$c]</td>";
        if ($c!="seconds") {
            echo "<td>:</td>";
        }
        }
        echo "</table>";
    }
    function mostrarFechaActual($fecha = null){
        echo "<table>";
        date_default_timezone_set('Atlantic/Canary');
        
        if ($fecha==null) {
            $fecha=getdate();
        }
        $claves=['mday','mon','year'];
        foreach ($claves as $c ) {
            echo"<td>$fecha[$c]</td>";
        if ($c!="year") {
            echo "<td>/</td>";
        }
        }
        echo "</table>";
    }
    mostrarHoraActual();
    mostrarFechaActual()
    ?>
</body>
</html>