<?php

//Clase Agenda Online

class Agenda
{
	private $db;
	public function __construct($base)
	{
		$this->db = $base;
	}

	//Insertar nuevo evento en base de datos
	public function insertAgenda($unidad, $fecha)
	{
		$respuesta = $this->db->enviarQuery("INSERT INTO clases VALUES (DEFAULT, '$unidad', '$fecha')");

		if (!$respuesta) {
			echo $this->db->error;
			return false;
		} else {
			return $respuesta;
		}
	}
	//Obtiene todos los eventos de la agenda de la base de datos
	public function getAgenda()
	{
		$respuesta = $this->db->enviarQuery("SELECT * FROM clases");
		if (!$respuesta) {
			echo $this->db->error;
			return false;
		} else {
			return $respuesta;
		}
	}
	//Borrar eventos de la agenda en la base de datos por $id 
	public function borrarAgenda($id)
	{
		$respuesta = $this->db->enviarQuery("DELETE FROM clases WHERE id_clase=$id");
		if (!$respuesta) {
			echo $this->db->error;
			return false;
		} else {
			return $respuesta;
		}
	}
}