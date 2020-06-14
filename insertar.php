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
		<div class="col-lg-5 mx-auto"> 
		<center><h1>USUARIO NUEVO</h1></center>
        <br>
        
          <form method="POST" action="insertar_proceso.php" >

          <div class="form-group">
           <label for="nom">Nombre: </label>
           <input type="text" name="txtNombre" class="form-control" id="nom">
          </div>

          <div class="form-group">
            <label for="apell">Apellidos: &nbsp;</label>
            <input type="text" name="txtApellidos" class="form-control" id="apell" >
          </div>

            <div class="form-group">
                <label for="dir">Dirección: </label>
                <input type="text" name="txtDireccion" class="form-control" id="dir">
            </div>

            <div class="form-group">
                <label for="tel">Telefono: </label>
                <input type="text" name="txtTelefono" class="form-control" id="tel">
            </div>

            <div class="form-group">
                <label for="correo">Correo electronico: </label>
                <input type="text" name="txtCorreo_electronico" class="form-control" id="correo">
            </div>

            <div class="form-group">
                <label for="nomU">Nombre usuario: </label>
                <input type="text" name="txtNombre_usuario" class="form-control" id="nomU">
            </div>

            
            <div class="form-group">
                <label for="pass">Contraseña: </label>
                <input type="text" name="txtPassword" class="form-control" id="pass">
            </div>

            <div class="form-group">
                <label for="tipoU" type="text" name="Tipo_usuario">Tipo de usuario </label>
                <br>
                <select name="tipoU" id="tipoU"> 
                <OPTION value="Vendedor">Vendedor</OPTION>
                <OPTION value="Comprador">Comprador</OPTION>
                </select>

            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="index2.php"><input type="button" value="Regresar"></a>
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






