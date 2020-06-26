<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $obj = new crud();

    $datos = array(
        $_POST['IDU'],
        $_POST['fechaU'],
        $_POST['datosU'],
        $_POST['id_especieU'],
        $_POST['id_municipioU'],
        $_POST['id_donanteU'],
        );
    

    echo $obj->actualizar($datos);

?>