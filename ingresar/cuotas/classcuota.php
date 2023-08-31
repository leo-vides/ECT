<?php 
 
include'../config/conexion.php';
class listarcuota extends conexion {
      public $consulta;
      public $filas;
      public function mostrarcuota(){
           $this->consulta=$this->con->query("SELECT * FROM cuotas");

           while ($this->filas=$this->consulta->fetch_array()){
           ?>

           
                  
                  <tr>
                     
                  
                  	<td><?php echo $this->filas['cuota']; ?></td>
                  	<td><?php echo $this->filas['precio']; ?></td>
                  	<td><?php echo $this->filas['descripcion']; ?></td>
                    <td><a class="btn btn-success" href="formcuotamod.php?id=<?php echo $this->filas['id'];?>">Modificar</a>
                    <a onclick="return confirm('&iquest; Desea eliminar la cuota?');" class="btn btn-danger" href="eliminarcuota.php?id=<?php echo $this->filas['id'];?>">Eliminar</a></td>

                  </tr>
       
           <?php  
           }  

      }
     } 

class buscarcuota extends conexion {
      public $consulta;
      public $filas;
      public $busqueda;
      public function mostrarcuota($buscar,$tipo){
       $this->busqueda=$buscar;
       switch ("$tipo") {
          case 1 : $this->consulta=$this->con->query("SELECT * FROM cuotas WHERE cuota LIKE '%$this->busqueda%'" );
          break;
          case 2 : $this->consulta=$this->con->query("SELECT * FROM cuotas WHERE id LIKE '%$this->busqueda%'" ) ;
          break; 
          case 3 : $this->consulta=$this->con->query("SELECT * FROM cuotas WHERE precio LIKE '%$this->busqueda%'" );
          break;
          case 4 : $this->consulta=$this->con->query("SELECT * FROM cuotas WHERE descripcion LIKE '%$this->busqueda%'" );
          break;

       }
             

           while ($this->filas=$this->consulta->fetch_array()){
           ?>

           
                  
                  <tr>
                    
                    <td><?php echo $this->filas['id']; ?></td>
                    <td><?php echo $this->filas['cuota']; ?></td>
                    <td><?php echo $this->filas['descripcion']; ?></td>
                    <td><?php echo $this->filas['precio']; ?></td>
                    <td><a class="btn btn-success" href="formcuotamod.php?id=<?php echo $this->filas['id'];?>">Modificar</a>
                    <a onclick="return confirm('&iquest; Desea eliminar el registro?');" class="btn btn-danger" href="eliminarcuota.php?id=<?php echo $this->filas['id'];?>">Eliminar</a></td>

                  </tr>
              
           <?php  
           }  

      }
  } 



class datoscuota extends conexion{
    
     public $id;
     public $consulta;
     public $mostrarcuota;
     public $consulta2;
     public $mostrar2;

     public function mostrarcuota($id){
           
         $this->id=$id;
         $this->consulta=$this->con->query("SELECT * FROM cuotas WHERE id='$this->id'" );
     if($this->mostrarcuota=$this->consulta->fetch_array()){
         ?>
         
         <form class="form-horizontal" method="POST" action="modificarcuota.php">
          
         <div class= "form-group">
            <input type="hidden" id="idViejo" class="form-control col-sm-4" name="idViejo" value="<?php echo $this->mostrarcuota['id'];?>"></input>
         </div>   

          <div class= "form-group">
            <label for="cuota" class="col-lg-4 control-label">Nombre de la Cuota</label>
            <input type="text" id="cuota" class="form-control col-sm-4" name="cuota" value="<?php echo $this->mostrarcuota['cuota'];?>" required="required"></input>
          </div>

          <div class= "form-group">
            <label for="id" class="col-lg-4 control-label">Codigo de la Cuota</label>
            <input type="text" id="id" class="form-control col-sm-4" name="id" value="<?php echo $this->mostrarcuota['id'];?>" required="required"></input>
          </div> 

        
          
          <div class= "form-group">
            <label for="precio" class="col-lg-3 control-label">Precio</label>
            <input type="text" id="precio" class="form-control col-sm-4" name="precio" value="<?php echo $this->mostrarcuota['precio'];?>" required="required"></input> 
          </div>
           
            <div class= "form-group">
            <label for="descripcion" class="col-lg-3 control-label">Descripcion</label>
            <input type="text" id="descripcion" class="form-control col-sm-4" name="descripcion" value="<?php echo $this->mostrarcuota['descripcion'];?>" required="required"></input> 
          </div>  
          

                               
          <div class="form-group">
          <button class="btn btn-success">Modificar Datos</button>  
          </div>

        </form>


        <?php    
       }      
     }   
    }
  ?>


 