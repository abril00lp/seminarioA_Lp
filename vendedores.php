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
		<div class="col-lg-12 mx-auto"> 
      <br>
  <center><h1>VENDEDORES</h1></center>
    <!-- INICIA BOTON -->
    <center>
      <a href="insertar.php"><Button>Insertar</Button></a>
    </center>
    <br>
    <!-- INICIA Tabla de CONSULTA -->
    <center>
      <table border="1">
        <tr>
          <th width="10%">Nombre</th>
          <th width="15%">Apellidos</th>
          <th width="20%">Dirección</th>
          <th width="12%">Telefono</th>
          <th width="15%">Correo electronico</th>
          <th width="15%">Nombre usuario</th>
          <th width="10%">Contraseña</th>
          <th width="25%">Tipo de usuario</th>
        </tr>
        <?php
          //Lista de Tablas
          $tabla_db = "usuario"; 	   // TABLA DESEADA DE LA BASE DE DATOS
          $campos = "*";             // Campos de la tabla seleccionada
          //CONSULTAR
          $resultados = mysqli_query($conexion,"SELECT $campos FROM $tabla_db WHERE Tipo_usuario = 'Vendedor'");
          while($consulta = mysqli_fetch_array($resultados))
        {?>
        
        <tr>
          <td><?php echo $consulta['Nombre'];?></td>
          <td><?php echo $consulta['Apellidos'];?></td>
          <td><?php echo $consulta['Direccion'];?></td>
          <td><?php echo $consulta['Telefono'];?></td>
          <td><?php echo $consulta['Correo_electronico'];?></td>
          <td><?php echo $consulta['Nombre_usuario'];?></td>
          <td><?php echo $consulta['Password'];?></td>
          <td><?php echo $consulta['Tipo_usuario'];?></td>
          <td>
            <a href="actualizar.php?Nombre_usuario=<?php echo $consulta['Nombre_usuario'];?>"><Button>Actualizar</Button></a>
            <a href="#" onclick="preguntar('<?php echo $consulta['Nombre_usuario'];?>')"><button>Eliminar</button></a>
          </td>
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
        function preguntar(Nombre_usuario){
          if(confirm('¿Estás seguro que deseas borrar?')){
            window.location.href= "eliminar.php?Nombre_usuario="+Nombre_usuario;
          }
        }
    </script>
</body>
</html>