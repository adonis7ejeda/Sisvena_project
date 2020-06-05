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
                        <h3 class="text-themecolor">Listado Ventas</h3>
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
                                            <a href="<?php echo base_url(); ?>movimientos/ventas/add" class="btn btn-info btn-flat"><span class="fa fa-plus"></span> Agregar Venta</a>
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
                                                    <th>Nombre Cliente</th>
                                                    <th>Tipo Comprobante</th>
                                                    <th>N° Comprobante</th>
                                                    <th>Fecha</th>
                                                    <th>Total</th>
                                                    <th>Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($ventas)): ?>
                                                    <?php foreach ($ventas as $venta): ?>
                                                        <tr>
                                                            <td><?php echo $venta->id;?></td>
                                                            <td><?php echo $venta->nombres;?></td>
                                                            <td><?php echo $venta->tipocomprobante;?></td>
                                                            <td><?php echo $venta->num_documento;?></td>
                                                            <td><?php echo $venta->fecha;?></td>
                                                            <td><?php echo $venta->total;?></td>
                                                            <td>
                                                                <button type="button" class="btn btn-info btn-view-venta" data-toggle="modal" data-target=".bd-example-modal-lg" value="<?php echo $venta->id; ?>"><span class="fa fa-search"></span></button>
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
                            <h4 class="modal-title" id="exampleModalLabel1">Informacion de la Venta</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info btn-print"><span class="fa fa-print"> Imprimir</span></button>
                        </div>
                    </div>
                </div>
            </div>