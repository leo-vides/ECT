<?php 
include '../config/conexion.php';

class listarcuota extends conexion {
      public $consulta;
      public $filas;
      public $subtotal;
      public $total;
      public function mostrarcuota(){
           $this->consulta=$this->con->query("SELECT * from cuotas" );	

           $this->total+=$this->subtotal;
           while ($this->filas=$this->consulta->fetch_array()){
            $id=$this->filas['id'];
            $consulta=$this->con->query("SELECT * FROM cuotas WHERE id='$id'");
           
           ?>
                  <tr>
                  <td><?php echo $this->filas['cuota']; ?></td>
                  <td><?php echo $this->filas['descripcion']; ?></td>
                  	<td><?php echo $this->filas['precio']; ?></td>
                  	

                 </tr>
       
           <?php  
           
           }
           ?>
           
           <?php    

      }
     } 
    
     
 