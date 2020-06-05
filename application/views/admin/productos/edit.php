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
                        <h3 class="text-themecolor">Editar Producto</h3>
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
                                <form action="<?php echo base_url(); ?>mantenimiento/productos/update" method="post">
                                    <input type="hidden" name="idproducto" value="<?php echo $producto->id; ?>">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("codigo"))? 'has-danger': '' ?>">
                                                    <label for="codigo" class="form-control-label">Codigo</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("codigo"))? 'form-control-danger': '' ?>" name="codigo" id="codigo" value="<?php echo !empty(form_error("codigo"))? set_value("codigo"): $producto->codigo; ?>">
                                                    <?php echo form_error("codigo", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-danger': '' ?>">
                                                    <label for="nombre" class="form-control-label">Nombre</label>
                                                    <input type="text" class="form-control <?php echo !empty(form_error("nombre"))? 'form-control-danger': '' ?>" name="nombre" id="nombre" value="<?php echo !empty(form_error("codigo"))? set_value("nombre"): $producto->nombre; ?>">
                                                    <?php echo form_error("nombre", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("vencimiento"))? 'has-danger': '' ?>">
                                                    <label for="vencimiento" class="form-control-label">Fecha Vencimiento</label>
                                                    <input class="form-control <?php echo !empty(form_error("vencimiento"))? 'form-control-danger': '' ?>" type="date" name="vencimiento" id="vencimiento" value="<?php echo !empty(form_error("vencimiento"))? set_value("vencimiento"): $producto->vencimiento; ?>">
                                                    <?php echo form_error("vencimiento", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("categoria"))? 'has-danger': '' ?>">
                                                    <label for="categoria" class="form-control-label">Categoria</label>
                                                    <select name="categoria" id="categoria" class="form-control custom-select <?php echo !empty(form_error("categoria"))? 'form-control-danger': '' ?>">
                                                        <option value="">--Select--</option>
                                                        <?php if(form_error("categoria") != false || set_value("categoria") != false): ?>
                                                            <?php foreach ($categorias as $categoria): ?>
                                                                <option value="<?php echo $categoria->id; ?>" <?php echo set_select("categoria", $categoria->id); ?>><?php echo $categoria->nombre ?></option>
                                                            <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <?php foreach ($categorias as $categoria): ?>
                                                                <option value="<?php echo $categoria->id; ?>" <?php echo $categoria->id == $producto->categorias_id ? 'selected': '' ?> ><?php echo $categoria->nombre ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
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
                                                    <input type="text" class="form-control <?php echo !empty(form_error("precio"))? 'form-control-danger': '' ?>" name="precio" id="precio" value="<?php echo !empty(form_error("precio"))? set_value("precio"): $producto->precio; ?>">
                                                    <?php echo form_error("precio", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group <?php echo !empty(form_error("stock"))? 'has-danger': '' ?>">
                                                    <label for="stock" class="form-control-label <?php echo !empty(form_error("stock"))? 'form-control-danger': '' ?>">Stock</label>
                                                    <input type="number" class="form-control" name="stock" id="stock" value="<?php echo !empty(form_error("codigo"))? set_value("stock"): $producto->stock; ?>">
                                                    <?php echo form_error("stock", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <textarea name="descripcion" rows="5" class="form-control" required><?php echo $producto->descripcion; ?></textarea>
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