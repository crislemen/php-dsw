<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9</title>
</head>

<body>
    <?php
    if (isset($_POST['num'])) {
        $_POST['lista'].=$_POST['num']." ";
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="num"> Número:</label>
                </td>
                <td>
                    <input type="number" id="num" name="num"/>
                </td>
                <input type="hidden"name="lista" id="lista"/>
            </tr>
            <tr>
                <td>
                    <button type="submit">Enviar</button>
                </td>
                <td>
                    <button type="reset">Borrar formulario</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>