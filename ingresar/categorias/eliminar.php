<?php
	/**
	 * 
	 */
	include"../acceso/classsesion.php"; 
	include"../acceso/session.php";
	include "../config/conexion.php";
	
	class Eliminar extends conexion
	{
		public $idcategoria;
		public $consulta;
		public function borrar($id) 
		{
			$this->idcategoria=$id;
			$this->consulta=$this->con->query("DELETE FROM categoria WHERE idcategoria='$this->idcategoria'");
			echo "<script>alert('Categoria eliminada');window.location.href='index.php';</script>";//esto muestra un mensaje y vuelve a el archivo index
			# code...
		}
	}
	$objetoeliminar=new Eliminar();
	$objetoeliminar->borrar ($_GET ['idcategoria']);

?>