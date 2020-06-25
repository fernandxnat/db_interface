<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $obj = new crud();

    $datos = array(
        $_POST['IDU'],
        $_POST['nombreU']
        );
    

    echo $obj->actualizar($datos);

?>