<?php
/* Archivo principal que contiene
   La consulta de una tabla
   By Prof Omar Toxqui */

  //Archivo de conexion
  include("abrir_conexion.php");
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

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
  <center><h1>PRODUCTOS</h1></center>
    <!-- INICIA BOTON -->
   
    <!-- INICIA Tabla de CONSULTA -->
    <center>
      <table border="1">
        <tr>
          <th width="10%">Código</th>
          <th width="20%">Descripción</th>
          <th width="10%">Precio</th>
          <th width="10%">Existencia</th>
          <th width="15%">Imagen</th>
          <th width="15%">Vendedor</th>
        </tr>
        <?php
          //Lista de Tablas
          $tabla_db = "producto"; 	   // TABLA DESEADA DE LA BASE DE DATOS
          $campos = "*";             // Campos de la tabla seleccionada
          //CONSULTAR
          $resultados = mysqli_query($conexion,"SELECT $campos FROM $tabla_db");
          while($consulta = mysqli_fetch_array($resultados))
        {?>
        <!-- 
          Ciclo que muestra campos uno por uno dentro de la tabla principal,
          EL NOMBRE DE CADA ARREGLO DEBE DE SER COMO EL NOMBRE DE LOS CAMPOS DE LA TABLA EN LA BASE DE DATOS ¬¬
          NOTA: No te equivoques y razona!
         -->
        <tr>
          <td><?php echo $consulta['codigo'];?></td>
          <td><?php echo $consulta['descripcion'];?></td>
          <td><?php echo $consulta['precio'];?></td>
          <td><?php echo $consulta['existencia'];?></td>
          <td><img src="<?php echo $consulta['imagen'];?>" alt="" width="150px"></td>
          <td><?php echo $consulta['vendedor'];?></td>
          

        
            <?php
              if(isset($_SESSION['u_rol'])){
                if($_SESSION['u_rol']=="Vendedor"|| $_SESSION['u_rol']=="administrador"){
            ?>
            
            <?php }else{ ?><td>
              <a class="btn btn-success" href="proceso_ventas.php?codigo=<?php echo $consulta['codigo'];?>&usuario=<?php echo $_SESSION['u_sesion']; ?>">
              Comprar</a>     </td>
             <?php      
            }
            }
            ?>

     
        </tr>
        <?php
          }
          include("cerrar_conexion.php");
        ?>
      </table>
    </center>

    

  </section>

   <!-- Funcion para preguntar antes de eliminar un registro  -->
   <script>
        //Iniciamos la funcion preguntar con un parametro de entrada en este caso credencial
        function preguntar(codigo){

          if(confirm('¿Estás seguro que deseas borrar?')){
            window.location.href= "eliminar_producto.php?codigo="+codigo;
          }
        }
    </script>
     <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>
</html>