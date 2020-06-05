<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

    private $permisos;

    public function __construct(){
        parent::__construct();
        $this->permisos = $this->backend_lib->control();
        if (!$this->session->userdata("login")) {
            redirect(base_url());
        }
        $this->load->model("Ventas_model");
        $this->load->model("Clientes_model");
        $this->load->model("Productos_model");
    }

    public function index(){
        $data = array(
            'permisos' => $this->permisos,
            'ventas' => $this->Ventas_model->getVentas(),
        );
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/ventas/list", $data);
        $this->load->view("layouts/footer");
    }

    public function add(){
        if(!$this->permisos->insert){
            redirect(base_url());
            return;
        }else{
            $data = array(
                "tipocomprobantes" => $this->Ventas_model->getComprobantes(),
                "clientes" => $this->Clientes_model->getClientes()
            );
            $this->load->view("layouts/header");
            $this->load->view("layouts/aside");
            $this->load->view("admin/ventas/add", $data);
            $this->load->view("layouts/footer");
        }
    }

    public function getproductos(){
        $valor = $this->input->post("valor");
        $clientes = $this->Ventas_model->getproductos($valor);
        echo json_encode($clientes);
    }

    public function store(){
        $fecha = $this->input->post("fecha");
        $subtotal = $this->input->post("subtotal");
        $iva = $this->input->post("iva");
        $descuento = $this->input->post("descuento");
        $total = $this->input->post("total");
        $numero = $this->input->post("numero");
        $serie = $this->input->post("serie");
        $idusuario = $this->session->userdata("id");
        $idcliente = $this->input->post("idcliente");
        $idcomprobante = $this->input->post("idcomprobante");

        $idproductos = $this->input->post("idproductos");
        $precios = $this->input->post("precios");
        $cantidades = $this->input->post("cantidades");
        $importes = $this->input->post("importes");

        $this->form_validation->set_rules("idcomprobante", "Comprobante", "required");
        $this->form_validation->set_rules("fecha", "Fecha", "required");
        $this->form_validation->set_rules("idcliente", "Cliente", "required");

        if($this->form_validation->run()){
            $data = array(
                'fecha' => $fecha,
                'subtotal' => $subtotal,
                'iva' => $iva,
                'descuento' => $descuento,
                'total' => $total,
                'num_documento' => $numero,
                'serie' => $serie,
                'usuarios_id' => $idusuario,
                'clientes_id' => $idcliente,
                'tipo_comprobante_id' => $idcomprobante,
            );
    
            if ($this->Ventas_model->save($data)) {
                $idventa = $this->Ventas_model->lastID();
                $this->updateComprobante($idcomprobante);
                $this->save_detalle($precios, $cantidades, $importes, $idventa, $idproductos);
                redirect(base_url()."movimientos/ventas");
    
            }else{
                redirect(base_url()."movimientos/ventas/add");
            }
        }else{
            $this->add();
        }
    }

    protected function updateComprobante($idcomprobante){
        $comprobanteActual = $this->Ventas_model->getComprobante($idcomprobante);
        $data = array(
            'cantidad' => $comprobanteActual->cantidad + 1,
        );
        $this->Ventas_model->updateComprobante($idcomprobante, $data);
    }

    protected function save_detalle($precios, $cantidades, $importes, $idventa, $productos){
        
        for ($i=0; $i < count($productos); $i++) { 
            $data = array(
                'precio' => $precios[$i],
                'cantidad' => $cantidades[$i],
                'importe' => $importes[$i],
                'ventas_id' => $idventa,
                'productos_id' => $productos[$i],
            );
            
            $this->Ventas_model->save_detalle($data);
            $this->updateProducto($productos[$i], $cantidades[$i]);
        }
    }

    protected function updateProducto($idproducto, $cantidad){
        $productoActual = $this->Productos_model->getProducto($idproducto);
        $data = array(
            'stock' => $productoActual->stock - $cantidad,
        );
        $this->Productos_model->update($idproducto, $data);
    }

    public function view(){
        $idventa = $this->input->post("id");
        $data = array(
            'venta' => $this->Ventas_model->getVenta($idventa),
            'detalles' => $this->Ventas_model->getDetalle($idventa)
        );
        $this->load->view("admin/ventas/view", $data);
    }
}