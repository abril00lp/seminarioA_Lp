<?php
  include("abrir_conexion.php");
  session_start();
  $usuario= $_SESSION['u_sesion']; 

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
		<div class="col-lg-6 mx-auto"> 
		<center><h1>PRODUCTO NUEVO</h1></center>
        <br>
        
            <form method="POST" action="inser_producto_proceso.php" enctype="multipart/form-data">

            <div class="form-group">
                <label for="descrip">Descripción: &nbsp;</label>
                <input type="text" name="txtDescripcion" class="form-control" id="descrip" >
            </div>

            <div class="form-group">
                <label for="pre">Precio: </label>
                <input type="text" name="txtPrecio" class="form-control" id="pre">
            </div>

            <div class="form-group">
                <label for="exis">Existencia: </label>
                <input type="text" name="txtExistencia" class="form-control" id="exis">
            </div>

            <div class="form-group">
                <label for="img">Imagen: </label>
                <input type="file" name="txtImagen" class="form-control" id="img">
            </div>

            <!--<div class="form-group">
                <label for="ven">Vendedor: </label>
                <input type="text" name="txtVendedor" class="form-control" id="ven">
            </div>-->
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="index.php"><input type="button" value="Regresar"></a>
            </form>
        
		</div>
	</div>
  </div>
  </section>
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
