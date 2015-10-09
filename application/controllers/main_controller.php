<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controlador main, todas las peticiones del sistema serán atendidas por este controlador.
 *
 * @author Sergio Gloria González
 * @version 1.0
 */
class Main_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['token'] = $this->token(); //El token se genera de forma aleatoria en cada llamada para aumentar la seguridad de la aplicación.
        //Si existe sessión activa, nos muestra la página principal.
        if ($this->session->userdata('is_logued_in') == TRUE) {
            //Creamos la tabla usuariosTabla para administrar el control de accesos.
            $tmpl = array('table_open' => '<table id="big_table" border="1" cellpadding="2" cellspacing="1" class="mytable">');
            $this->table->set_template($tmpl);
            $this->table->set_heading('Id', 'Perfil', 'Username', 'Password', 'Actions');

            $this->load->view('main_view', $data);
        } else {
            $this->load->view('login_view', $data);
        }
    }

    public function token() {
        $token = md5(uniqid(rand(), true));
        $this->session->set_userdata('token', $token);

        return $token;
    }

    public function usuarios() {
        $this->validar_sesion();

        $this->datatables->select('id,perfil,username,password')
                //->unset_column('id')
                ->add_column('Actions', get_buttons('$1'), 'id')
                ->from('usuario')
                ->where('estatus <> 99');

        echo $this->datatables->generate();
    }

    public function agregar_usuario() {
        if ($this->input->post('accion') == 'nuevo') {
            $this->db->select('id');
            $query = $this->db->get_where('usuario', array('username' => $this->input->post('username'), 'estatus' => '<> 99'));

            if ($query->result() != null) {
                $this->session->set_flashdata('usuario_no_disponible', 'El nombre de usuario no está disponible.');
            } else {

                $data = array(
                    'perfil' => $this->input->post('perfil'),
                    'username' => $this->input->post('username'),
                    'password' => $this->encrypt->encode($this->input->post('password')),
                    'estatus' => 0
                );

                $this->db->insert('usuario', $data);
            }

            redirect(base_url() . '#usuarios', 'refresh');
        } else {
            $id = $this->input->post('tId');
            $this->editar_usuario($id);
        }
        
    }

    public function editar_usuario($id) {
        $data = array(
            'perfil' => $this->input->post('perfil'),
            'username' => $this->input->post('username'),
            'password' => $this->encrypt->encode($this->input->post('password'))
        );

        $this->db->where('id', $id);
        $this->db->update('usuario', $data);

        redirect(base_url() . '#usuarios', 'refresh');
    }

    public function eliminar_usuario($id) {
        $data = array(
            'estatus' => 99
        );

        $this->db->where('id', $id);
        $this->db->update('usuario', $data);

        redirect(base_url() . '#usuarios', 'refresh');
    }

    private function validar_sesion() {
        if ($this->session->userdata('is_logued_in') != TRUE) {
            $data['token'] = '';
            $this->load->view('login_view', $data);
        }
    }

}
