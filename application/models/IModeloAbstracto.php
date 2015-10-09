<?php

interface IModeloAbstracto {
/**
* Método que permite extraer tuplas en una base de datos.
* @param type $obj El objeto a consultar.
*/
public function query($obj);
/**
* Método que nos permitirá insertar tuplas en una base de datos.
* @param type $obj
*/
public function insert($obj);
/**
* Método que nos permitirá eliminar un registro de la base de datos.
* @param type $id
*/
public function delete($id);

/**
* Método que nos permitirá actualizar una tupla de la BD.
* @param type $obj
*/
public function update($obj);
}