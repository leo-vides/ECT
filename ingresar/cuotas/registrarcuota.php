<?php 

include"../acceso/classsesion.php";
include"../acceso/session.php";
include"../config/conexion.php";

class nuevacuota extends conexion{
      public $id;
      public $cuota;
      public $descripcion;
      public $precio;
      public $consultacuota;
      public $comprobar_cod;
      public $existe_cod;
      public $comprobarcuota;
      public $existe_cuota;

    public function guardarcuota($id,$cuota, $precio, $descripcion){
          
          $this->id=$id;
          $this->cuota=$cuota;
          $this->descripcion=$descripcion;
         $this->precio=$precio;
		      

		$this->comprobar_cuota=$this->con->query("SELECT cuota FROM cuotas WHERE cuota='$this->cuota'"); 
        $this->existe_cuota=$this->comprobar_cuota->num_rows;

        if($this->existe_cuota>0){
           echo "<script>alert ('La cuota ".$this->cuota." ya existe')</script>";
           echo "<script>window.location.href='formcuota.php'</script>";
        }
        
        $this->comprobar_cod=$this->con->query("SELECT id FROM cuotas WHERE id='$this->id'"); 
        $this->existe_cod=$this->comprobar_cod->num_rows;

        if($this->existe_cod>0){
           echo "<script>alert ('La cuota con el codigo ".$this->id." ya existe')</script>";
           echo "<script>window.location.href='formcuota.php'</script>";
        }
 
        if ($this->existe_cuota==0 && $this->existe_cod==0){
           
		  $this->consultacuota=$this->con->query("INSERT INTO cuotas(id, cuota, descripcion, precio) VALUES ('$this->id', '$this->cuota', '$this->descripcion', '$this->precio')");
		  echo"<script>alert('La cuota con el codigo".$this->id." fue registrada'); window.location.haref='index.php';</script>";
       
         }

    }


}


$objetonuevo2 = new nuevacuota();
$objetonuevo2->guardarcuota($_POST['id'], $_POST['cuota'], $_POST['precio'], $_POST['descripcion']);
print "<script>window.location='index.php';</script>";


 ?>