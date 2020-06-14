<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
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
        <center><h1>INICIA SESIÓN</h1></center>
          <br>
            <form method="POST" action="login_proceso.php" >

            <div class="form-group">
                <label for="nomU">Nombre usuario: </label>
                <input type="text" name="txtNombre_usuario" class="form-control" id="nomU">
            </div>

            <div class="form-group">
                <label for="pass">Contraseña: </label>
                <input type="password" name="pass" class="form-control" id="pass">
            </div>

            <button type="submit" class="btn btn-primary">Entrar</button>
            <a href=""><input type="button" value="Cancelar"></a>
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



