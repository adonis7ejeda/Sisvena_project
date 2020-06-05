<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    private $permisos;

    public function __construct(){
        parent::__construct();
        $this->permisos = $this->backend_lib->control();
        $this->load->model("Usuarios_model");
    }

    public function index(){
        $data = array(
            'permisos' => $this->permisos,
            'usuarios' => $this->Usuarios_model->getUsuarios(),
        );
        $this->load->view('layouts/header');
        $this->load->view('layouts/aside');
        $this->load->view('admin/usuarios/list', $data);
        $this->load->view('layouts/footer');
    }

    public function add(){
        if(!$this->permisos->insert){
            redirect(base_url());
            return;
        }else{
            $data = array(
                'roles' => $this->Usuarios_model->getRoles(),
            );
            $this->load->view('layouts/header');
            $this->load->view('layouts/aside');
            $this->load->view('admin/usuarios/add', $data);
            $this->load->view('layouts/footer');
        }
    }

    public function store(){
        $nombres = $this->input->post("nombres");
        $apellidos = $this->input->post("apellidos");
        $telefono = $this->input->post("telefono");
        $email = $this->input->post("email");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $rol = $this->input->post("rol");

        $this->form_validation->set_rules("nombres", "Nombres", "required");
        $this->form_validation->set_rules("apellidos", "Apellidos", "required");
        $this->form_validation->set_rules("telefono", "Telefono", "required");
        $this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[usuarios.email]");
        $this->form_validation->set_rules("username", "Username", "required|is_unique[usuarios.username]");
        $this->form_validation->set_rules("password", "Password", "required");
        $this->form_validation->set_rules("rol", "Rol", "required");

        if ($this->form_validation->run()) {
            $data = array(
                'nombres' => $nombres,
                'apellidos' => $apellidos,
                'telefono' => $telefono,
                'email' => $email,
                'username' => $username,
                'password' => sha1($password),
                'roles_id' => $rol,
                'estado' => "1"
            );
    
            if ($this->Usuarios_model->save($data)){
                redirect(base_url()."administrador/usuarios");
            }
            else{
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url()."administrador/usuarios/add");
            }
        }
        else{
            $this->add();
        }
    }

    public function update(){
        $idusuario = $this->input->post("idusuario");
        $nombres = $this->input->post("nombres");
        $apellidos = $this->input->post("apellidos");
        $telefono = $this->input->post("telefono");
        $email = $this->input->post("email");
        $username = $this->input->post("username");
        $rol = $this->input->post("rol");

        $usuarioActual = $this->Usuarios_model->getUsuario($idusuario);

        if ($email == $usuarioActual->email) {
            $is_uniquee = '';
        }else{
            $is_uniquee = '|is_unique[usuarios.email]';
        }

        if ($username == $usuarioActual->username) {
            $is_uniqueu = '';
        }else{
            $is_uniqueu = '|is_unique[usuarios.username]';
        }

        $this->form_validation->set_rules("nombres", "Nombres", "required");
        $this->form_validation->set_rules("apellidos", "Apellidos", "required");
        $this->form_validation->set_rules("telefono", "Telefono", "required");
        $this->form_validation->set_rules("email", "Email", "required|valid_email".$is_uniquee);
        $this->form_validation->set_rules("username", "Username", "required".$is_uniqueu);
        $this->form_validation->set_rules("rol", "Rol", "required");

        if ($this->form_validation->run()) {
            $data = array(
                'nombres' => $nombres,
                'apellidos' => $apellidos,
                'telefono' => $telefono,
                'email' => $email,
                'username' => $username,
                'roles_id' => $rol
            );
    
            if ($this->Usuarios_model->update($idusuario, $data)){
                redirect(base_url()."administrador/usuarios");
            }
            else{
                $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                redirect(base_url()."administrador/usuarios/edit/".$idusuario);
            }
        }
        else{
            $this->edit($idusuario);
        }
    }

    public function view(){
        if(!$this->permisos->read){
            redirect(base_url());
            return;
        }else{
            $idusuario = $this->input->post("idusuario");
            $data = array(
                'usuario' => $this->Usuarios_model->getUsuario($idusuario)
            );
            $this->load->view("admin/usuarios/view", $data);
        }
    }

    public function edit($id){
        if(!$this->permisos->update){
            redirect(base_url());
            return;
        }else{
            $data = array(
                'roles' => $this->Usuarios_model->getRoles(),
                'usuario' => $this->Usuarios_model->getUsuario($id)
            );
            $this->load->view('layouts/header');
            $this->load->view('layouts/aside');
            $this->load->view('admin/usuarios/edit', $data);
            $this->load->view('layouts/footer');
        }
    }

    public function delete($id){
        if(!$this->permisos->delete){
            redirect(base_url());
            return;
        }else{
            $data = array(
                'estado' => "0",
            );
            $this->Usuarios_model->update($id, $data);
            echo "administrador/usuarios";
        }
    }
}