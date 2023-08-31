<?php
	/**
	 * 
	 */
	include"../acceso/classsesion.php"; 
	include"../acceso/session.php";
	include "../config/conexion.php";
	
	class Eliminar extends conexion
	{
		public $idmidi;
		public $consulta;
		public function borrar($id) 
		{
			$this->idmidi=$id;
			$this->consulta=$this->con->query("DELETE FROM midis WHERE idmidi='$this->idmidi'");
			echo "<script>alert('Midi eliminado');window.location.href='index.php';</script>";//esto muestra un mensaje y vuelve a el archivo index
			# code...
		}
	}
	$objetoeliminar=new Eliminar();
	$objetoeliminar->borrar ($_GET ['idmidi']);

?>