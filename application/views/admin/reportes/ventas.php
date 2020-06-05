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
                        <h3 class="text-themecolor">Reportes Ventas en Meses</h3>
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
                                    <form action="<?php echo current_url(); ?>" method="POST" style="display:inherit">
                                        <div class="form-group col-md-4">
                                            <label class="control-label font-weight-bold">Desde</label>
                                            <input type="date" class="form-control" name="fechainicio" value="<?php echo !empty($fechainicio) ? $fechainicio: ''; ?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label font-weight-bold">Hasta</label>
                                            <input type="date" class="form-control" name="fechafin" value="<?php echo !empty($fechafin) ? $fechafin: ''; ?>">
                                        </div>
                                        <div class="form-group col-md-4 pt-2">
                                            <input type="submit" class="btn btn-info mt-4" name="buscar" value="Buscar">
                                            <a href="<?php echo base_url(); ?>reportes/ventas" class="btn btn-danger mt-4">Restablecer</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="example" class="table table-bordered btn-hover">
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