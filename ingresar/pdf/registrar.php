<?php
	include"../acceso/classsesion.php"; 
	include"../acceso/session.php";
	include"../config/conexion.php";

	/**
	 * 
	 */
	class Nuevo extends conexion{
		public $nomcategoria;
		
		
		
		public $consulta;

		public function Guardar($nom){
			$this->nomcategoria=$nom;
			

			


				$this->consulta=$this->con->query("INSERT INTO categoria (nomcategoria) VALUES ('$this->nomcategoria')");
				echo "<script>alert('Categoría registrada') ;window.location.href='index.php';</script>";
				# code...
			
		}
	}
	$objetonuevo = new Nuevo();
	$objetonuevo->Guardar ($_POST ['nomcategoria']);
?>