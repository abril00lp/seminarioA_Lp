<?php
    /* File actualizar_proceso.php
       Contiene el codigo de actualización de un registro
       NOTA: aqui es enviada la informacion proveniente del formulario modificar por el metodo POST
       ATENCION! RAZONA!
    */
    include("abrir_conexion.php");

    //AQUI SE RECIBE LA INFORMACION ENVIADA POR EL FORMULARIO
    //Y ES ALMACENADA EN VARIABLES, ESTAS SERAN DEACUERDO A TU PROYECTO.
    $Nombre_usuario = $_POST['txtNombre_usuario'];
    $Nombre = $_POST['txtNombre'];
    $Apellidos = $_POST['txtApellidos'];
    $Direccion = $_POST['txtDireccion'];
    $Telefono = $_POST['txtTelefono'];
    $Correo_electronico = $_POST['txtCorreo_electronico'];
    $Contraseña = $_POST['txtPassword'];

    //Comprobamos que los datos no esten vacios
    if($Nombre_usuario =="" || $Nombre =="" || $Apellidos =="" || $Direccion =="" || $Telefono =="" || $Correo_electronico =="" ||  $Contraseña ==""){
        echo "<center><h3>Faltan campos por llenar</h3></center>";
    }else{
        //"INSERTAR!" codigo para insertar en una tabla de la base de datos 
        $tabla_db= 'usuario';
        
        //Se crea la instruccion
        $sql = "UPDATE $tabla_db SET Nombre_usuario='$Nombre_usuario', Nombre='$Nombre', Apellidos='$Apellidos', Direccion='$Direccion', Telefono='$Telefono', Correo_electronico='$Correo_electronico', Password='$Contraseña' WHERE Nombre = '$Nombre'";

        // Se ejecuta la consulta
        $query = mysqli_query($conexion,$sql);

        // Comprobamos si el producto fue modificado exitosamente.
        if ($query) {
            echo "El dato ha sido modificado con éxito. <a href='index2.php'>Regresar</a>";
        } else {
            echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='index2.php'>Regresar</a>";
        }
        //------------------------------------------------
    }
?>

