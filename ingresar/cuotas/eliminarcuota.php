<?php 

include "../acceso/classsesion.php";
include "../acceso/session.php";
include "../config/conexion.php";
 
 class eliminarcuota extends conexion {

        public $id;
        public $consulta;

        public function borrarcuota($id) {
               
           $this->id=$id;
           $this->consulta=$this->con->query("DELETE FROM cuotas WHERE id='$this->id'");   
           print "<script>alert('cuota eliminada');window.location='index.php';</script>";
         }

 } 

$objeliminar = new eliminarcuota();
$objeliminar->borrarcuota($_GET['id']);

 ?>