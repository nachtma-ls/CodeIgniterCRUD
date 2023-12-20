<?php

class Model_Usuario extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//comunica con el modelo
		$this->load->database();
	}
	//mismo nombre de la vista "index"
	public function selAlumnos()
	{
		$query = $this->db->query("SELECT * FROM alumnos");
		//retornamos todo el contenido de la tabla
		return $query->result();
	}
	//funcion insertar
	public function insertAlumnos($nombre, $carrera)
	{
		$arrayDatos = array('nombre'=>$nombre, 'carrera'=>$carrera);
		$this->db->insert('alumnos',$arrayDatos);
	}
	//funcion mostrar
	public function listAlumnos()
	{
		$query = $this->db->query("select * from alumnos");
		return $query->result();
	}
	//funcion eliminar
	public function deleteUsuario($id)
	{
		//where campoBD, variable
		$this->db->where('id', $id);
		//delete(tabla)
		$this->db->delete('alumnos');
	}
	//funcion validar usuario
	public function editAlumno($id)
	{
		$consulta = $this->db->query("select * from alumnos where id=$id");
		return $consulta->result();

	}
	//funcion editar
	public function updateAlumno($txtId, $txtNombre, $txtCarrera)
	{
		$array = array('nombre'=>$txtNombre, 'carrera'=>$txtCarrera);
		$this->db->where('id', $txtId);
		$this->db->update('alumnos', $array);
	}
}
?>