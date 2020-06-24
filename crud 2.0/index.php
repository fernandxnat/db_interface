<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="shortcut icon" href="8">
        <title>ECO JARDIN</title>
        <?php require_once "scripts.php"; ?>
        
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card text-left">
                        <div class="card text-center">
                            <div class="card-header">
                            ECO JARDÍN
                            </div>
                        </div>
                        <div class="card-body">
                            <span class="btn btn-primary" data-toggle="modal" data-target="#agregarnuevosdatosmodal">
                                Nuevo <span class="fa fa-plus-square"></span>
                            </span>
                            <hr>
                            <div class="card text-center"><div id="tablaDataTable"></div></div>
                        </div>
                        <div class="card-footer text-muted">
                            By estudiantes LTIC
                        </div>
                    </div>
                </div>
            </div>
        </div>
 

<!-- Modal -->
<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frmnuevo">
              <label>ID especie</label>
              <input type="text" class="form-control input-sm" id="ID" name="ID">
              <label>Nombre común</label>
              <input type="text" class="form-control input-sm" id="nombre" name="nombre">
              <label>Familia</label>
              <input type="text" class="form-control input-sm" id="familia" name="familia">
              <label>Género</label>
              <input type="text" class="form-control input-sm" id="genero" name="genero">
              <label>Nombre de la especie</label>
              <input type="text" class="form-control input-sm" id="nombre_especie" name="nombre_especie">
              <label>ID forma</label>
              <input type="text" class="form-control input-sm" id="forma" name="forma">
              <label>NOM059</label>
              <input type="text" class="form-control input-sm" id="nom059" name="nom059">
              <label>CITES</label>
              <input type="text" class="form-control input-sm" id="cites" name="cites">
              <label>IUCN</label>
              <input type="text" class="form-control input-sm" id="iucn" name="iucn">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="btnNuevoRegistro" class="btn btn-primary">Agregar registro</button>
      </div>
    </div>
  </div>
</div>
        

<!-- ModalEditar -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmnuevoU">
              <input type="text" hidden="" id="IDU" name="IDU">
              <label>Nombre común</label>
              <input type="text" class="form-control input-sm" id="nombreU" name="nombreU">
              <label>Familia</label>
              <input type="text" class="form-control input-sm" id="familiaU" name="familiaU">
              <label>Género</label>
              <input type="text" class="form-control input-sm" id="generoU" name="generoU">
              <label>Nombre de la especie</label>
              <input type="text" class="form-control input-sm" id="nombre_especieU" name="nombre_especieU">
              <label>ID forma</label>
              <input type="text" class="form-control input-sm" id="formaU" name="formaU">
              <label>NOM059</label>
              <input type="text" class="form-control input-sm" id="nom059U" name="nom059U">
              <label>CITES</label>
              <input type="text" class="form-control input-sm" id="citesU" name="citesU">
              <label>IUCN</label>
              <input type="text" class="form-control input-sm" id="iucnU" name="iucnU">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
      </div>
    </div>
  </div>
</div>
        
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btnNuevoRegistro').click(function(){
            datos = $('#frmnuevo').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url:"procesos/agregar.php",
                success: function(){
                    $('#frmnuevo')[0].reset();
                    $('#tablaDataTable').load('tabla.php');
                    alertify.success("Registro agregado");
                },
                error: function(){
                    alertify.error("Error al agregar registro");
                }
            });
        });
        
        $('#btnActualizar').click(function(){
            datos = $('#frmnuevoU').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url:"procesos/actualizar.php",
                success: function(){
                    $('#tablaDataTable').load('tabla.php');
                    alertify.success("Registro actualizado");
                },
                error: function(){
                    alertify.error("Error al actualizar registro");
                }
            });
        });
    });
        
</script>


<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaDataTable').load('tabla.php');
    });
</script>

<script type="text/javascript">
    function agregaFrmActualizar(IDU){
        $.ajax({
            type:"POST",
            data:'ID=' + IDU,
            url:"procesos/obtenDatos.php",
            success: function(data){
                datos=jQuery.parseJSON(data);
                $('#IDU').val(datos['id_especie']);
                $('#nombreU').val(datos['nombre_comun']);
                $('#familiaU').val(datos['familia_especie']);
                $('#generoU').val(datos['genero_especie']);
                $('#nombre_especieU').val(datos['nombre_especie']);
                $('#formaU').val(datos['id_forma']);
                $('#nom059U').val(datos['nom059']);
                $('#citesU').val(datos['cites']);
                $('#iucnU').val(datos['iucn']);
            }
            
        });
    }
    
    function eliminarDatos(IDU){
        alertify.confirm('Eliminar registro', '¿Esta seguro de eliminar el registro?', 
        function(){
            $.ajax({
            type:"POST",
            data:'ID=' + IDU,
            url:"procesos/eliminar.php",
            success: function(){
                $('#tablaDataTable').load('tabla.php');
                alertify.success("Eliminado con éxito");
            }
            
        });
            
        },
        function(){});
        
    }
</script>
