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
                        <h3 class="text-themecolor">Listado Permisos</h3>
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
                                        <a href="<?php echo base_url(); ?>administrador/permisos/add" class="btn btn-info btn-flat"><span class="fa fa-plus"></span> Agregar Permiso</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="myTable" class="table table-bordered btn-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Menu</th>
                                                    <th>Rol</th>
                                                    <th>Leer</th>
                                                    <th>Insertar</th>
                                                    <th>Actualizar</th>
                                                    <th>Eliminar</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!empty($permisos)): ?>
                                                <?php foreach($permisos as $permiso): ?>
                                                <tr>
                                                    <td><?php echo $permiso->id; ?></td>
                                                    <td><?php echo $permiso->menu; ?></td>
                                                    <td><?php echo $permiso->rol; ?></td>
                                                    <td>
                                                        <?php if ($permiso->read == 0): ?>
                                                            <span class="fa fa-times"></span>
                                                        <?php else: ?>
                                                            <span class="fa fa-check"></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($permiso->insert == 0): ?>
                                                            <span class="fa fa-times"></span>
                                                        <?php else: ?>
                                                            <span class="fa fa-check"></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($permiso->update == 0): ?>
                                                            <span class="fa fa-times"></span>
                                                        <?php else: ?>
                                                            <span class="fa fa-check"></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($permiso->delete == 0): ?>
                                                            <span class="fa fa-times"></span>
                                                        <?php else: ?>
                                                            <span class="fa fa-check"></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">

                                                            <a href="<?php echo base_url(); ?>administrador/permisos/edit/<?php echo $permiso->id; ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>

                                                            <button type="button" class="btn btn-danger rmv-pe" data-toggle="modal" data-target="#exampleModal2" value="<?php echo $permiso->id ?>"><span class="fa fa-trash"></span></button>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
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

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5>¿Esta seguro que desea eliminar?</h5>
                        </div>
                        <div class="modal-footer">
                        <a class="btn btn-danger btn-remove"><span class="fa fa-trash"></span> Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>