<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controlador login, verifica si el usuario tiene una sesión valida.
 *
 * @author Sergio Gloria González
 * @version 1.0
 */
class Login_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        if ($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $check_user = $this->login_model->login_user($username, $password);
            if ($check_user == TRUE) {
                $data = array(
                    'is_logued_in' => TRUE,
                    'id_usuario' => $check_user->id,
                    'perfil' => $check_user->perfil,
                    'username' => $check_user->username,
                    'email' => $check_user->email
                );
                
                $this->session->set_userdata($data);
            }
        }
        
        redirect(base_url());//Regresamos al home: [URL]/cotizador
    }

    public function logout_ci() {
        $this->session->sess_destroy();
        redirect(base_url());//Regresamos al home: [URL]/cotizador
    }

}
