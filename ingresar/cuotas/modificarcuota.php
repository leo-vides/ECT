<?php 
include "../acceso/classsesion.php";
include "../acceso/session.php";
include "../config/conexion.php";

class modificarcuota extends conexion {
	  public $existe_cod;
    public $comprobar_cod;
      
      public function datoscuota($id,$idViejo,$cuota,$precio,$descr){

              if($id != $idViejo){ // si el id nuevo es diferente al viejo eso quiere decir que cambio, y solo en ese caso tiene sentido controlar que no exista ya antes de cambiarlo
                $this->comprobar_cod=$this->con->query("SELECT * FROM cuotas WHERE id='$id'");
                $this->existe_cod=$this->comprobar_cod->num_rows;
                if($this->existe_cod>0){ 
                  echo "<script>alert ('La cuota con el codigo ".$id." ya existe')</script>";
                  echo "<script>window.location.href='index.php'</script>";
                }
              }else{
                $this->con->query("UPDATE cuotas SET  cuota='$cuota',precio= '$precio', descripcion='$descr' WHERE id='$id'");
                echo "<script>alert('cuota modificada');window.location='index.php';</script>";
              }
          }


      }



$objmod= new modificarcuota();
$objmod->datoscuota($_POST['id'], $_POST['idViejo'],$_POST['cuota'],$_POST['precio'], $_POST['descripcion']);





             
              