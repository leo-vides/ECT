<?php
	class conexion {
		public $con;
		public function __construct(){
			$this->con=new mysqli("localhost","root","","sistema");
			if ($this->con->connect_errno){
				echo"Error por favor corrija los dtatos de conexión";

			}
			$this->con->query("SET NAMES 'utf8'");
		}
	}

