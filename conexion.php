<?php
	/*
		Clase de conexión a MySQL con PDO
		Marko Robles
		Códigos de Programación
	*/
	class Conexion extends PDO
	{
		private $hostBd = 'mysql-63975-0.cloudclusters.net:12402'; 
		private $nombreBd = 'dbGym';
		private $usuarioBd = 'admin';
		private $passwordBd = 'Ciit13iva.';
		
		public function __construct()
		{
			try{
				parent::__construct('mysql:host=' . $this->hostBd . ';dbname=' . $this->nombreBd . ';charset=utf8', $this->usuarioBd, $this->passwordBd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				
				} catch(PDOException $e){
				echo 'Error: ' . $e->getMessage();
				exit;
			}
		}
	}
?>