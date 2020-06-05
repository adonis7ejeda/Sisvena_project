<div class="row">
    <div class="col-xs-6 col-md-4 text-center">
        <img src="<?php echo base_url(); ?>assets/images/20200601_225244_0000.png" style="width: 220px" alt="homepage" class="light-logo" />
    </div>
    <div class="col-xs-6 col-md-4"></div>
    <div class="col-xs-6 col-md-4 text-center">
        <h1 style="color: #242a33;">FACTURA</h1>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-md-4">
        <h5><small>Calle 72 #48-32</small></h5>
        <h5><small>Tel: 3222222</small></h5>
        <h5><small>Email: sisvena@gmail.com</small></h5>
    </div>
    <div class="col-xs-6 col-md-3"></div>
    <div class="col-xs-6 col-md-5">
        <table>
            <thead style="background: #242a33; color:#fff">
                <tr>
                    <th style="padding:3px;">Tipo Comprobante</th>
                    <th style="padding:3px;">N° Comprobante</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td><h5><small><?php echo $venta->tipocomprobante; ?></small></h5></td>
                <td><h5><small><?php echo $venta->num_documento; ?></small></h5></td>
            </tr>
            </tbody>
            <thead style="background: #242a33; color:#fff">
                <tr>
                    <th style="padding:3px;">Serie</th>
                    <th style="padding:3px;">Fecha</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td><h5><small><?php echo $venta->serie; ?></small></h5></td>
                <td><h5><small><?php echo $venta->fecha; ?></small></h5></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-md-4 mt-5">
        <h4 style="background: #242a33; padding:5px; color:#fff">Facturar a</h4>
        <h5><small>Nombre: <?php echo $venta->nombres; ?></small></h5>
        <h5><small>N° Documento: <?php echo $venta->documento; ?></small></h5>
        <h5><small>Telefono: <?php echo $venta->telefono; ?></small></h5>
        <h5><small>Direccion: <?php echo $venta->direccion; ?></small></h5>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <table class="table table-bordered btn-hover">
            <thead style="background: #242a33; color:#fff">
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Importe</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($detalles as $detalle): ?>
                    <tr>
                        <td><?php echo $detalle->codigo; ?></td>
                        <td><?php echo $detalle->nombre; ?></td>
                        <td><?php echo $detalle->precio; ?></td>
                        <td><?php echo $detalle->cantidad; ?></td>
                        <td><?php echo $detalle->importe; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-md-4"></div>
    <div class="col-xs-6 col-md-5"></div>
    <div class="col-xs-6 col-md-3">
        <table>
            <thead>
                <tr>
                    <th style="padding:3px;" class="text-left font-weight-bold">Subtotal</th>
                    <th class="text-right"><?php echo $venta->subtotal; ?></th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th style="padding:3px;" class="text-left font-weight-bold">IVA</th>
                    <th class="text-right"><?php echo $venta->iva; ?></th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th style="padding:3px;" class="text-left font-weight-bold">Descuento</th>
                    <th class="text-right"><?php echo $venta->descuento; ?></th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th style="padding:3px;" class="text-left font-weight-bold">Total</th>
                    <th class="text-right"><?php echo $venta->total; ?></th>
                </tr>
            </thead>
        </table>
    </div>
</div>