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
                        <h3 class="text-themecolor">Nuevo Producto</h3>
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
                                <form action="<?php echo base_url(); ?>mantenimiento/productos/store" method="post">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("codigo"))? 'has-danger': '' ?>">
                                                    <label for="codigo" class="form-control-label">Codigo</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("codigo"))? 'form-control-danger': '' ?>" name="codigo" id="codigo" value="<?php echo set_value("codigo"); ?>">
                                                    <?php echo form_error("codigo", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-danger': '' ?>">
                                                    <label for="nombre" class="form-control-label">Nombre</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("nombre"))? 'form-control-danger': '' ?>" name="nombre" id="nombre" value="<?php echo set_value("nombre"); ?>">
                                                    <?php echo form_error("nombre", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("vencimiento"))? 'has-danger': '' ?>">
                                                    <label for="vencimiento" class="form-control-label">Fecha Vencimiento</label>
                                                    <input class="form-control <?php echo !empty(form_error("vencimiento"))? 'form-control-danger': '' ?>" type="date" name="vencimiento" id="vencimiento" value="<?php echo set_value("vencimiento"); ?>">
                                                    <?php echo form_error("vencimiento", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("categoria"))? 'has-danger': '' ?>">
                                                    <label for="categoria" class="form-control-label">Categoria</label>
                                                    <select name="categoria" id="categoria" class="form-control custom-select <?php echo !empty(form_error("categoria"))? 'form-control-danger': '' ?>">
                                                        <option value="">--Select--</option>
                                                        <?php foreach ($categorias as $categoria): ?>
                                                        <option value="<?php echo $categoria->id; ?>" <?php echo set_select("categoria", $categoria->id); ?>><?php echo $categoria->nombre ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <?php echo form_error("categoria", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("precio"))? 'has-danger': '' ?>">
                                                    <label for="precio" class="form-control-label">Precio</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("precio"))? 'form-control-danger': '' ?>" name="precio" id="precio" value="<?php echo set_value("precio"); ?>">
                                                    <?php echo form_error("precio", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("stock"))? 'has-danger': '' ?>">
                                                    <label for="stock" class="form-control-label">Stock</label>
                                                    <input type="number" class="form-control <?php echo !empty(form_error("stock"))? 'form-control-danger': '' ?>" name="stock" id="stock" value="<?php echo set_value("stock"); ?>">
                                                    <?php echo form_error("stock", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <textarea name="descripcion" rows="5" class="form-control"></textarea>
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