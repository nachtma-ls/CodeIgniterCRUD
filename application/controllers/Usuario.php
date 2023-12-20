<?php

class Usuario extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//comunica con el modelo
		$this->load->model("Model_Usuario");
	}
	//mismo nombre de la vista "index"
	public function index()
	{
		$data['contenido'] = "usuario/index";//enviar a plantilla la vista index
		$data['selAlumnos'] = $this->Model_Usuario->selAlumnos();
		//recupero datos
		$data['listAlumnos'] = $this->Model_Usuario->listAlumnos();
		$this->load->view("plantilla", $data);
	}
	public function insert()
	{
		$datos = $this->input->post();
		if(isset($datos)){
			$txtNombre = $datos['nombre'];
			$txtCarrera = $datos['carrera'];
			$this->Model_Usuario->insertAlumnos($txtNombre, $txtCarrera);
			redirect('');
		}
	}
	public function delete($id = NULL)
	{
		if($id != NULL){
			$this->Model_Usuario->deleteUsuario($id);
			redirect('');
		}
	}
	public function edit($id = NULL)
	{
		if($id != NULL){
			//MUESTRA DATOS
			//=usuario/tuVista
			$data['contenido'] = 'usuario/edit';
			$data['datosAlumno'] = $this->Model_Usuario->editAlumno($id);
			$this->load->view('plantilla',$data);
		}else{
			//REGRESA A INDEX/ENVIAR PARAMETROS
			redirect('');
		}
	}
	public function update()
	{
		$datos = $this->input->post();
		if(isset($datos)){
			$txtId = $datos['id'];
			$txtNombre = $datos['nombre'];
			$txtCarrera = $datos['carrera'];
			$this->Model_Usuario->updateAlumno($txtId, $txtNombre, $txtCarrera);
			redirect('');
		}
	}
}
?>