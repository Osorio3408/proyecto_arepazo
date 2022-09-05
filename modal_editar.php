<!-- The Modal -->
<div class="modal" id="Editar<?php echo $row['id_producto'];?>">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title bg-dark text-white">Agregar Producto</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

<form method="POST" action="update_editar.php">

      <div class="modal-body">

        <div class="form-group">
          <label for="txt">ID_PRODUCTO:</label>
          <input type="text" class="form-control" id="id_producto" name="id_producto" value="<?php echo $row['id_producto']?>" readonly>
        </div>

        <div class="form-group">
          <label for="txt">Nombre del producto:</label>
          <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="<?php echo $row['nombre_producto']?>">
        </div>
        <div class="form-group">
          <label for="txt">Cantidad</label>
          <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $row['cantidad']?>">
        </div>

        <div class="form-group">
          <label for="txt">Tipo</label>
          <input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo $row['tipo']?>">
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