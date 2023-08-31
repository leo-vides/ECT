<?php 

session_start();
include"acceso/classsesion.php";
include"config/conexion.php";

class iniciar extends conexion{

     public $usua;
     public $password;
     public $consulta;
     public $registros;

     public function iniciarsession($us,$pass){

      $this->usua=$us;
      $this->password=$pass;
      $this->consulta=$this->con->query("SELECT * FROM usuarios WHERE usuario='$this->usua' AND password='$this->password'");
      if($this->registros=$this->consulta->fetch_array()){
       
       $_SESSION['usuario']=new user($this->registros['idusuario'],$this->registros['usuario'], $this->registros['apellido'], $this->registros['nombre'], $this->registros['privilegio'] );
       
       if($this->registros['privilegio'] == 1){
          header("Location: usuarios/");
       }else{
          header("Location: indexpagsistema/index.php");   
       }      
       

       }else
       {
        
       echo"<script>alert('nombre de usuario o Password no existe'); window.location.href='index.html';</script>";

      }

    } 


}

$objsession= new iniciar();
$objsession->iniciarsession($_POST['usuario'], $_POST['password']);



 ?>