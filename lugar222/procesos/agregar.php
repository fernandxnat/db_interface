<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $obj = new crud();

    $datos = array(
        $_POST['IDA'],
        $_POST['nombre']
        );
    

    echo $obj->agregar($datos);

?>