
<?php

class municipio extends CI_Controller {

    var $base; //URL base http://localhost:8080/cotizador
    var $css; //ruta del archivo de hoja de estilo

    /**
     * Constructor default.
     */

    function municipio() {
        parent::__construct();
//Extra variables de archivo application|config|config.php
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
//Carga el modelo en application|models
        $this->load->model('municipio_model');
        $this->load->library(array('session'));
        $this->load->helper(array('url', 'form'));
    }

    /**
     * Función default.
     */
    function index() {
//Datos que se desplegarán en la vist
   /**     if ($this->session->userdata('perfil')) {
    * 
    */
        $data['datos'] = $this->municipio_model->query();
        $data['css'] = $this->css;
        $data['base'] = $this->base;
        $data['titulo'] = 'Administración de Municipio';
//Carga la vista de application|views|curso|lista_curso.php
        $this->load->view('lista_municipio/lista_municipio.php', $data);
      /**  } else {
            redirect(base_url() . 'login');
        }**/
    }

    /**
     * Método para insertar un registro en la Base de datos.
     */
    function insert() {
        $municipio = new MunicipioPojo(); //Objeto POJO
        $municipio->setIdMunicipio($this->input->post('IdMunicipio', TRUE));
        $municipio->setNombreMunicipio($this->input->post('nombreMunicipio', TRUE));
        
        if (!($municipio->getNombreMunicipio())) {//Carga la vista de application|views|curso|lista_cliente.php
            $data['title_page'] = 'Agregar un municipio';
            $this->load->view('add_municipio.php', $data);
            return;
        }
        $this->cliente_model->insert($municipio);
        $this->index(); //Invoco la opción listar
    }
    function showadd(){
         $data['title_page'] ="Agregar";
         $data['base'] = $this->base;
        $this->load->view('add_municipio.php',$data);
        
    }
            function delete($IdMunicipio) {
//Verifica que el idCliente no venga vacío
        if (isset($IdMunicipio)) {
            $this->municipio_model->delete($IdMunicipio); //Invoca el método del modelo
        }
        $this->index(); //Invoco la opción listar
    }
  function layout(){
        $datos['header']="<h1>hola soy un encabezado</h1>";
        $datos['right']=$this->load->view('forma.php','',true);
         $this->load->view('layout.php',$datos);
        
        
    }
       public function modificar() {
        $this->load->helper('url');
        $municipio = new MunicipioPojo();
        $municipio->setIdMunicipio($this->input->post('idMunicipio'));
        $municipio->setNombreMunicipio($this->input->post('nombreMunicipio'));
       
    }
          public function consulta() {
              if ($this->session->userdata('perfil')) {
        $data['datos'] = $this->municipio_model->query();
        $data['css'] = $this->css;
        $data['base'] = $this->base;
        $data['titulo'] = 'Administración de municipio';

        //Carga la vista de application|views|curso|lista_curso.php
        $this->load->view('lista_municipio/lista_municipio.php', $data);
        } else {
            redirect(base_url() . 'login');
        }
    } 
public function trae($IdMunicipio) {

        $data['datos'] = $this->municipio_model->trae($id);
        $data['base'] = $this->base;
        $this->load->view('modificar_municipio.php', $data);
}

}