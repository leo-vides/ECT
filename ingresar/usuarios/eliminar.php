<?php
	/**
	 * 
	 */
	include"../acceso/classsesion.php"; 
	include"../acceso/session.php";
	include "../config/conexion.php";
	
	class Eliminar extends conexion
	{
		public $idusuario;
		public $consulta;
		public function borrar($id) 
		{
			$this->idusuario=$id;
			$this->consulta=$this->con->query("DELETE FROM usuarios WHERE idusuario='$this->idusuario'");
			echo "<script>alert('Usuario eliminado');window.location.href='index.php';</script>";//esto muestra un mensaje y vuelve a el archivo index
			# code...
		}
	}
	$objetoeliminar=new Eliminar();
	$objetoeliminar->borrar ($_GET ['idusuario']);

?>