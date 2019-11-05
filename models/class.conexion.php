<?php

	class Conexion 
	{
		protected $db_connection; 

		function __construct()
		{
			try{
				$this->db_connection = new PDO('mysql:host=localhost;dbname=biblioteca;charset=utf8', 'root', '1234');	
			}catch(Exception $e){
				//TODO: autoinstall
				 die ('Error'.$e->GetMesasge());
			}
		}
	}	


    
    
