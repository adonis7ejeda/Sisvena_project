                <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-profile">
                            <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url(); ?>" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/images/users/log.png" alt="user" /><span class="hide-menu"><?php echo $this->session->userdata("nombre"); ?></span></a>
                        </li>
                        <li class="nav-devider"></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Mantenimiento </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>mantenimiento/categorias">Categorias </a></li>
                                <li><a href="<?php echo base_url(); ?>mantenimiento/clientes">Clientes</a></li>
                                <li><a href="<?php echo base_url(); ?>mantenimiento/productos">Productos</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Movimientos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>movimientos/ventas">Ventas</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Reportes</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>reportes/ventas">Ventas en meses</a></li>
                                <li><a href="<?php echo base_url(); ?>reportes/productos">Productos a vencer</a></li>
                                <li><a href="<?php echo base_url(); ?>reportes/productos/stock">Productos stock</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Administrador</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url(); ?>administrador/usuarios">Usuarios</a></li>
                                <li><a href="<?php echo base_url(); ?>administrador/permisos">Permisos</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->