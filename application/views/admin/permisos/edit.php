        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Editar Permiso</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <?php if($this->session->flashdata("error")): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?php echo $this->session->flashdata("error"); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                                <form action="<?php echo base_url(); ?>administrador/permisos/update" method="post" class="form-horizontal">
                                <input type="hidden" name="idpermiso" value="<?php echo $permiso->id; ?>">
                                
                                    <div class="form-body">
                                        <div class="m-t-0 m-b-40"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Asignar Rol</label>
                                                    <div class="col-md-9">
                                                        <select name="rol" id="rol" class="form-control custom-select" disabled>
                                                            <option value="">--Select--</option>
                                                                <?php foreach ($roles as $rol): ?>
                                                                    <option value="<?php echo $rol->id; ?>" <?php echo $rol->id == $permiso->roles_id ? 'selected': '' ?>><?php echo $rol->nombre ?></option>
                                                                <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Menus</label>
                                                    <div class="col-md-9">
                                                        <select name="menu" id="menu" class="form-control custom-select" disabled>
                                                            <option value="">--Select--</option>
                                                                <?php foreach ($menus as $menu): ?>
                                                                    <option value="<?php echo $menu->id; ?>" <?php echo $menu->id == $permiso->menus_id ? 'selected': '' ?>><?php echo $menu->nombre ?></option>
                                                                <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-t-0 m-b-40"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row <?php echo !empty(form_error("read"))? 'has-danger': '' ?>">
                                                    <label class="control-label text-right col-md-3">Leer</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-list">
                                                            <label class="custom-control custom-radio">
                                                                <input name="read" type="radio" value="1" class="custom-control-input" <?php echo $permiso->read == 1 ? 'checked': '' ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input name="read" type="radio" value="0" class="custom-control-input" <?php echo $permiso->read == 0 ? 'checked': '' ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">No</span>
                                                            </label>
                                                        </div>
                                                        <?php echo form_error("read", "<div class='form-control-feedback'>", "</div>"); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row <?php echo !empty(form_error("insert"))? 'has-danger': '' ?>">
                                                    <label class="control-label text-right col-md-3">Agregar</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-list">
                                                            <label class="custom-control custom-radio">
                                                                <input name="insert" type="radio" value="1" class="custom-control-input" <?php echo $permiso->insert == 1 ? 'checked': '' ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input name="insert" type="radio" value="0" class="custom-control-input" <?php echo $permiso->insert == 0 ? 'checked': '' ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">No</span>
                                                            </label>
                                                        </div>
                                                        <?php echo form_error("insert", "<div class='form-control-feedback'>", "</div>"); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-t-0 m-b-40"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row <?php echo !empty(form_error("update"))? 'has-danger': '' ?>">
                                                    <label class="control-label text-right col-md-3">Editar</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-list">
                                                            <label class="custom-control custom-radio">
                                                                <input name="update" type="radio" value="1" class="custom-control-input" <?php echo $permiso->update == 1 ? 'checked': '' ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input name="update" type="radio" value="0" class="custom-control-input" <?php echo $permiso->update == 0 ? 'checked': '' ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">No</span>
                                                            </label>
                                                        </div>
                                                        <?php echo form_error("update", "<div class='form-control-feedback'>", "</div>"); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row <?php echo !empty(form_error("delete"))? 'has-danger': '' ?>">
                                                    <label class="control-label text-right col-md-3">Eliminar</label>
                                                    <div class="col-md-9">
                                                        <div class="radio-list">
                                                            <label class="custom-control custom-radio">
                                                                <input name="delete" type="radio" value="1" class="custom-control-input" <?php echo $permiso->delete == 1 ? 'checked': '' ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">Si</span>
                                                            </label>
                                                            <label class="custom-control custom-radio">
                                                                <input name="delete" type="radio" value="0" class="custom-control-input" <?php echo $permiso->delete == 0 ? 'checked': '' ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description">No</span>
                                                            </label>
                                                        </div>
                                                        <?php echo form_error("delete", "<div class='form-control-feedback'>", "</div>"); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-t-0 m-b-40"></div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10"><span class="fa fa-save"></span> Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->