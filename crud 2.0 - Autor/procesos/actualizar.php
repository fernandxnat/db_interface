<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $obj = new crud();

    $datos = array(
        $_POST['IDU'],
        $_POST['nombreU'],
        $_POST['apellido1U'],
        $_POST['apellido2U']
        );
    

    echo $obj->actualizar($datos);

?>