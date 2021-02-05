    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal creacion clientes-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo cliente</h5>
        <a href="clientes.php" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
     <form method="post" id="formulario1">
     
              <div class="form-group">
                <label for="nombre_cliente" class="col-sm-3 control-label">Entidad</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  id="nombre_cliente" name="nombre_cliente" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label for="proceso_cliente" class="col-sm-3 control-label">Evaluación</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  id="proceso_cliente" name="proceso_cliente" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label for="responsable_cliente" class="col-sm-3 control-label">Responsable</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  id="responsable_cliente" name="responsable_cliente" autocomplete="off" required>
                </div>
              </div>
        </form>
        <div id="resp1" class="btn-success"></div>
      </div>
      <div class="modal-footer">
        <button type="button" id="btn-ingresar1" class="btn btn-info">Registrar</button>
      </div>
    </div>
  </div>
</div>
<!--Fin Modal creación de clientes-->