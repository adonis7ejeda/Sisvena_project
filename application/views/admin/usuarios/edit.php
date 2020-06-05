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
                        <h3 class="text-themecolor">Editar Usuario</h3>
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
                                <form action="<?php echo base_url(); ?>administrador/usuarios/update" method="post">
                                <input type="hidden" name="idusuario" value="<?php echo $usuario->id;?>">

                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("nombres"))? 'has-danger': '' ?>">
                                                    <label for="nombres" class="form-control-label">Nombres</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("nombres"))? 'form-control-danger': '' ?>" name="nombres" id="nombres" value="<?php echo form_error("nombres") != false ? set_value("nombres"): $usuario->nombres; ?>">
                                                    <?php echo form_error("nombres", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("apellidos"))? 'has-danger': '' ?>">
                                                    <label for="apellidos" class="form-control-label">Apellidos</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("apellidos"))? 'form-control-danger': '' ?>" name="apellidos" id="apellidos" value="<?php echo form_error("apellidos") != false ? set_value("apellidos"): $usuario->apellidos; ?>">
                                                    <?php echo form_error("apellidos", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("telefono"))? 'has-danger': '' ?>">
                                                    <label for="telefono" class="form-control-label">Telefono</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("telefono"))? 'form-control-danger': '' ?>" name="telefono" id="telefono" value="<?php echo form_error("telefono") != false ? set_value("telefono"): $usuario->telefono; ?>">
                                                    <?php echo form_error("telefono", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("email"))? 'has-danger': '' ?>">
                                                    <label for="email" class="form-control-label">Email</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("email"))? 'form-control-danger': '' ?>" name="email" id="email" value="<?php echo form_error("email") != false ? set_value("email"): $usuario->email; ?>">
                                                    <?php echo form_error("email", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("username"))? 'has-danger': '' ?>">
                                                    <label for="username" class="form-control-label">Username</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("username"))? 'form-control-danger': '' ?>" name="username" id="username" value="<?php echo form_error("username") != false ? set_value("username"): $usuario->username; ?>">
                                                    <?php echo form_error("username", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("rol"))? 'has-danger': '' ?>">
                                                    <label for="rol" class="form-control-label">Rol</label>
                                                    <select name="rol" id="rol" class="form-control custom-select <?php echo !empty(form_error("rol"))? 'form-control-danger': '' ?>">
                                                        <option value="">--Select--</option>
                                                        <?php if(form_error("rol") != false || set_value("rol") != false): ?>
                                                            <?php foreach ($roles as $rol): ?>
                                                                <option value="<?php echo $rol->id; ?>" <?php echo set_select("rol", $rol->id); ?>><?php echo $rol->nombre ?></option>
                                                            <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <?php foreach ($roles as $rol): ?>
                                                                <option value="<?php echo $rol->id; ?>" <?php echo $rol->id == $usuario->roles_id ? 'selected': '' ?> ><?php echo $rol->nombre ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                    <?php echo form_error("rol", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-r-10"><span class="fa fa-edit"></span> Editar</button>
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