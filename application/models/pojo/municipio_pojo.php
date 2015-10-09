<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cliente_pojo
 *
 * @author normis
 */
class MunicipioPojo {

//Propiedades de un curso
private $IdMunicipio;
private $nombreMunicipio;


/**
* Constructor default.
*/
function getIdMunicipio() {
   return $this->IdMunicipio;
}

function getNombreMunicipio() {
   return $this->nombreMunicipio;
}

function setIdMunicipio($IdMunicipio) {
   $this->IdMunicipio = $IdMunicipio;
}

function setNombreMunicipio($nombreMunicipio) {
   $this->nombreMunicipio = $nombreMunicipio;
}

}