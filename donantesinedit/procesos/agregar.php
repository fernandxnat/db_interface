<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $obj = new crud();

    $datos = array(
        $_POST['ID'],
        $_POST['nombre'],
        $_POST['ap1'],
        $_POST['ap2'],
        $_POST['tipo'],
        $_POST['idtip']
        );
    

    echo $obj->agregar($datos);

?>