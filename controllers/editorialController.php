<?php

	require_once 'models/EditorialModel.php';
	require_once 'views/EditorialView.php';
//require_once 'controllers/controller.php';


   class EditorialController
   {
	   
	   private $model;
	   private $view;
	   
	   public function __construct() {

		    $this->model = new EditorialModel();
       		$this->view = new  EditorialView(); 
	   }
	   
	   public function verEditoriales()
	   {
		  $editoriales = $this->model->getEditoriales();
		  if (!empty($editoriales))
		  {
		   $this->view->mostrarEditorial($editoriales);
	  	  }else
		  {
		 	$this->view->mostrar_mensaje();
	  	  } 
	   }
	   
	   
	   public function cargar_una_editorial()
	   {
		$this->view->cargar_una_editorial();
	   }
	   
	   public function add_editorial()
	   {
		   $id_editorial = $_POS["nroEdit"];
		   $nombre = $_POST["nombre"];
		   $this->model->grabar_una_editorial($id_editorial,$nombre);
			header("Location:".HOME);
	   }
	   
	}
	   
   