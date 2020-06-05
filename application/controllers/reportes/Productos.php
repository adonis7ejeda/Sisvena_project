<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Productos_model");
    }

    public function index(){
        $data = array(
            'productos' => $this->Productos_model->getFecha()
        );
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/reportes/productos", $data);
        $this->load->view("layouts/footer");
    }

    public function stock(){
        $data = array(
            'productos' => $this->Productos_model->getStock()
        );
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/reportes/stock", $data);
        $this->load->view("layouts/footer");
    }
}