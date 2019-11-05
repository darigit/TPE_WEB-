<?php

	class classArticulo
	{
		
		private $db;
		
		public function __construct()
		{
			$this->db = new classBase;
		}
		
		public function ObtenerLibros()
		{
			$this->db->query('SELECT * FROM libro');
			return $this->db->registros();
		}
	}