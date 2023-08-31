<?php
	include"../acceso/classsesion.php"; 
	include"../acceso/session.php";
	include"../config/conexion.php";

	/**
	 * 
	 */
	class Nuevo extends conexion{
		public $apellido;
		public $nombre;
		public $dni;
		public $edad;
		public $fechanac;
		public $direccion;
		public $localidad;
		public $provincia;
		public $nacionalidad;
		public $tel_cel;
		public $tel;
		public $email;
		public $sexo;
		public $privilegio;
		public $comprobar_dni;
		public $comprobar_email;
		public $existe_dni;
		public $existe_email;
		public $consulta;

		public function Guardar($ape,$nom,$dni,$edad,$fecha,$dire,$loc,$prov,$nac,$telc,$tel,$email,$sex,$prv){
			$this->apellido=$ape;
			$this->nombre=$nom;
			$this->dni=$dni;
			$this->edad=$edad;
			$this->fechanac=$fecha;
			$this->direccion=$dire;
			$this->localidad=$loc;
			$this->provincia=$prov;
			$this->nacionalidad=$nac;
			$this->tel_cel=$telc;
			$this->tel=$tel;
			$this->email=$email;
			$this->sexo=$sex;
			$this->privilegio=$prv;



			$this->comprobar_dni=$this->con->query("SELECT dni FROM usuarios WHERE dni='$this->dni'" );
			$this->existe_dni=$this->comprobar_dni->num_rows;
			if ($this->existe_dni>0) {
				echo "<script>alert('El dni ".$this->dni." ya existe') ;</script> ";
				echo "<script> window.location.href='formusuario.php';</script>";//Esto es para  que vuelva al formulario
			}

			$this->comprobar_email=$this->con->query("SELECT email FROM usuarios WHERE email='$this->email'" );
			$this->existe_email=$this->comprobar_email->num_rows;
			if ($this->existe_email>0) {
				echo "<script>alert('El email ".$this->email." ya existe') ;</script> ";
				echo "<script> window.location.href='formusuario.php';</script>";
			}

			if ($this->existe_dni==0 && $this->existe_email==0)  {

				$this->consulta=$this->con->query("INSERT INTO usuarios (apellido, nombre, dni, edad, fechanac, direccion, localidad, provincia, nacionalidad, tel_cel, tel, email, sexo, privilegio ) VALUES ('$this->apellido', '$this->nombre','$this->dni','$this->edad','$this->fechanac', '$this->direccion', '$this->localidad', '$this->provincia', '$this->nacionalidad', '$this->tel_cel', '$this->tel', '$this->email', '$this->sexo', '$this->privilegio')");
				echo "<script>alert('Usuario registrado') ;window.location.href='index.php';</script>";
				# code...
			}
		}
	}
	$objetonuevo = new Nuevo();
	$objetonuevo->Guardar ($_POST ['apellido'], $_POST ['nombre'], $_POST ['dni'], $_POST ['edad'], $_POST ['fechanac'], $_POST ['direccion'], $_POST ['localidad'], $_POST ['provincia'], $_POST ['nacionalidad'], $_POST ['tel_cel'], $_POST ['tel'], $_POST ['email'], $_POST ['sexo'], $_POST ['privilegio']);
?>