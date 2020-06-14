<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seminario</title>
</head>
<body>
    <?php
        session_start();

        if(isset($_SESSION['u_sesion'])){
            echo"Sesion exitosa\n Bienvenido",$_SESSION['u_sesion'];

            echo"<a href='cerrar_sesion.php'>Cerrar sesion>/a>";
        }

    ?>
</body>
</html>