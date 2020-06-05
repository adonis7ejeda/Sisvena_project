<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {

    public function getVentas(){
        $this->db->select("v.*, c.nombres, tc.nombre as tipocomprobante");
        $this->db->from("ventas v");
        $this->db->join("clientes c", "v.clientes_id = c.id");
        $this->db->join("tipo_comprobante tc", "v.tipo_comprobante_id = tc.id");
        $resultados = $this->db->get();
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        }else{
            return false;
        }
    }

    public function getVentasbyDate($fechainicio, $fechafin){
        $this->db->select("v.*, c.nombres, tc.nombre as tipocomprobante");
        $this->db->from("ventas v");
        $this->db->join("clientes c", "v.clientes_id = c.id");
        $this->db->join("tipo_comprobante tc", "v.tipo_comprobante_id = tc.id");
        $this->db->where("v.fecha >=", $fechainicio);
        $this->db->where("v.fecha <=", $fechafin);
        $resultados = $this->db->get();
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        }else{
            return false;
        }
    }

    public function getVenta($id){
        $this->db->select("v.*, c.nombres, c.direccion, c.telefono, c.num_documento as documento, tc.nombre as tipocomprobante");
        $this->db->from("ventas v");
        $this->db->join("clientes c", "v.clientes_id = c.id");
        $this->db->join("tipo_comprobante tc", "v.tipo_comprobante_id = tc.id");
        $this->db->where("v.id", $id);
        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getDetalle($id){
        $this->db->select("dt.*, p.*");
        $this->db->from("detalle_venta dt");
        $this->db->join("productos p", "dt.productos_id = p.id");
        $this->db->where("dt.ventas_id", $id);
        $resultados = $this->db->get();
        return $resultados->result();
    }

    public function getComprobantes(){
        $resultados = $this->db->get("tipo_comprobante");
        return $resultados->result();
    }

    public function getComprobante($idcomprobante){
        $this->db->where("id", $idcomprobante);
        $resultado = $this->db->get("tipo_comprobante");
        return $resultado->row();
    }

    public function getproductos($valor){
        $this->db->select("id, codigo, nombre as label, precio, stock");
        $this->db->from("productos");
        $this->db->like("nombre", $valor);
        $resultados = $this->db->get();
        return $resultados->result_array();
    }

    public function save($data){
        return $this->db->insert("ventas", $data);
    }

    public function lastID(){
        return $this->db->insert_id();
    }

    public function updateComprobante($idcomprobante, $data){
        $this->db->where("id", $idcomprobante);
        $this->db->update("tipo_comprobante", $data);
    }

    public function save_detalle($data){
        $this->db->insert("detalle_venta", $data);
    }

    public function years(){
        $this->db->select("YEAR(fecha) as year");
        $this->db->from("ventas");
        $this->db->group_by("year");
        $this->db->order_by("year", "desc");
        $resultados = $this->db->get();
        return $resultados->result();
    }

    public function montos($year){
        $fechaini = "'$year"."-01-01'";
        $fechafin = "'$year"."-12-31'";
        $this->db->select("MONTH(fecha) as mes, SUM(total) as monto");
        $this->db->from("ventas");
        $this->db->where("fecha >= $fechaini");
        $this->db->where("fecha <= $fechafin");
        $this->db->group_by("mes");
        $this->db->order_by("mes");
        $resultados = $this->db->get();
        return $resultados->result();
    }

    public function montos2($year){
        $fechaini = "'$year"."-01-01'";
        $fechafin = "'$year"."-12-31'";
        $this->db->select("MONTH(fecha) as mes, COUNT(id) as total");
        $this->db->from("ventas");
        $this->db->where("fecha >= $fechaini");
        $this->db->where("fecha <= $fechafin");
        $this->db->group_by("mes");
        $this->db->order_by("mes");
        $resultados = $this->db->get();
        return $resultados->result();
    }
}