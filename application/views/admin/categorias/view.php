<form>
    <div class="form-group">
        <label for="recipient-name" class="control-label">Nombre</label>
        <input type="text" class="form-control" id="recipient-name1" value="<?php echo $categoria->nombre; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="message-text" class="control-label">Descripcion</label>
        <textarea class="form-control" id="message-text1" rows="5" readonly><?php echo $categoria->descripcion; ?></textarea>
    </div>
</form>