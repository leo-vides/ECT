<?php include "../config/conexion.php";
include"../acceso/classsesion.php";
include"../acceso/session.php";
class formcuota extends conexion{
    
     public $id;
     public $cuota;
      public $descripcion;
      public $precio;
     public $consulta;
     public $mostrarcuota;
     public $consulta2;
     public $mostrar2;

     public function datoscuota(){
           
         
         ?>
         
         <form class="form-horizontal" method="POST" action="registrarcuota.php">
           

          <div class= "form-group">
            <label for="cuota" class="col-lg-4 control-label">Nombre de la cuota</label>
            <input type="text" id="cuota" class="form-control col-sm-4" name="cuota" required="required"></input>
          </div>

          <div class= "form-group">
            <label for="id" class="col-lg-4 control-label">Codigo de la Cuota</label>
            <input type="text" id="id" class="form-control col-sm-4" name="id"  required="required"></input>
          </div> 

          <div class= "form-group">
            <label for="descripcion" class="col-lg-3 control-label">Descripcion</label>
            <input type="text" id="descripcion" class="form-control col-sm-4" name="descripcion" required="required"></input> 
          </div>  
         
          <div class= "form-group">
            <label for="precio" class="col-lg-3 control-label">Precio</label>
            <input type="text" id="precio" class="form-control col-sm-4" name="precio" required="required"></input> 
          </div>
          
         
        
                               
          <div class="form-group">
          <button class="btn btn-success">Registrar</button>  
          </div>

        </form>


        <?php    
       }      
     }   
    
  