<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $obj = new crud();

    $datos = array(
        $_POST['IDU'],
        $_POST['nombreU'],
        $_POST['familiaU'],
        $_POST['generoU'],
        $_POST['nombre_especieU'],
        $_POST['formaU'],
        $_POST['nom059U'],
        $_POST['citesU'],
        $_POST['iucnU']
        );
    

    echo $obj->actualizar($datos);

?>