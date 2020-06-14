<?php
    /* File insertar_proceso.php
       Contiene el codigo de insercion a la base de datos
       NOTA: aqui es enviada la informacion proveniente del formulario insertar por el metodo POST
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
    $Tipo_usuario = $_POST['tipoU'];

    //Comprobamos que los datos no esten vacios
    if($Nombre =="" || $Apellidos =="" || $Direccion =="" || $Telefono =="" || $Correo_electronico =="" || $Nombre_usuario =="" || $Contraseña =="" || $Tipo_usuario ==""){
        echo "<center><h3>Faltan campos por llenar</h3></center>";
    }else{
        //"INSERTAR!" codigo para insertar en una tabla de la base de datos 
        $tabla_db= 'usuario';
        
        //Se crea la instruccion
        $sql = "INSERT INTO $tabla_db (Nombre_usuario, Nombre, Apellidos, Direccion, Telefono, Correo_electronico, Password, Tipo_usuario) values 
                ('$Nombre_usuario','$Nombre','$Apellidos','$Direccion','$Telefono','$Correo_electronico','$Contraseña', '$Tipo_usuario')";

        // Se ejecuta la consulta
        $query = mysqli_query($conexion,$sql);

        // Comprobamos si el producto fue insertado exitosamente.
        if ($query) {
            echo "El dato ha sido guardado con éxito. <a href='insertar.php'>Regresar</a>";
        } else {
            echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='insertar.php'>Regresar</a>";
        }
        //------------------------------------------------
    }
?>

