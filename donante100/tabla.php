<?php
    require_once "clases/conexion.php";
    $obj = new Conexion();
    $conexion = $obj->conectar();
    
    $consulta = "SELECT id_donante, nombre_donante, apellido_1, apellido_2, tipo, id_tipo_donante FROM donante";
    $result = mysqli_query($conexion, $consulta);
?>

<div>
    <table class="table table-hover table-condensed" id="tabla_especie">
        <thead>
            <tr style="background-color: #2bcc6e; color: white; font-weight: bold;">
                <th>ID Donante</th>
                <th>Nombre del Donante</th>
                <th>Apellido 1</th>
                <th>Apellido 2</th>
                <th>Tipo</th>
                <th>ID tipo del donante</th>
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