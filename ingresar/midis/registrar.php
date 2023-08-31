<?php
	include"../acceso/classsesion.php"; 
	include"../acceso/session.php";
	include"../config/conexion.php";

	/**
	 * 
	 */
	class Nuevo extends conexion{
		public $idmidi;
		public $nommmidi;
		public $descripcion;
		public $idcategoria;
		public $pdf;
		public $archivo;
		public $consulta;

		public function Guardar($nom,$desc,$cat,$pdf,$arc){
			$this->nommidi=$nom;
			$this->descripcion=$desc;
			$this->idcategoria=$cat;
			$this->pdf=$pdf['name'];
			$this->archivo=$arc['name'];

				$consulta = "INSERT INTO midis(nommidi, descripcion, idcategoria,pdf,archivo) VALUES ('$this->nommidi','$this->descripcion','$this->idcategoria','$this->pdf','$this->archivo')";
				

				$this->consulta=$this->con->query($consulta);


				move_uploaded_file($pdf['tmp_name'], '../archivos/pdf/'.$pdf['name']);
				move_uploaded_file($arc['tmp_name'], '../archivos/midi/'.$arc['name']);
				echo "<script>alert('Midi registrado') ;window.location.href='index.php';</script>";
				# code...
			
		}
	}
	$objetonuevo = new Nuevo();
	$objetonuevo->Guardar($_POST ['nommidi'], $_POST ['descripcion'],  $_POST ['idcategoria'],$_FILES['pdf'],$_FILES['archivo']);
?>