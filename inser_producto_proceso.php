<?php
    /* File insertar_proceso.php
       Contiene el codigo de insercion a la base de datos
       NOTA: aqui es enviada la informacion proveniente del formulario insertar por el metodo POST
       ATENCION! RAZONA!
    */
    include("abrir_conexion.php");

    session_start();

    //AQUI SE RECIBE LA INFORMACION ENVIADA POR EL FORMULARIO
    //Y ES ALMACENADA EN VARIABLES, ESTAS SERAN DEACUERDO A TU PROYECTO.
    $Descripcion = $_POST['txtDescripcion'];
    $Precio = $_POST['txtPrecio'];
    $Existencia = $_POST['txtExistencia'];
    $Vendedor = $_SESSION['u_sesion'];

    $img=$_FILES["txtImagen"]["name"];
    $ruta=$_FILES["txtImagen"]["tmp_name"];
    $destino="img/".$img;
    copy($ruta,$destino);

    //Comprobamos que los datos no esten vacios
    if($Descripcion =="" || $Precio =="" || $Existencia =="" ||  $Vendedor ==""){
        echo "<center><h3>Faltan campos por llenar</h3></center>";
    }else{
        //"INSERTAR!" codigo para insertar en una tabla de la base de datos 
        $tabla_db= 'producto';
        
        //Se crea la instruccion
        $sql = "INSERT INTO $tabla_db (descripcion, precio, existencia, imagen, vendedor) values 
                ('$Descripcion','$Precio','$Existencia','$destino','$Vendedor')";

        // Se ejecuta la consulta
        $query = mysqli_query($conexion,$sql);

        // Comprobamos si el producto fue insertado exitosamente.
        if ($query) {
            echo "El dato ha sido guardado con éxito. <a href='catalogo_producto.php'>Regresar</a>";
        } else {
            echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='catalogo_producto.php'>Regresar</a>";
        }
        //------------------------------------------------
    }
?>