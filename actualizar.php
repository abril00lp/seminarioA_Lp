
<?php
/* Archivo principal que contiene
   el llenado automatico de el registro a modificar
   By Prof Omar Toxqui */

  //Archivo de conexion
  include("abrir_conexion.php");

  session_start();
  $usuario= $_SESSION['u_sesion']; 

  //obtenemos la clave del registro a actualizar
  $Nombre_usuario = $_GET['Nombre_usuario'];

  //Lista de Tablas
  $tabla_db = "usuario"; 	   // TABLA DESEADA DE LA BASE DE DATOS
  $campos = "*";             // Campos de la tabla seleccionada
  //CONSULTA con condición where NOTA editar dependiendo a tu campo en este caso es credencial <<----
  $resultados = mysqli_query($conexion,"SELECT $campos FROM $tabla_db WHERE Nombre_usuario = '$Nombre_usuario'");
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
        <center><h2>MODIFICAR REGISTRO</h2></center>
         <br>
        
            <form method="POST" action="actualizar_proceso.php" >
   
            <div class="form-group">
                <label for="nom">Nombre: </label>
                <input type="text" name="txtNombre" class="form-control" id="nom" value="<?php echo $consulta['Nombre'];?>">
            </div>

            <div class="form-group">
                <label for="apell">Apellidos: &nbsp;</label>
                <input type="text" name="txtApellidos" class="form-control" id="apell" value="<?php echo $consulta['Apellidos'];?>">
            </div>

            <div class="form-group">
                <label for="dir">Dirección: </label>
                <input type="text" name="txtDireccion" class="form-control" id="dir" value="<?php echo $consulta['Direccion'];?>">
            </div>

            <div class="form-group">
                <label for="tel">Telefono: </label>
                <input type="text" name="txtTelefono" class="form-control" id="tel" value="<?php echo $consulta['Telefono'];?>">
            </div>

            <div class="form-group">
                <label for="correo">Correo electronico: </label>
                <input type="text" name="txtCorreo_electronico" class="form-control" id="correo" value="<?php echo $consulta['Correo_electronico'];?>">
            </div>

            <div class="form-group">
                <label for="nomU">Nombre usuario: </label>
                <input type="text" name="txtNombre_usuario" class="form-control" id="nomU" value="<?php echo $consulta['Nombre_usuario'];?>" readonly="readonly"> 
            </div>

            
            <div class="form-group">
                <label for="pass">Contraseña: </label>
                <input type="text" name="txtPassword" class="form-control" id="pass" value="<?php echo $consulta['Password'];?>">
            </div>

            

            <button type="submit" class="btn btn-primary">Modificar</button>
            <a href="index2.php"><input type="button" value="Regresar"></a>
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