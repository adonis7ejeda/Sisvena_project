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
                        <h3 class="text-themecolor">Listado Productos</h3>
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
                                        <?php if($permisos->insert == 1): ?>
                                            <a href="<?php echo base_url(); ?>mantenimiento/productos/add" class="btn btn-info btn-flat"><span class="fa fa-plus"></span> Agregar Productos</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="myTable" class="table table-bordered btn-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Codigo</th>
                                                    <th>Nombre</th>
                                                    <th>Precio</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!empty($productos)): ?>
                                                <?php foreach($productos as $producto): ?>
                                                <tr>
                                                    <td><?php echo $producto->id; ?></td>
                                                    <td><?php echo $producto->codigo; ?></td>
                                                    <td><?php echo $producto->nombre; ?></td>
                                                    <td><?php echo $producto->precio; ?></td>
                                                    <?php $dataproducto = $producto->id."*".$producto->codigo."*".$producto->nombre."*".$producto->vencimiento."*".$producto->categoria."*".$producto->precio."*".$producto->stock."*".$producto->descripcion; ?>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-view-producto" data-toggle="modal" data-target=".bd-example-modal-lg" value="<?php echo $dataproducto; ?>"><span class="fa fa-search"></span></button>
                                                            
                                                            <?php if($permisos->update == 1): ?>
                                                                <a href="<?php echo base_url(); ?>mantenimiento/productos/edit/<?php echo $producto->id ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                            <?php endif; ?>
                                                            <?php if($permisos->delete == 1): ?>
                                                                <button type="button" class="btn btn-danger rmv-p" data-toggle="modal" data-target="#exampleModal2" value="<?php echo $producto->id ?>"><span class="fa fa-trash"></span></button>
                                                            <?php endif; ?>

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
                            <h4 class="modal-title" id="exampleModalLabel1">Informacion Producto</h4>
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