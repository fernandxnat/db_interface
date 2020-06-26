<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

?>

<!doctype html>
<html>

    <head>
        <link rel="shortcut icon" href="icon.png" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login Ecojardin</title>
        
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../estilos.css">
        <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
    </head>
    
    <body >
        
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a href="pag_inicio.php" class="site-logo" align="center">
			         <img src="logo_1.png" alt="logo">
		        </a>
                <button class= "navbar-toggler" data-target= "#menu" data-toggle= "collapse" type="button">
                    <span class = "navbar-toggler-icon"></span>
                </button>
                <div class = "collapse navbar-collapse" id= "menu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
          <a class="nav-link" href="pag_inicio.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
                        <li class = "nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="despegable" href="#">Tablas</a>
                            <div class= "dropdown-menu">
                                <a class="dropdown-item" href="../crud%202.0/">Especie</a>
                                <a class="dropdown-item" href="../tipo_donante/"> Tipo Donante</a>
                                <a class="dropdown-item" href="../AUTOR%20TABLA/">Autor</a>
                                <a class="dropdown-item" href="../formavida/">Forma de Vida</a>
                                <a class="dropdown-item" href="../donante100/">Donante</a>
                                 <a class="dropdown-item" href="../crud%202.0%20-%20ejemplar/">Ejemplar</a>
                                 <a class="dropdown-item" href="../lugar222/">Lugar</a>


                            </div>
                        </li>
                       <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
                        <li class="nav-item">
          <a class="nav-link" href="../bd/logout.php" >Cerrar Sesión</a>
        </li>
                    </ul>
                </div>
            </nav>
        
            
        
<!--Main Navigation-->
            
            
            
        <div class="container"> 
                <div class="col-lg-12">
                    <div class="jumbotron">
                      <h2 class="text-center" size = 12> Bienvenido Usuario: <span class="badge badge-success"><?php echo $_SESSION["s_usuario"];?></span></h2>
                        <font size=50 face="Bebas Neue" color = "#148505"> 
                        </font>
                      <img src ="fondo inicio-100.jpg" ALIGN=center WIDTH=1000 HEIGHT=540>                          
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