<!-- The Modal -->
<div class="modal" id="Editar_usuario<?php echo $row['id_usuario'];?>">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title bg-dark text-white">Agregar Producto</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

<form method="POST" action="update_editar_u.php">

      <div class="modal-body">

        <div class="form-group">
          <label for="txt">ID_USUARIO:</label>
          <input type="text" class="form-control" id="id_producto" name="id_usuario" value="<?php echo $row['id_usuario']?>" readonly>
        </div>

        <div class="form-group">
          <label for="txt">Nombre del Usuario:</label>
          <input type="text" class="form-control" id="nombre_producto" name="nombre_usuario" value="<?php echo $row['nombre_usuario']?>">
        </div>
        <div class="form-group">
          <label for="txt">Telefono</label>
          <input type="text" class="form-control" id="cantidad" name="telefono" value="<?php echo $row['telefono']?>">
        </div>

        <div class="form-group">
          <label for="txt">Correo</label>
          <input type="text" class="form-control" id="tipo" name="correo" value="<?php echo $row['correo']?>">
        </div>

        <div class="form-group">
          <label for="txt">Tipo_usuario</label>
          <input type="text" class="form-control" id="tipo" name="tipo_usuario" value="<?php echo $row['tipo_usuario']?>">
        </div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" data-bs-dismiss="modal" name="registrar_producto">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
</form>