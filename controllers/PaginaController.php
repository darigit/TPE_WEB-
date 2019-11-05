<?php

    class PaginaController extends classControlador
	{

		public function __construct()
		{
			
			$this->articuloModelo = $this->modelo('classArticulo');
//		   echo('El controlador de la pagina esta cargada');
			
		} 
		
		public function articulo(){
			echo 'La vista no existe';
		}		

		public function actualizar($num_registro)
		{
			echo $num_registro;
		}		

		public function iniciador()
		{
			// Llamo a la clase articulo - metodo ObtenerArticulos()
			
			$libros = $this->articuloModelo->ObtenerLibros();
			$datos = ['titulo' => 'Dari Jorge Programer - 2018','libros'=>$libros];
			$this->vista('pagina/inicio',$datos);
		}
	}		