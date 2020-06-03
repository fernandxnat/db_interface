<?php
class Conexion{
    public static function Conectar(){
        define("servidor","localhost");
        define("nombre_bd", "qvfesuocbo");
        define("usuario","root");
        define("password", "");
        
        //$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf-8");
        
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password);//, $opciones);
            return $conexion;
        }catch(Exception $e){
            die("El error de onexion es: ". $e->getMessage());
        }
        
    }
}
//include_once '/bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id_especie,nombre_comun,familia_especie,genero_especie,nombre_especie,id_forma,nom059,cites,iucn FROM especie_sp";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="shortcut icon" href="8">
        <title>ECO JARDIN</title>
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
        
        <link rel="stylesheet" type="text/css" href="datatables.min.css">
        <link rel="stylesheet" type="text/css" href="datatablescar/css/dataTables.bootstrap4.min.css">
        
    </head>
    
    <body>
        <header>
            <h3 class="text-center text-light">ECO JARDIN</h3>
        </header>
        
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <button id="btnNuevo" type="button" class="btn btn-success">NUEVO</button>
                </div>
            </div>
        </div>
        
        
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="tabla_especie" class="table table-stripped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID especie</th>
                                <th>Nombre común</th>
                                <th>Familia</th>
                                <th>Género</th>
                                <th>Nombre de la especie</th>
                                <th>ID forma</th>
                                <th>NOM059</th>
                                <th>CITES</th>
                                <th>IUCN</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                            foreach($data as $dat){
                            ?>
                            <tr>
                                <td><?php echo $dat['id_especie'] ?></td>
                                <td><?php echo $dat['nombre_comun'] ?></td>
                                <td><?php echo $dat['familia_especie'] ?></td>
                                <td><?php echo $dat['genero_especie'] ?></td>
                                <td><?php echo $dat['nombre_especie'] ?></td>
                                <td><?php echo $dat['id_forma'] ?></td>
                                <td><?php echo $dat['nom059'] ?></td>
                                <td><?php echo $dat['cites'] ?></td>
                                <td><?php echo $dat['iucn'] ?></td>
                                <td>
                                    <div class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary btnEditar">Editar</button>
                                            <button class="btn btn-danger btnBorrar">Borrar</button>
                                        </div>
                                    </div>            
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        

        
    </body>
    
</html>