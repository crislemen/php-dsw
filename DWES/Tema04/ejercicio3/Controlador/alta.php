<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta</title>
</head>
<body>
    <?php
    function procesaDatosPost():array{
        return [
            "nombre"=> $_POST['nombre'],
            "apellido1"=> $_POST['apellido1'],
            "apellido2"=> $_POST['apellido2'],
            "usuario"=> $_POST['usuario'],
            "contrasenia"=>$_POST['email']
        ];
    }
    if ($_POST) {
        $datos=procesaDatosPost();
    }
    ?>
</body>
</html>