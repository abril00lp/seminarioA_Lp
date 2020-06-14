<?php
    /* File actualizar_proceso.php
       Contiene el codigo de actualización de un registro
       NOTA: aqui es enviada la informacion proveniente del formulario modificar por el metodo POST
       ATENCION! RAZONA!
    */
    include("abrir_conexion.php");

    //AQUI SE RECIBE LA INFORMACION ENVIADA POR EL FORMULARIO
    //Y ES ALMACENADA EN VARIABLES, ESTAS SERAN DEACUERDO A TU PROYECTO.
    $Codigo = $_POST['txtCodigo'];
    $Descripcion = $_POST['txtDescripcion'];
    $Precio = $_POST['txtPrecio'];
    $Existencia = $_POST['txtExistencia'];
    $Imagen = $_POST['txtImagen'];
    $Vendedor = $_POST['txtVendedor'];

    //Comprobamos que los datos no esten vacios
    if($Codigo =="" || $Descripcion =="" || $Precio =="" || $Existencia =="" || $Imagen =="" || $Vendedor ==""){
        echo "<center><h3>Faltan campos por llenar</h3></center>";
    }else{
        //"INSERTAR!" codigo para insertar en una tabla de la base de datos 
        $tabla_db= 'producto';
        
        //Se crea la instruccion
        $sql = "UPDATE $tabla_db SET codigo='$Codigo', descripcion='$Descripcion', precio='$Precio', existencia='$Existencia', imagen='$Imagen', vendedor='$Vendedor' WHERE codigo = '$Codigo'";

        // Se ejecuta la consulta
        $query = mysqli_query($conexion,$sql);

        // Comprobamos si el producto fue modificado exitosamente.
        if ($query) {
            echo "El dato ha sido modificado con éxito. <a href='catalogo_producto.php'>Regresar</a>";
        } else {
            echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='catalogo_producto.php'>Regresar</a>";
        }
        //------------------------------------------------
    }
?>

