<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="guardar.php" method="post">
        <table>
            <tr>
                <td>Usuario</td>
                <td>
                    <input type="text" name="usuario" >
                </td>
            </tr>
            <tr>
                <td>Correo</td>
                <td>
                    <input type="text" name="correo" >
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>