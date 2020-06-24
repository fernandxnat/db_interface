<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $obj = new crud();

    $datos = array(
        $_POST['ID'],
        $_POST['nombre'],
        $_POST['familia'],
        $_POST['genero'],
        $_POST['nombre_especie'],
        $_POST['forma'],
        $_POST['nom059'],
        $_POST['cites'],
        $_POST['iucn']
        );
    

    echo $obj->agregar($datos);

?>