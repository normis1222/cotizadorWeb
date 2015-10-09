<?php

require_once 'IModeloAbstracto.php'; //importa la clase
require 'pojo/municipio_pojo.php'; //busca el archivo curso_pojo
/**
 * Description of cliente_model
 *
 * @author normis
 */

class municipio_model extends CI_Model {

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
//Carga el acceso configurada en application|config|database.php
        $this->load->database();
    }

    /**
     * Método que extrae todos los cursos.
     * @param <String> $idCliente
     * @return Un arreglo de las tuplas encontradas.
     */
    public function query($IdMunicipio = '') {
        $qry = null;

        if (empty($IdMunicipio)) { //verifica si hay una área en específico
            $qry = $this->db->get('municipio'); //extrae toda la tabla
        } else {
            $qry = $this->db->get('municipio', array('IdMunicipio' => $IdMunicipio));
        }
        $data = array();
        foreach ($qry->result() as $key => $reg) {
            
            $municipio = new MunicipioPojo();
            
            $municipio->setIdMunicipio($reg->IdMunicipio);
            $municipio->setNombreMunicipio($reg->nombreMunicipio);
          
            array_push($data, $municipio);
        }
        return $data;
    }

    /**
     *
     * @param CursoPojo $municipio
     */
    public function insert($municipio) {
        if ($municipio instanceof MunicipioPojo) { //Verifica si es un área a insertar
//Crea un arreglo Nombre campo y valor
            $datos = array(
                "IdMunicipio" => $municipio->getIdMunicipio(),
                "nombreMunicipio" => $municipio->getNombreMunicipio(),
              
            );
            $comando = $this->db->insert_string("municipio", $datos);
            $this->db->query($comando);
        }
    }

    /**
     *
     * @param <type> $IdMunicipio
     */
    public function delete($IdMunicipio) {
        if (isset($IdMunicipio)) {
            $stmtDelete = "Delete from municipio where IdMunicipio = " . $IdMunicipio;
            $this->db->query($stmtDelete);
        }
    }

    /**
     *
     * @param CursoPojo $municipio
     */
    public function update($municipio) {
        if ($municipio instanceof MunicipioPojo) {
//Crea un arreglo con Nombre de campo y valor
            $datos = array(
                "IdMunicipio" => $IdMunicipio->getIdMunicipio(),
                "nombreMunicipio" => $municipio->getNombreMunicipio(),
            );
              $where = "IdMunicipio = ".$municipio->getIdMunicipio();
            $comando = $this->db->update_string('municipio', $datos, $where);
            $this->db->query($comando);
        }
    }
     public function trae($id) {
        $this->db->select('IdMunicipio,nombreMunicipio');
        $this->db->from('municipio');
        $this->db->where('IdMunicipio', $id);
        $consulta = $this->db->get();

        $data = array();

        foreach ($consulta->result() as $key => $reg) {

            $municipio = new MunicipioPojo();

            $municipio->setIdMunicipio($reg->IdMunicipio);
            $municipio->setNombreMunicipio($reg->nombreMunicipio);
            
            array_push($data, $municipio);
        }

        return $data;
}
}


