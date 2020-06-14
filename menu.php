<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"> <img src="bazar_logo.jpg" alt=""> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#acerca">Acerca de nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php #contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="catalogo_producto.php">Catálogo</a>
          </li>
          <?php if (isset($_SESSION['u_rol'])){ if($_SESSION['u_rol']=='Vendedor'){?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="catalogo_vendedor.php">Mis productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="mis_ventas.php">Mis ventas</a>
          </li>
          <?php } elseif($_SESSION['u_rol']=='administrador'){ ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="vendedores.php">Vendedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="compradores.php">Compradores</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="ventas.php">Historial de ventas</a>
          </li> 
          <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="carrito.php">Carrito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="historial.php">Historial</a>
          </li>
          <?php
          } } ?>

        <?php if (isset($_SESSION['u_nombre'])){?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="insertar.php"><?php echo $_SESSION['u_nombre']; ?> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="cerrar_sesion.php">Salir</a>
          </li>
        <?php } else {?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="insertar.php">Registrarse</a>
          </li>
          <li class="nav-item" link>
            <a class="nav-link js-scroll-trigger" href="login.php">Iniciar sesión</a>
          </li>
        <?php
        }
        ?>
        </ul>
      </div>
    </div>
  </nav>