<?php
  include("abrir_conexion.php");
  session_start();
  $usuario= $_SESSION['u_sesion']; 
  if (isset($_GET['comprar'])){
    $tabla_db= 'ventas';
    
        
        //Se crea la instruccion
        $sql = "UPDATE $tabla_db SET estatus='Comprado' WHERE id_comprador = '$usuario'";

        // Se ejecuta la consulta
        $query = mysqli_query($conexion,$sql);

        // Comprobamos si el producto fue modificado exitosamente.
        if ($query) {
            echo "El dato ha sido modificado con éxito. <a href='index2.php'>Regresar</a>";
        } else {
            echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='index2.php'>Regresar</a>";
        }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=" ">

  <title>Seminario</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

<?php
    include 'menu.php';
  ?>
  
  <section>
  <div class="container">
	<div class="row">
		<div class="col-lg-12 mx-auto"> 
      <br>
  <center><h1>COMPRAS PENDIENTES</h1></center>
    <!-- INICIA BOTON -->
    <center>
      <a href="proceso_ventas.php"></a>
    </center>
    <br>
    <!-- INICIA Tabla de CONSULTA -->
    <center>
      <table border="1">
        <tr>
          <th width="10%">Imagen</th>
          <th width="15%">Descripción</th>
          <th width="20%">Precio</th>
          <th width="10%">Acciones</th>
        </tr>
        <?php
          $total = 0;
          //Lista de Tablas
          //$tabla_db = "ventas"; 	   // TABLA DESEADA DE LA BASE DE DATOS
          //$campos = "*";             // Campos de la tabla seleccionada
          
          $sql = "SELECT imagen , descripcion, precio, id_folio  FROM ventas INNER JOIN producto ON ventas.id_articulo = producto.codigo WHERE id_comprador = '$usuario' and estatus = 'carrito'";
          //CONSULTAR
          $resultados = mysqli_query($conexion,"$sql");
          while($consulta = mysqli_fetch_array($resultados))
        {?>
        <!-- 
          Ciclo que muestra campos uno por uno dentro de la tabla principal,
          EL NOMBRE DE CADA ARREGLO DEBE DE SER COMO EL NOMBRE DE LOS CAMPOS DE LA TABLA EN LA BASE DE DATOS ¬¬
          NOTA: No te equivoques y razona!
         -->
        <tr>
          <td><img src="<?php echo $consulta['imagen'];?>" alt="" width="150px"></td>
          <td><?php echo $consulta['descripcion'];?></td>
          <td><?php echo $consulta['precio'];?></td>
          <?php  $total+=$consulta['precio']; ?>
          <td><a href="?delete=<?php echo $consulta['id_folio'];?>">Eliminar<i class="fa fa-trash"></i></a></td>
        </tr>
        <?php
          }
          include("cerrar_conexion.php");
        ?>
        <tr>

        <td colspan="4">TOTAL: <?php echo number_format($total,2); ?></td>
        </tr>
      </table>
    </center>

    

  </section>

  <div class="col-md-12" >
      
	   <span class="float-right"><a href="index.php" class="btn btn-secondary">Salir</a> <a href="?comprar=<?php echo $_SESSION['u_sesion']; ?>"><img src="paypal.png" alt="Comprar"></a></span>
      </div>
  
</body>
</html>