<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _menu_output($output = null)
	{
		$this->load->view('menu.php',$output);
	}

	public function index()
	{
                $this->clientes();
	}

	/*public function costumers()
	{
            $crud = new grocery_CRUD();

            $crud->set_table('customers');
            $crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
            $crud->display_as('salesRepEmployeeNumber','from Employeer')
                     ->display_as('customerName','Name')
                     ->display_as('contactLastName','Last Name');
            $crud->set_subject('Cliente');
            $crud->set_relation('salesRepEmployeeNumber','employees','lastName');

            $output = $crud->render();

            $this->_menu_output($output);
	}
*/
        public function clientes()
	{
            $crud = new grocery_CRUD();

            $crud->set_table('clientes');
            $crud->columns('escuela','cct','Profesor','idModalidad','idMunicipio','idColonia','idCalle','numero');
            $crud->display_as('idMunicipio','municipio');
            $crud->display_as('idModalidad','modalidad');
            $crud->display_as('idColonia','colonia');
            $crud->display_as('idCalle','calle');
            $crud->set_subject('Clientes');
          $crud->set_relation('idModalidad','modalidad','modalidad');
          $crud->set_relation('idMunicipio','municipio','NomMunicipio');
          $crud->set_relation('idColonia','colonia','colonia');
          $crud->set_relation('idCalle','calle','nombreCalle');
           $crud->required_fields('escuela','cct','idMunicipio','idColonia');
           

            $output = $crud->render();

            $this->_menu_output($output);
	}
       public function proveedores()
	{
            $crud = new grocery_CRUD();

            $crud->set_table('proveedor');
            $crud->columns('nomProveedor','idCompania','numTelefono','email');
            $crud->display_as('idCompania','compania');
            $crud->set_subject('proveedor');
          $crud->set_relation('idCompania','compania','nombreCompania');
           $crud->required_fields('nomProveedor','idCompania','numTelefono','email');
           

            $output = $crud->render();

            $this->_menu_output($output);
	}
        public function compania()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('compania');
            $crud->columns('nombreCompania','idMunicipio','idColonia','idCalle','numero');
            $crud->display_as('idMunicipio','municipio');
            $crud->display_as('idColonia','colonia');
            $crud->display_as('idCalle','calle');
            $crud->set_subject('compania');
            $crud->set_relation('idMunicipio','municipio','NomMunicipio');
            $crud->set_relation('idColonia','colonia','colonia');
            $crud->set_relation('idCalle','calle','nombreCalle');
            
            

            $output = $crud->render();

            $this->_menu_output($output);
        }
        
        /*public function usuarios()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('usuario');
            $crud->columns('username','idperfil','password');
            $crud->display_as('username','Usuario');
            $crud->display_as('idperfil','Tipo de Usuario');
            $crud->display_as('password','Contraseña');
            $crud->change_field_type('password','password');
            $crud->set_subject('Usuario');
            
            $crud->set_relation('idperfil','cat_perfil','descripcion');

            $output = $crud->render();

            $this->_menu_output($output);
        }*/
        
        
	public function usuarios(){
            $crud = new grocery_CRUD();
            $crud->set_table('usuario');
            $crud->set_subject('Usuario');
            $crud->required_fields('username');

            $crud->columns('username','idperfil','password');
            $crud->fields('username','idperfil','password');
            $crud->change_field_type('password', 'password');
            
            $crud->set_relation('idperfil','cat_perfil','descripcion');

            $crud->callback_before_insert(array($this,'encrypt_password_callback'));
            $crud->callback_before_update(array($this,'encrypt_password_callback'));

            $crud->callback_edit_field('password',array($this,'decrypt_password_callback'));

            $output = $crud->render();
            $this->_menu_output($output);
	}

        function encrypt_password_callback($post_array, $primary_key = null)
        {
          $this->load->library('encrypt');
          $key = 'super-secret-key';
          $post_array['password'] = $this->encrypt->encode($post_array['password'], $key);
          return $post_array;
        }

        function decrypt_password_callback($value)
        {
          $this->load->library('encrypt');
          $key = 'super-secret-key';
          $decrypted_password = $this->encrypt->decode($value, $key);
          return "<input type='password' name='password' value='$decrypted_password' />";
        }
        
        
        public function catusuarios()
        {
            $crud = new grocery_CRUD();
            $crud->set_table('cat_perfil');
            $crud->columns('idperfil','descripcion');
            $crud->display_as('idperfil','Identificador');
            $crud->set_subject('Perfil');
            $crud->required_fields('descripcion');
            
            $output = $crud->render();
            
            $this->_menu_output($output);
        }
           public function municipio()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('municipio');
            $crud->columns('idMunicipio','NomMunicipio');
            $crud->set_subject('municipio');
            $crud->set_relation('idunidad','cat_unidad','descripcion');
            $crud->required_fields('idMunicipio','NomMunipio');
            
            

            $output = $crud->render();

            $this->_menu_output($output);
        }
        public function productos()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('producto');
            $crud->columns('nombre','idunidad','precio','iva');
            $crud->display_as('idunidad','Unidad');
            $crud->set_subject('Producto');
            $crud->set_relation('idunidad','cat_unidad','descripcion');
            $crud->required_fields('nombre','Unidad','iva','precio');
            
            

            $output = $crud->render();

            $this->_menu_output($output);
        }
 public function cotizaciones()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('cotizacion');
            $crud->columns('Fecha','cliente','idproducto','cantidad','precio','iva','subTotal','total');
            $crud->display_as('idCliente','Cliente');
            $crud->display_as('idproducto','Producto');
            $crud->set_subject('cotizacion');
            $crud->set_relation('idCliente','clientes','escuela');
            $crud->set_relation('idproducto','producto','nombre');
            $crud->set_relation('precio','producto','precio');
            $crud->required_fields('idCliente','idproducto','iva','precio');
            
            

            $output = $crud->render();

            $this->_menu_output($output);
        }
        public function ordenes()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('ordenes');
            $crud->columns('Fecha','idCliente','idproducto','cantidad','precio','iva','subTotal','total');
            $crud->display_as('idCliente','cliente');
            $crud->display_as('idproducto','producto');
            $crud->set_subject('ordenes');
            $crud->set_relation('idCliente','clientes','escuela');
            $crud->set_relation('idproducto','producto','nombre');
            $crud->set_relation('precio','producto','precio');
            $crud->required_fields('idCliente','idproducto','iva','precio');
            
            $crud->callback_add_field('cantidad',array($this,'add_field_callback_1'));
            //$crud->callback_add_field('GANANCIA',array($this,'add_field_callback_2'));
            //$crud->callback_add_field('PRECIO_NETO',array($this,'add_field_callback_3'));
           // $crud->callback_add_field('IVA',array($this,'add_field_callback_4'));
            //$crud->callback_add_field('TOTAL',array($this,'add_field_callback_5'));     
            

            $output = $crud->render();

            $this->_menu_output($output);
            
        }
        function add_field_callback_1() //PRECIO COMPRA
{
    return  ' <input name="cantidad" type="text"value="ilkunybtght" class="form-control">';
}
}