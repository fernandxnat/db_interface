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
          <form>
              <label></label>
              <input type="" name="">
              <label></label>
              <input type="" name="">
              <label></label>
              <input type="" name="">
              <label></label>
              <input type="" name="">
              <label></label>
              <input type="" name="">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        

        
    </body>
    
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaDataTable').load('tabla.php');
    });
</script>
