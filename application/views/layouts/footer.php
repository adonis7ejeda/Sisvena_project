                        <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2017 Admin Pro by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery-print/jquery.print.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery-ui/jquery-ui.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Vector map JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Chart JS -->
    <!-- <script src="<?php echo base_url(); ?>assets/js/dashboard4.js"></script> -->
    <!-- ============================================================== -->

    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <!-- This is data table -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    
    <script>
    $(document).ready(function() {
        var base_url = "<?php echo base_url(); ?>";
        var year = (new Date).getFullYear();
        datagrafico(base_url, year);
        datagrafico2(base_url, year);
        $("#year").on("change", function(){
            yearselect = $(this).val();
            datagrafico(base_url, yearselect);
        });
        $("#year2").on("change", function(){
            yearselect = $(this).val();
            datagrafico2(base_url, yearselect);
        });
        $(".btn-remove").on("click", function(e){
            e.preventDefault();
            var ruta = $(this).attr("href");
            $.ajax({
                url: ruta,
                type: "POST",
                success:function(resp){
                    window.location.href = base_url + resp;
                }
            });
        });
        $(".btn-view-producto").on("click", function(){
            var producto = $(this).val();
            var infoproducto = producto.split("*");
            html = "<form>";
            html += "<div class='form-row'>";
            html += "<div class='form-group col-md-6'>";
            html +="<label>Codigo</label>";
            html += "<input type='text' class='form-control' value='"+infoproducto[1]+"' readonly>";
            html += "</div>";
            html += "<div class='form-group col-md-6'>";
            html += "<label>Nombre</label>";
            html += "<input type='text' class='form-control' value='"+infoproducto[2]+"' readonly>";
            html += "</div>";
            html += "</div>";
            html += "<div class='form-row'>";
            html += "<div class='form-group col-md-6'>";
            html +="<label>Fecha Vencimiento</label>";
            html += "<input type='text' class='form-control' value='"+infoproducto[3]+"' readonly>";
            html += "</div>";
            html += "<div class='form-group col-md-6'>";
            html += "<label>Categoria</label>";
            html += "<input type='text' class='form-control' value='"+infoproducto[4]+"' readonly>";
            html += "</div>";
            html += "</div>";
            html += "<div class='form-row'>";
            html += "<div class='form-group col-md-6'>";
            html +="<label>Precio</label>";
            html += "<input type='text' class='form-control' value='"+infoproducto[5]+"' readonly>";
            html += "</div>";
            html += "<div class='form-group col-md-6'>";
            html += "<label>Stock</label>";
            html += "<input type='Text' class='form-control' value='"+infoproducto[6]+"' readonly>";
            html += "</div>";
            html += "</div>";
            html += "<div clas='form-group'>";
            html += "<label>Descripcion</label>";
            html += "<textarea rows='5' class='form-control' readonly>"+infoproducto[7]+"</textarea>";
            html += "</div>";
            html += "</form>";
            $("#exampleModal .modal-body").html(html);
        });
        $(".btn-view-cliente").on("click", function(){
            var cliente = $(this).val();
            var infocliente = cliente.split("*");
            html = "<form>";
            html += "<div class='form-row'>";
            html += "<div class='form-group col-md-6'>";
            html +="<label>Nombres</label>";
            html += "<input type='text' class='form-control' value='"+infocliente[1]+"' readonly>";
            html += "</div>";
            html += "<div class='form-group col-md-6'>";
            html += "<label>Tipo de Cliente</label>";
            html += "<input type='text' class='form-control' value='"+infocliente[2]+"' readonly>";
            html += "</div>";
            html += "</div>";
            html += "<div class='form-row'>";
            html += "<div class='form-group col-md-6'>";
            html +="<label>Tipo de Documento</label>";
            html += "<input type='text' class='form-control' value='"+infocliente[3]+"' readonly>";
            html += "</div>";
            html += "<div class='form-group col-md-6'>";
            html += "<label>Numero de Documento</label>";
            html += "<input type='text' class='form-control' value='"+infocliente[4]+"' readonly>";
            html += "</div>";
            html += "</div>";
            html += "<div class='form-row'>";
            html += "<div class='form-group col-md-6'>";
            html +="<label>Telefono</label>";
            html += "<input type='text' class='form-control' value='"+infocliente[5]+"' readonly>";
            html += "</div>";
            html += "<div class='form-group col-md-6'>";
            html += "<label>Direccion</label>";
            html += "<input type='Text' class='form-control' value='"+infocliente[6]+"' readonly>";
            html += "</div>";
            html += "</div>";
            html += "</form>";
            $("#exampleModal .modal-body").html(html);
        });
        $(".btn-view").on("click", function(){
            var id = $(this).val();
            $.ajax({
                url: base_url + "mantenimiento/categorias/view/" + id,
                type: "POST",
                success:function(resp){
                    $("#exampleModal .modal-body").html(resp);
                }
            });
        });
        $(".btn-view-usuario").on("click", function(){
            var id = $(this).val();
            $.ajax({
                url: base_url + "administrador/usuarios/view",
                type: "POST",
                data:{idusuario:id},
                success:function(resp){
                    $("#exampleModal .modal-body").html(resp);
                }
            });
        });
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: "Listado de Ventas",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: "Listado de Ventas",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5]
                    }
                }
            ]
        });
        $('#exampleP').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: "Listado de Productos Vencimiento",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: "Listado de Productos Vencimiento",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6]
                    }
                }
            ]
        });
        $('#examplePS').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: "Listado de Productos Stock",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    title: "Listado de Productos Stock",
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6]
                    }
                }
            ]
        });
        $(".rmv").on("click", function(){
            var id = $(this).val();
            $(".btn-remove").attr("href", "<?php echo base_url(); ?>mantenimiento/categorias/delete/"+id)
        });
        $(".rmv-c").on("click", function(){
            var id = $(this).val();
            $(".btn-remove").attr("href", "<?php echo base_url(); ?>mantenimiento/clientes/delete/"+id)
        });
        $(".rmv-p").on("click", function(){
            var id = $(this).val();
            $(".btn-remove").attr("href", "<?php echo base_url(); ?>mantenimiento/productos/delete/"+id)
        });
        $(".rmv-u").on("click", function(){
            var id = $(this).val();
            $(".btn-remove").attr("href", "<?php echo base_url(); ?>administrador/usuarios/delete/"+id)
        });
        $(".rmv-pe").on("click", function(){
            var id = $(this).val();
            $(".btn-remove").attr("href", "<?php echo base_url(); ?>administrador/permisos/delete/"+id)
        });
        $('#myTable').DataTable();

        $("#comprobantes").on("change", function(){
            option = $(this).val();

            if (option != "") {
                infocomprobante = option.split("*");

                $("#idcomprobante").val(infocomprobante[0]);
                $("#iva").val(infocomprobante[2]);
                $("#serie").val(infocomprobante[3]);
                $("#numero").val(generarnumero(infocomprobante[1]));
            }
            else{
                $("#idcomprobante").val(null);
                $("#iva").val(null);
                $("#serie").val(null);
                $("#numero").val(null);
            }
            sumar();
        })

        $(document).on("click", ".btn-check", function(){
            cliente = $(this).val();
            infocliente = cliente.split("*");
            $("#idcliente").val(infocliente[0]);
            $("#cliente").val(infocliente[1]);
            $("#exampleModal").modal("hide");
        });

        $("#producto").autocomplete({
            source:function(request, response){
                $.ajax({
                    url: base_url+"movimientos/ventas/getproductos",
                    type: "POST",
                    dataType: "json",
                    data: {valor: request.term},
                    success: function(data){
                        response(data);
                    }
                });
            },
            minLength:2,
            select:function(event, ui){
                data = ui.item.id + "*" + ui.item.codigo + "*" + ui.item.label + "*" + ui.item.precio + "*" + ui.item.stock;
                $("#btn-agregar").val(data);
            },
        });
        $("#btn-agregar").on("click", function(){
            $("#confirm").remove();
            data = $(this).val();
            if (data != ''){
                infoproducto = data.split("*");
                html = "<tr>";
                html += "<td><input type='hidden' name='idproductos[]' value='"+infoproducto[0]+"'>"+infoproducto[1]+"</td>";
                html += "<td>"+infoproducto[2]+"</td>";
                html += "<td><input type='hidden' name='precios[]' value='"+infoproducto[3]+"'>"+infoproducto[3]+"</td>";
                html += "<td>"+infoproducto[4]+"</td>";
                html += "<td>";
                html += "<input type='number' class='form-control cantidades' name='cantidades[]' value='1'>";
                html += "</td>"
                html += "<td><input type='hidden' name='importes[]' value='"+infoproducto[3]+"'><p>"+infoproducto[3]+"</p></td>";
                html += "<td><button type='button' class='btn btn-danger btn-remove-producto'><span class='fa fa-remove'></span></button></td>";
                html += "</tr>";
                $("#tbventas tbody").append(html);
                sumar();
                $("#btn-agregar").val(null);
                $("#producto").val(null);
            }else{
                html = "<div class='modal fade' id='confirm' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                html += "<div class='modal-dialog' role='document'>";
                html += "<div class='modal-content'>";
                html += "<div class='modal-header'>";
                html += "<h5 class='modal-title' id='exampleModalLabel'>Validar Producto</h5>";
                html += "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                html += "<span aria-hidden='true'>&times;</span>";
                html += "</button>";
                html += "</div>";
                html += "<div class='modal-body'>";
                html += "<h5>Debe seleccionar un producto!</h5>"; 
                html += "</div>";
                html += "<div class='modal-footer'>";
                html += "<button type='button' class='btn btn-info' data-dismiss='modal'>Ok</button>";
                html += "</div>";
                html += "</div>";
                html += "</div>";
                html += "</div>";
                $("#modalconf").append(html);
            }
        });

        $(document).on("click", ".btn-remove-producto", function(){
            $(this).closest("tr").remove();
            sumar();
        });
        $(document).on("keyup", "#tbventas input.cantidades", function(){
            cantidad = $(this).val();
            precio = $(this).closest("tr").find("td:eq(2)").text();
            importe = cantidad * precio;
            $(this).closest("tr").find("td:eq(5)").children("p").text(importe);
            $(this).closest("tr").find("td:eq(5)").children("input").val(importe);
            sumar();
        });
        $(document).on("click", ".btn-view-venta", function(){
            valor_id = $(this).val();
            $.ajax({
                url: base_url + "movimientos/ventas/view",
                type: "POST",
                dataType: "html",
                data: {id:valor_id},
                success: function(data){
                    $("#exampleModal .modal-body").html(data);
                }
            });
        });

        $(document).on("click", ".btn-print", function(){
            $("#exampleModal .modal-body").print({
                title:"Comprobante de Venta"
            });
        });
    })

    function generarnumero(numero){
        if (numero >= 99999 && numero < 999999) {
            return Number(numero)+1;            
        }
        if (numero >= 9999 && numero < 99999) {
            return "0" + (Number(numero)+1);
        }
        if (numero >= 999 && numero < 9999) {
            return "00" + (Number(numero)+1);
        }
        if (numero >= 99 && numero < 999) {
            return "000" + (Number(numero)+1);
        }
        if (numero >= 9 && numero < 99) {
            return "0000" + (Number(numero)+1);
        }
        if (numero < 9) {
            return "00000" + (Number(numero)+1);
        }
    }

    function sumar(){
        subtotal = 0;
        $("#tbventas tbody tr").each(function(){
            subtotal = subtotal + Number($(this).find("td:eq(5)").text());
        });
        $("input[name=subtotal]").val(subtotal);
        porcentaje = $("#iva").val();
        iva = subtotal * (porcentaje/100);
        $("input[name=iva]").val(iva);
        descuento = $("input[name=descuento]").val();
        total = subtotal + iva - descuento;
        $("input[name=total]").val(total);
    }

    function datagrafico(base_url, year){
        namesMonth = ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
        $.ajax({
            url: base_url + "dashboard/getData",
            type:"POST",
            data:{year: year},
            dataType:"json",
            success:function(data){
                var meses = new Array();
                var montos = new Array();
                $.each(data, function(key, value){
                    meses.push(namesMonth[value.mes - 1]);
                    valor = Number(value.monto);
                    montos.push(valor);
                });
                graficar(meses, montos, year);
            }
        });
    }

    function datagrafico2(base_url, year){
        namesMonth = ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
        $.ajax({
            url: base_url + "dashboard/getData2",
            type:"POST",
            data:{year: year},
            dataType:"json",
            success:function(data){
                var meses = new Array();
                var total = new Array();
                $.each(data, function(key, value){
                    meses.push(namesMonth[value.mes - 1]);
                    valor = Number(value.total);
                    total.push(valor);
                });
                graficar2(meses, total, year);
            }
        });
    }

    function graficar(meses, montos, year){
        "use strict";
        //============================================================== // Sales overview //============================================================== 
        new Chartist.Line('#sales-overview2', {
            labels: meses,
            series: [
                { meta: "Ganancias ($)", data: montos }
            ]
        }, {
            low: 0,
            high: 4000000,
            showArea: true,
            divisor: 10,
            lineSmooth: false,
            fullWidth: true,
            showLine: true,
            chartPadding: 30,
            axisX: {
                showLabel: true,
                showGrid: false,
                offset: 20
            },
            plugins: [
                Chartist.plugins.tooltip()
            ],
            // As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
            axisY: {
                onlyInteger: true,
                showLabel: true,
                scaleMinSpace: 50,
                showGrid: true,
                offset: 10,
                labelInterpolationFnc: function(value) {
                    return (value / 10000) + 'k'
                },
            }
        });
    }

    function graficar2(meses, total, year){
        // ============================================================== // Sales overview 2 // ============================================================== 
        new Chartist.Bar('#ct-sales3-chart', {
            labels: meses,
            series: [
                total
                ]
        }, {
            stackBars: true,
            axisX: {
                showGrid: false
            },
            axisY: {
                labelInterpolationFnc: function(value) {
                    return (value);
                },
                showGrid: true
            }, plugins: [
                Chartist.plugins.tooltip()
            ],
        }).on('draw', function(data) {
            if (data.type === 'bar') {
                data.element.attr({
                    style: 'stroke-width: 15px'
                });
            }
        });
    }

    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>