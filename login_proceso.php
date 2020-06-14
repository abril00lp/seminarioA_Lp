<?php 
    session_start();
    $Nombre_usuario=$_POST['txtNombre_usuario'];
    $Password=$_POST['pass'];

    include "abrir_conexion.php";

    $proceso = $conexion->query("SELECT * FROM usuario WHERE Nombre_usuario = '$Nombre_usuario' AND Password = '$Password'");

    if($resultado = mysqli_fetch_array($proceso)){
        //AQUI SE CREA LA SESION
        $_SESSION['u_sesion'] = $Nombre_usuario;
        $_SESSION['u_nombre'] = $resultado['Nombre'];
        $_SESSION['u_rol'] = $resultado['Tipo_usuario'];
        header("location: catalogo_producto.php");
    }else {
        header("location: login.php");
    }