<?php

include("abrir_conexion.php");

$id_articulo = $_GET ['codigo'];
$id_comprador = $_GET ['usuario'];

echo $id_comprador;
    

    //"INSERTAR!" codigo para insertar en una tabla de la base de datos 
    $tabla_db= 'ventas';
    
    //Se crea la instruccion
    $sql = "INSERT INTO $tabla_db (id_comprador, id_articulo, estatus) values 
            ('$id_comprador','$id_articulo','carrito')";

    // Se ejecuta la consulta
    $query = mysqli_query($conexion,$sql);

    // Comprobamos si el producto fue insertado exitosamente.
    if ($query) {
        //echo "El dato ha sido guardado con éxito. <a href='catalogo_producto.php'>Regresar</a>";
    } else {
      echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='catalogo_producto.php'>Regresar</a>";
    }
    //------------------------------------------------

?>

