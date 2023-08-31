
<?php
/**
 * 
 */
include"../acceso/classsesion.php"; 
include"../acceso/session.php";
include "../config/conexion.php";
class modificar extends conexion{
	public $idcategoria;
	
	public function datos ($id,$nom){

		$this->con->query("UPDATE categorias SET nomcategoria='$nom' WHERE idcategoria ='$id'");

		echo "<script>alert ('Categoria modificado'); window.location.href='index.php'; </script>";
	}
	
}
$objeto =  new modificar ();
$objeto->datos ($_POST ['idcategoria'], $_POST ['nomcategoria']);
?>