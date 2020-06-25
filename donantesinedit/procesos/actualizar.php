<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $obj = new crud();

    $datos = array(
        $_POST['IDU'],
        $_POST['nombreU'],
        $_POST['ap1U'],
        $_POST['ap2U'],
        $_POST['tipoU'],
        $_POST['idtipU']
        );
    

    echo $obj->actualizar($datos);

?>