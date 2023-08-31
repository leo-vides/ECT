
<?php
/**
 * 
 */
include"../acceso/classsesion.php"; 
include"../acceso/session.php";
include "../config/conexion.php";
class modificar extends conexion{
	public $idusuario;
	
	public function datos ($id,$usuario,$password,$apellido,$nombre,$dni,$edad,$fechanac,$direccion,$localidad,$provincia,$nacionalidad,$tel_cel,$tel,$email,$sexo,$privilegio){

		$this->con->query("UPDATE usuarios SET usuario='$usuario',password='$password', apellido='$apellido', nombre='$nombre', dni='$dni', edad='$edad', fechanac='$fechanac', direccion='$direccion', localidad='$localidad', provincia='$provincia', nacionalidad='$nacionalidad', tel_cel='$tel_cel', tel='$tel', email='$email', sexo='$sexo', privilegio='$privilegio' WHERE idusuario ='$id'");

		echo "<script>alert ('Usuario modificado'); window.location.href='index.php'; </script>";
	}
	
}
$objeto =  new modificar ();
$objeto->datos ($_POST ['idusuario'],$_POST ['usuario'],$_POST ['password'], $_POST ['apellido'], $_POST ['nombre'], $_POST ['dni'], $_POST ['edad'], $_POST ['fechanac'], $_POST ['direccion'], $_POST ['localidad'], $_POST ['provincia'], $_POST ['nacionalidad'], $_POST ['tel_cel'], $_POST ['tel'], $_POST ['email'], $_POST ['sexo'], $_POST ['privilegio']);
?>