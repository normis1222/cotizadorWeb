<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Modelo login, utilizado representar las propiedades del formulario de login.
 *
 * @author Sergio Gloria González
 * @version 1.0
 */
class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function login_user($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('estatus <> 99');
        $query = $this->db->get('usuario');
        if ($query->num_rows() == 1) {
            $plaintext = $this->encrypt->decode($query->row()->password);
            
            if ($plaintext == $password) {
                return $query->row();
            }
        }
        
        $this->session->set_flashdata('usuario_incorrecto', 'Datos incorrectos, por favor intentelo nuevamente');
        redirect(base_url(), 'refresh');
    }

}
