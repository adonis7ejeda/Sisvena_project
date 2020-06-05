<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {

    private $permisos;

    public function __construct(){
        parent::__construct();
        $this->permisos = $this->backend_lib->control();
        $this->load->model("Permisos_model");
        $this->load->model("Usuarios_model");
    }

    public function index(){
        $data = array(
            'permisos' => $this->permisos,
            'permisos' => $this->Permisos_model->getPermisos(),
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/permisos/list', $data);
        $this->load->view('layouts/footer');
    }

    public function add(){
        if(!$this->permisos->insert){
            redirect(base_url());
            return;
        }else{
            $data = array(
                'roles' => $this->Usuarios_model->getRoles(),
                'menus' => $this->Permisos_model->getMenus(),
            );
            $this->load->view('layouts/header');
            $this->load->view('layouts/aside');
            $this->load->view('admin/permisos/add', $data);
            $this->load->view('layouts/footer');
        }
    }

    public function store(){
        $menu = $this->input->post("menu");
        $rol = $this->input->post("rol");
        $insert = $this->input->post("insert");
        $read = $this->input->post("read");
        $update = $this->input->post("update");
        $delete = $this->input->post("delete");

        $this->form_validation->set_rules("menu", "Menu", "required");
        $this->form_validation->set_rules("rol", "Rol", "required");
        $this->form_validation->set_rules("insert", "Insert", "required");
        $this->form_validation->set_rules("read", "Read", "required");
        $this->form_validation->set_rules("update", "Update", "required");
        $this->form_validation->set_rules("delete", "Delete", "required");

        if ($this->form_validation->run()) {
            $data = array(
                'menus_id' => $menu,
                'roles_id' => $rol,
                'read' => $read,
                'insert' => $insert,
                'update' => $update,
                'delete' => $delete,
            );
    
            if ($this->Permisos_model->save($data)){
                redirect(base_url()."administrador/permisos");
            }
            else{
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url()."administrador/permisos/add");
            }
        }
        else{
            $this->add();
        }
    }

    public function edit($id){
        if(!$this->permisos->update){
            redirect(base_url());
            return;
        }else{
            $data = array(
                'roles' => $this->Usuarios_model->getRoles(),
                'menus' => $this->Permisos_model->getMenus(),
                'permiso' => $this->Permisos_model->getPermiso($id)
            );
            $this->load->view('layouts/header');
            $this->load->view('layouts/aside');
            $this->load->view('admin/permisos/edit', $data);
            $this->load->view('layouts/footer');
        }
    }

    public function update(){
        $idpermiso = $this->input->post("idpermiso");
        $insert = $this->input->post("insert");
        $read = $this->input->post("read");
        $update = $this->input->post("update");
        $delete = $this->input->post("delete");

        $this->form_validation->set_rules("insert", "Insert", "required");
        $this->form_validation->set_rules("read", "Read", "required");
        $this->form_validation->set_rules("update", "Update", "required");
        $this->form_validation->set_rules("delete", "Delete", "required");

        if ($this->form_validation->run()) {
            $data = array(
                'read' => $read,
                'insert' => $insert,
                'update' => $update,
                'delete' => $delete,
            );
    
            if ($this->Permisos_model->update($idpermiso, $data)){
                redirect(base_url()."administrador/permisos");
            }
            else{
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url()."administrador/permisos/edit/".$idpermiso);
            }
        }
        else{
            $this->edit($idpermiso);
        }
    }

    public function delete($id){
        if(!$this->permisos->delete){
            redirect(base_url());
            return;
        }else{
            $this->Permisos_model->delete($id);
            echo "administrador/permisos";
        }
    }
}