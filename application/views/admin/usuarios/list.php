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
                        <h3 class="text-themecolor">Listado Usuarios</h3>
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
                                        <a href="<?php echo base_url(); ?>administrador/usuarios/add" class="btn btn-info btn-flat"><span class="fa fa-plus"></span> Agregar Usuarios</a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="myTable" class="table table-bordered btn-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombres</th>
                                                    <th>Apellidos</th>
                                                    <th>Email</th>
                                                    <th>Rol</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!empty($usuarios)): ?>
                                                <?php foreach($usuarios as $usuario): ?>
                                                <tr>
                                                    <td><?php echo $usuario->id; ?></td>
                                                    <td><?php echo $usuario->nombres; ?></td>
                                                    <td><?php echo $usuario->apellidos; ?></td>
                                                    <td><?php echo $usuario->email; ?></td>
                                                    <td><?php echo $usuario->rol; ?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-view-usuario" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" value="<?php echo $usuario->id; ?>"><span class="fa fa-search"></span></button>

                                                            <a href="<?php echo base_url(); ?>administrador/usuarios/edit/<?php echo $usuario->id; ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>

                                                            <button type="button" class="btn btn-danger rmv-u" data-toggle="modal" data-target="#exampleModal2" value="<?php echo $usuario->id ?>"><span class="fa fa-trash"></span></button>

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
            <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1">Informacion Usuario</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body"></div>
                    </div>
                </div>
            </div>

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