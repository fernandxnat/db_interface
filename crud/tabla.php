<?php
    require_once "clases/conexion.php";
    $obj = new Conexion();
    $conexion = $obj->Conectar();
    $consulta = "SELECT id_especie, nombre_comun, familia_especie, genero_especie, nombre_especie, id_forma, nom059, cites, iucn FROM especie_sp";
    $result = mysqli_query($conexion, $consulta);
?>

<div>
    <table class="table table-hover table-condensed" id="tabla_especie">
        <thead>
            <tr style="background-color: #2bcc6e; color: white; font-weight: bold;">
                <th>ID especie</th>
                <th>Nombre común</th>
                <th>Familia</th>
                <th>Género</th>
                <th>Nombre de la especie</th>
                <th>ID forma</th>
                <th>NOM059</th>
                <th>CITES</th>
                <th>IUCN</th>
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
                <td><?php echo $mostrar[6] ?></td>
                <td><?php echo $mostrar[7] ?></td>
                <td><?php echo $mostrar[8] ?></td>
                <td>
                    <span class="btn btn-warning btn-xs">
                        <span class="fa fa-pencil-square"></span>
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger btn-xs">
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