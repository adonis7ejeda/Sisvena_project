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
                        <h3 class="text-themecolor">Reporte Productos Proximos a Vencer</h3>
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
                                        <table id="exampleP" class="table table-bordered btn-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Codigo</th>
                                                    <th>Nombre</th>
                                                    <th>Vence</th>
                                                    <th>Precio</th>
                                                    <th>Categoria</th>
                                                    <th>Descripcion</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!empty($productos)): ?>
                                                <?php foreach($productos as $producto): ?>
                                                <tr>
                                                    <td><?php echo $producto->id; ?></td>
                                                    <td><?php echo $producto->codigo; ?></td>
                                                    <td><?php echo $producto->nombre; ?></td>
                                                    <td><?php echo $producto->vencimiento; ?></td>
                                                    <td><?php echo $producto->precio ?></td>
                                                    <td><?php echo $producto->categoria ?></td>
                                                    <td><?php echo $producto->descripcion ?></td>
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