<?php
    require_once "clases/conexion.php";
    $obj = new Conexion();
    $conexion = $obj->conectar();
    
    $consulta = "SELECT clave_ejemplar,fecha_recolec,datos_adicionales,id_especie,id_municipio,id_donante FROM ejemplar";
    $result = mysqli_query($conexion, $consulta);
?>

<div>
    <table class="table table-hover table-condensed" id="tabla_especie">
        <thead>
            <tr style="background-color: #2bcc6e; color: white; font-weight: bold;">
                <th>Clave del ejemplar</th>
                <th>Fecha de recolección</th>
                <th>Datos adicionales</th>
                <th>ID especie</th>
                <th>ID municipio</th>
                <th>ID donante</th>
                <th>editar</th>
                <th>eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($mostrar = mysqli_fetch_row($result)){
            ?>
            <tr>
                <td><?php echo $mostrar[0] ?></td>
                <td><?php echo $mostrar[1] ?></td>
                <td><?php echo $mostrar[2] ?></td>
                <td><?php echo $mostrar[3] ?></td>
                <td><?php echo $mostrar[4] ?></td>
                <td><?php echo $mostrar[5] ?></td>
                <td>
                    <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
                        <span class="fa fa-pencil-square"></span>
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
                        <span class="fa fa-trash"></span>
                    </span>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>   
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tabla_especie').DataTable();
    } );
</script>