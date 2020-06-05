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
                        <h3 class="text-themecolor">Nuevo Usuario</h3>
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
                                <form action="<?php echo base_url(); ?>administrador/usuarios/store" method="post">
                                
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("nombres"))? 'has-danger': '' ?>">
                                                    <label for="nombres" class="form-control-label">Nombres</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("nombres"))? 'form-control-danger': '' ?>" name="nombres" id="nombres" value="<?php echo set_value("nombres"); ?>">
                                                    <?php echo form_error("nombres", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("apellidos"))? 'has-danger': '' ?>">
                                                    <label for="apellidos" class="form-control-label">Apellidos</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("apellidos"))? 'form-control-danger': '' ?>" name="apellidos" id="apellidos" value="<?php echo set_value("apellidos"); ?>">
                                                    <?php echo form_error("apellidos", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("telefono"))? 'has-danger': '' ?>">
                                                    <label for="telefono" class="form-control-label">Telefono</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("telefono"))? 'form-control-danger': '' ?>" name="telefono" id="telefono" value="<?php echo set_value("telefono"); ?>">
                                                    <?php echo form_error("telefono", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("email"))? 'has-danger': '' ?>">
                                                    <label for="email" class="form-control-label">Email</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("email"))? 'form-control-danger': '' ?>" name="email" id="email" value="<?php echo set_value("email"); ?>">
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
                                                    <input type="text" class="form-control <?php echo !empty(form_error("username"))? 'form-control-danger': '' ?>" name="username" id="username" value="<?php echo set_value("username"); ?>">
                                                    <?php echo form_error("username", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("password"))? 'has-danger': '' ?>">
                                                    <label for="password" class="form-control-label">Contraseña</label>
                                                    <input type="password" class="form-control <?php echo !empty(form_error("password"))? 'form-control-danger': '' ?>" name="password" id="password" value="<?php echo set_value("password"); ?>">
                                                    <?php echo form_error("password", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group <?php echo !empty(form_error("rol"))? 'has-danger': '' ?>">
                                                    <label for="rol" class="form-control-label">Asignar Rol</label>
                                                    <select name="rol" id="rol" class="form-control custom-select <?php echo !empty(form_error("rol"))? 'form-control-danger': '' ?>">
                                                        <option value="">--Select--</option>
                                                        <?php foreach ($roles as $rol): ?>
                                                        <option value="<?php echo $rol->id; ?>" <?php echo set_select("rol", $rol->id); ?>><?php echo $rol->nombre ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <?php echo form_error("rol", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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