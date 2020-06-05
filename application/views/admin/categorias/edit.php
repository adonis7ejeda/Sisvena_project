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
                        <h3 class="text-themecolor">Editar Categoria</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php if($this->session->flashdata("error")): ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <?php echo $this->session->flashdata("error"); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php endif; ?>

                                        <form action="<?php echo base_url(); ?>mantenimiento/categorias/update" method="post">
                                            <input type="hidden" value="<?php echo $categoria->id; ?>" name="idCategoria">
                                            <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-danger': '' ?>">
                                                <label class="form-control-label">Nombre</label>
                                                <input type="text" name="nombre" class="form-control <?php echo !empty(form_error("nombre"))? 'form-control-danger': '' ?>" value="<?php echo !empty(form_error("nombre"))? set_value("nombre"): $categoria->nombre; ?>">
                                                <?php echo form_error("nombre", "<div class='form-control-feedback'>", "</div>"); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Descripcion</label>
                                                <textarea name="descripcion" rows="5" class="form-control"><?php echo $categoria->descripcion; ?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info waves-effect waves-light m-r-10"><span class="fa fa-edit"></span> Editar</button>
                                        </form>
                                    </div>
                                </div>
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