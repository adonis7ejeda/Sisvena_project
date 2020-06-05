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
                        <h3 class="text-themecolor">Nueva Venta</h3>
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
                                <form action="<?php echo base_url(); ?>movimientos/ventas/store" method="post">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group <?php echo !empty(form_error("idcomprobante"))? 'has-danger': '' ?>">
                                                    <label class="form-control-label">Comprobante</label>
                                                    <select class="form-control custom-select <?php echo !empty(form_error("idcomprobante"))? 'form-control-danger': '' ?>" name="comprobantes" id="comprobantes">
                                                        <option value="">--Select--</option>
                                                        <?php foreach($tipocomprobantes as $tipocomprobante): ?>
                                                            <?php $datacomprobante = $tipocomprobante->id."*".$tipocomprobante->cantidad."*".$tipocomprobante->iva."*".$tipocomprobante->serie; ?>
                                                            <option value="<?php echo $datacomprobante; ?>"><?php echo $tipocomprobante->nombre ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <?php echo form_error("idcomprobante", "<div class='form-control-feedback'>", "</div>"); ?>
                                                    <input type="hidden" id="idcomprobante" name="idcomprobante">
                                                    <input type="hidden" id="iva">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">Serie</label>
                                                    <input type="text" class="form-control" id="serie" name="serie" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">Numero</label>
                                                    <input type="text" class="form-control" id="numero" name="numero" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="form-control-label" <?php echo !empty(form_error("idcliente"))? 'style="color: #ef5350;"': '' ?> >Cliente</label>
                                                <div class="input-group <?php echo !empty(form_error("idcliente"))? 'has-danger': '' ?>">
                                                    <input type="hidden" name="idcliente" id="idcliente">
                                                    <input type="text" class="form-control <?php echo !empty(form_error("idcliente"))? 'form-control-danger': '' ?>" id="cliente" readonly>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-info" type="button" data-toggle="modal" data-target=".bd-example-modal-lg"><span class="fa fa-search"></span> Buscar</button>
                                                    </span>
                                                </div>
                                                <?php echo form_error("idcliente", "<div class='form-control-feedback' style='color: #ef5350;'>", "</div>"); ?>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group <?php echo !empty(form_error("fecha"))? 'has-danger': '' ?>">
                                                    <label class="form-control-label">Fecha</label>
                                                    <input type="date" class="form-control <?php echo !empty(form_error("fecha"))? 'form-control-danger': '' ?>" name="fecha" id="fecha">
                                                    <?php echo form_error("fecha", "<div class='form-control-feedback'>", "</div>"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="form-control-label">Producto</label>
                                                <input type="text" class="form-control" id="producto" name="producto">
                                            </div>
                                            <div class="col-md-4 pt-2">
                                                <button class="btn btn-info mt-4" type="button" id="btn-agregar" data-toggle="modal" data-target="#confirm"><span class="fa fa-plus"></span> Agregar</button>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <table id="tbventas" class="table table-bordered btn-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Codigo</th>
                                                            <th>Nombre</th>
                                                            <th>Precio</th>
                                                            <th>Stock Max</th>
                                                            <th>Cantidad</th>
                                                            <th>Importe</th>
                                                            <th>Borrar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Subtotal</span>
                                                    <input type="text" class="form-control" name="subtotal" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">IVA</span>
                                                    <input type="text" class="form-control" name="iva" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Descuento</span>
                                                    <input type="text" class="form-control" name="descuento" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Total</span>
                                                    <input type="text" class="form-control" name="total" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions mt-4">
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

            <div id="modalconf">
            </div>

            <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1">Listado de clientes</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <table id="myTable" class="table table-bordered btn-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombres</th>
                                        <th>Documento</th>
                                        <th>Seleccionar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($clientes)): ?>
                                        <?php foreach($clientes as $cliente): ?>
                                            <tr>
                                                <td><?php echo $cliente->id; ?></td>
                                                <td><?php echo $cliente->nombres; ?></td>
                                                <td><?php echo $cliente->num_documento; ?></td>
                                                <?php $datacliente = $cliente->id."*".$cliente->nombres."*".$cliente->tipocliente."*".$cliente->tipodocumento."*".$cliente->num_documento."*".$cliente->telefono."*".$cliente->direccion; ?>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-circle btn-check" value="<?php echo $datacliente; ?>"><i class="fa fa-check"></i> </button>
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