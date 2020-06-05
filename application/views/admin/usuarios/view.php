<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Nombres</label>
            <input type="text" class="form-control" value="<?php echo $usuario->nombres; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label>Apellidos</label>
            <input type="text" class="form-control" value="<?php echo $usuario->apellidos; ?>" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Telefono</label>
            <input type="text" class="form-control" value="<?php echo $usuario->telefono; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label>Email</label>
            <input type="text" class="form-control" value="<?php echo $usuario->email; ?>" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Username</label>
            <input type="text" class="form-control" value="<?php echo $usuario->username; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
            <label>Rol</label>
            <input type="Text" class="form-control" value="<?php echo $usuario->rol; ?>" readonly>
        </div>
    </div>
</form>