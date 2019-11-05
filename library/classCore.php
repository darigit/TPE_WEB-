<?php

  
//	Mapear la url ingresada desde el navegador
//	1.- Controlador
//	2.- Metodo
//	3.- Parametros
//	Ejemplo: /articulos/actualizar/4

	class classCore{
		protected $controladorActual = 'PaginaController';
		protected $metodoActual = 'iniciador';
		protected $parametros = [];
		
		
		// Constructor
		
		public function __construct()
		{
//			print_r($this->getUrl());
			 $url = $this->getUrl();
			
			// Buscar si existe el controlador buscado
			if (file_exists('controllers/'.ucwords($url[0]).'.php'))
			{
				// si existe se setea como controlador por defecto
				$this->controladorActual = ucwords($url[0]);
				// usenet indice
				unset($url[0]);
			}	
			
//			El array biene formado de la siguiente manera en la posicion
//			0.- controlador
//			1.- metodo
//			2.- parametro
			
			// requerir el controlador
			require_once 'controllers/'.$this->controladorActual.'.php';
			$this->controladorActual = new $this->controladorActual;
			
			//Cheaquear la segunda parte de lA Url que seria el metodo
			if (isset($url[1]))
			{
				if (method_exists($this->controladorActual,$url[1]))
				{
					// Chequeamos el metodo
					$this->metodoActual = $url[1];
					// usenet indice
					unset($url[1]);
				}
			}
			// Probamos traer los metodos
			//	echo $this->metodoActual;
			
			// Obtener los parametros
			$this->parametros = $url ? array_values($url) : [];
			
			// Vamos a llamar a la funcion callback que permite traer los arreglos que se han configurado en la url
			call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
			
		}
		
		public function getUrl(){
//			echo $_GET['url'];
			// validamos las url
			if (isset($_GET['url'])){
				// cortamos todos los espacios con el slach en la url
				$url = rtrim($_GET['url'],'/');
				// para poder ser interpretado como un url necesitamos una validacion
				$url=filter_var($url,FILTER_SANITIZE_URL);
				$url = explode('/',$url);
				return ($url);
			}
		}
	}