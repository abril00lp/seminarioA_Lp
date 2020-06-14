<?php
    /* File eliminar_proceso.php
       Contiene el codigo de eliminacion de un registro 
       NOTA: aqui es enviada la peticion de borrado por el metodo GET
       ATENCION! RAZONA!
    */
    include("abrir_conexion.php");

    //AQUI SE RECIBE LA INFORMACION ENVIADA POR EL BOTON ELIMINAR
    //Y ES ALMACENADA EN VARIABLES, ESTAS SERAN DEACUERDO A TU PROYECTO.
    $Nombre_usuario = $_GET['Nombre_usuario'];

    //Comprobamos que los datos no esten vacios
    if($Nombre_usuario==""){
        echo "<center><h3>Faltan campos por llenar</h3></center>";
    }else{
        //"ELIMINAR!" codigo para eliminar registros en una tabla de la base de datos 
        $tabla_db= 'usuario';
        
        //Se crea la instruccion
        $sql = "DELETE FROM usuario WHERE Nombre_usuario = '$Nombre_usuario'";

        // Se ejecuta la consulta
        $query = mysqli_query($conexion,$sql);

        // Comprobamos si el producto fue insertado exitosamente.
        if ($query) {
            //cambiar el destino de direccionamiento a la ubicacion deseada
            header("location: index2.php");
        } else {
            echo "Lo sentimos, falló. Por favor, regrese y vuelva a intentarlo.<a href='index2.php'>Regresar</a>";
        }
        //------------------------------------------------
    }
?>