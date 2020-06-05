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
                        <h3 class="text-themecolor">Editar Cliente</h3>
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
                                <form action="<?php echo base_url(); ?>mantenimiento/clientes/update" method="post">
                                <input type="hidden" name="idcliente" value="<?php echo $cliente->id;?>">

                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("nombres"))? 'has-danger': '' ?>">
                                                    <label for="nombres" class="form-control-label">Nombres</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("nombres"))? 'form-control-danger': '' ?>" name="nombres" id="nombres" value="<?php echo form_error("nombres") != false ? set_value("nombres"): $cliente->nombres; ?>">
                                                    <?php echo form_error("nombres", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("tipocliente"))? 'has-danger': '' ?>">
                                                    <label for="tipocliente" class="form-control-label">Tipo Cliente</label>
                                                    <select name="tipocliente" id="tipocliente" class="form-control custom-select <?php echo !empty(form_error("tipocliente"))? 'form-control-danger': '' ?>">
                                                        <option value="">--Select--</option>
                                                        <?php if(form_error("tipocliente") != false || set_value("tipocliente") != false): ?>
                                                            <?php foreach ($tipoclientes as $tipocliente): ?>
                                                                <option value="<?php echo $tipocliente->id; ?>" <?php echo set_select("tipocliente", $tipocliente->id); ?>><?php echo $tipocliente->nombre ?></option>
                                                            <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <?php foreach ($tipoclientes as $tipocliente): ?>
                                                                <option value="<?php echo $tipocliente->id; ?>" <?php echo $tipocliente->id == $cliente->tipo_cliente_id ? 'selected': '' ?> ><?php echo $tipocliente->nombre ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                    <?php echo form_error("tipocliente", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("tipodocumento"))? 'has-danger': '' ?>">
                                                    <label for="tipodocumento" class="form-control-label">Tipo Documento</label>
                                                    <select name="tipodocumento" id="tipodocumento" class="form-control custom-select <?php echo !empty(form_error("tipodocumento"))? 'form-control-danger': '' ?>">
                                                        <option value="">--Select--</option>
                                                        <?php if(form_error("tipodocumento") != false || set_value("tipodocumento") != false): ?>
                                                            <?php foreach ($tipodocumentos as $tipodocumento): ?>
                                                                <option value="<?php echo $tipodocumento->id; ?>" <?php echo set_select("tipodocumento", $tipodocumento->id); ?>><?php echo $tipodocumento->nombre ?></option>
                                                            <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <?php foreach ($tipodocumentos as $tipodocumento): ?>
                                                                <option value="<?php echo $tipodocumento->id; ?>" <?php echo $tipodocumento->id == $cliente->tipo_documento_id ? 'selected': '' ?> ><?php echo $tipodocumento->nombre ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                    <?php echo form_error("tipodocumento", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("numero"))? 'has-danger': '' ?>">
                                                    <label for="numero" class="form-control-label">Numero Documento</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("numero"))? 'form-control-danger': '' ?>" name="numero" id="numero" value="<?php echo form_error("numero") != false ? set_value("numero"): $cliente->num_documento; ?>">
                                                    <?php echo form_error("numero", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("telefono"))? 'has-danger': '' ?>">
                                                    <label for="telefono" class="form-control-label">Telefono</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("telefono"))? 'form-control-danger': '' ?>" name="telefono" id="telefono" value="<?php echo form_error("telefono") != false ? set_value("telefono"): $cliente->telefono; ?>">
                                                    <?php echo form_error("telefono", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("direccion"))? 'has-danger': '' ?>">
                                                    <label for="direccion" class="form-control-label">Direccion</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("direccion"))? 'form-control-danger': '' ?>" name="direccion" id="direccion" value="<?php echo form_error("direccion") != false ? set_value("direccion"): $cliente->direccion; ?>">
                                                    <?php echo form_error("direccion", "<div class='form-control-feedback'>", "</div>"); ?>
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