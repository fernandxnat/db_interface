<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

?>

<!doctype html>
<html>

    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login Ecojardin</title>
        
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../estilos.css">
        <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
    </head>
    
    <body >
<!--Main Navigation-->
 
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="pag_inicio.php" class="site-logo">
			<img src="logo_1.png" alt="logo">
		</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="pag_inicio.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
        
        <li class="nav-item">
          <a class="nav-link" href="../bd/logout.php" >Cerrar Sesion</a>
        </li>
      </ul>
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!--Main Navigation-->
        <div class="container"> 
                <div class="col-lg-12">
                    <div class="jumbotron">
                      <h2 class="text-left" size = 12> Bienvenido Usuario: <span class="badge badge-success"><?php echo $_SESSION["s_usuario"];?></span></h2>
                        <font size=50 face="Bebas Neue" color = "#148505"> 
                        <h2 align="center"> MENU</h2></font>
                        <h4 class= "display-10 text-center"> Selecciona la tabla que quieras editar</h4>
                        <button type="button" class="btn btn-secondary btn-lg btn-block">Especie</button>
                         <button type="button" class="btn btn-secondary btn-lg btn-block">Ejemplar</button>
                    </div>
                </div>
        </div>


     <script src="../jquery/jquery-3.3.1.min.js"></script>    
     <script src="../bootstrap/js/bootstrap.min.js"></script>    
     <script src="../popper/popper.min.js"></script>    
        
     <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="../codigo.js"></script>    
    </body>
</html>