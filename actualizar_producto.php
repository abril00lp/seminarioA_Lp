
<?php

  //Archivo de conexion
  include("abrir_conexion.php");
  session_start();
  $usuario= $_SESSION['u_sesion']; 


  //obtenemos la clave del registro a actualizar
  $Codigo = $_GET['codigo'];

  //Lista de Tablas
  $tabla_db = "producto"; 	   // TABLA DESEADA DE LA BASE DE DATOS
  $campos = "*";             // Campos de la tabla seleccionada
  //CONSULTA con condición where NOTA editar dependiendo a tu campo en este caso es credencial <<----
  $resultados = mysqli_query($conexion,"SELECT $campos FROM $tabla_db WHERE codigo = '$Codigo'");
                                                                      //_______________________    <<-----
  $consulta = mysqli_fetch_array($resultados)
?>

<!-- Solo contiene el codigo HTML del formulario -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
		<div class="col-lg-5 mx-auto">
        <center><h2>MODIFICAR PRODUCTO</h2></center>
         <br>
        
            <form method="POST" action="actualizar_prod_proceso.php" >
   
            <div class="form-group">
                <label for="cod">Código: </label>
                <input type="text" name="txtCodigo" class="form-control" id="cod" value="<?php echo $consulta['codigo'];?>" readonly="readonly">
            </div>

            <div class="form-group">
                <label for="desc">Descripción: &nbsp;</label>
                <input type="text" name="txtDescripcion" class="form-control" id="desc" value="<?php echo $consulta['descripcion'];?>">
            </div>

            <div class="form-group">
                <label for="prec">Precio: </label>
                <input type="text" name="txtPrecio" class="form-control" id="prec" value="<?php echo $consulta['precio'];?>">
            </div>

            <div class="form-group">
                <label for="exis">Existencia: </label>
                <input type="text" name="txtExistencia" class="form-control" id="exis" value="<?php echo $consulta['existencia'];?>">
            </div>

            <div class="form-group">
                <label for="img">Imagen: </label>
                <input type="text" name="txtImagen" class="form-control" id="img" value="<?php echo $consulta['imagen'];?>">
            </div>

            <div class="form-group">
                <label for="ven">Vendedor: </label>
                <input type="text" name="txtVendedor" class="form-control" id="ven" value="<?php echo $consulta['vendedor'];?>"> 
            </div>

            <button type="submit" class="btn btn-primary">Modificar</button>
            <a href="catalogo_producto.php"><input type="button" value="Regresar"></a>
            </form>
        
        


        </div>
    </div>
    </div>
    </section>

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

    </body>
</html>