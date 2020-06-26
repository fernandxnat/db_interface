<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $obj = new crud();

    $datos = array(
        $_POST['ID'],
        $_POST['fecha'],
        $_POST['datos'],
        $_POST['id_especie'],
        $_POST['id_municipio'],
        $_POST['id_donante'],
        );
    

    echo $obj->agregar($datos);

?>