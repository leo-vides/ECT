<?php
  
	include'../config/conexion.php';
  
	class Listar extends conexion{
		public $consulta;// asi declaramos atributos (variables y atributos es lo mismo) 
		public $filas;
		public function MostrarDatos(){//function es metodo
			$this->consulta=$this->con->query("SELECT * FROM categoria ORDER BY idcategoria ASC");//$this->consulta es para llamar a la variable consulta- con query es para hacer consulta mysql quiere deckr q se va a hacer una consuta de una base da datos
			while ($this->filas=$this->consulta->fetch_array()) {//fecth_array es para ordernar los datos
				?>
				
						<tr>
							<td><?php echo $this->filas['idcategoria'];?></td>
							
							<td><?php echo $this->filas['nomcategoria'];?></td>
							
							
							<td><a class="btn btn-success" href="formcategoriamod.php?idcategoria=<?php echo $this->filas['idcategoria'];?>">Modificar</a> <!--//El signo de pregunta genera una variable-->
							<a onclick="return confirm('&iquest;Desea eliminar este registro?');" class="btn btn-danger" href="eliminar.php?idcategoria=<?php echo $this->filas['idcategoria'];?>">Eliminar</a></td>

						</tr>	
			
				
					<?php 
			
			}
		}
		
	}


  class buscar extends conexion{
    public $consulta;// asi declaramos atributos (variables y atributos es lo mismo) 
    public $filas;
    public $busqueda;
    public function MostrarDatos($buscar){//function es metodo
      $this->busqueda=$buscar;
      
       
          $this->consulta=$this->con->query("SELECT * FROM categoria WHERE nomcategoria LIKE'%$this->busqueda%' ORDER BY nomcategoria ASC");//$this->consulta es para llamar a la variable consulta- con query es para hacer consulta mysql quiere deckr q se va a hacer una consuta de una base da datos
          # code...
     

       



        
        
      

      
      
      while ($this->filas=$this->consulta->fetch_array()) {//fecth_array es para ordernar los datos
        ?>
        
            <tr>
            	<td><?php echo $this->filas['idcategoria'];?></td>
             	<td><?php echo $this->filas['nomcategoria'];?></td>
              
              
              	<td><a class="btn btn-success" href="formcategoriamod.php?idcategoria=<?php echo $this->filas['idcategoria'];?>">Modificar</a> <!--//El signo de pregunta genera una variable-->
              <a onclick="return confirm('&iquest;Desea eliminar este registro?');" class="btn btn-danger" href="eliminar.php?idcategoria=<?php echo $this->filas['idcategoria'];?>">Eliminar</a></td>

            </tr> 
      
        
          <?php 
      
      }
    }
    
  }

	/**
	 * 
	 */
	class datos extends conexion{
		public $idcategoria;
		public $consulta;
		public $mostrardatos;
		public function mostrar($id){
			$this->idcategoria = $id;
			$this->consulta = $this->con->query("SELECT * FROM categoria WHERE idcategoria='$this->idcategoria'");
			if ($this->mostrardatos = $this->consulta->fetch_array()) {
				?>
				<form method="Post" action="modificar.php" class="consulta_form"> <!--//el post envia los datos de forma ocultatodos los datos que  se carguen se estaran de forma oculta  el get se visualizan en la barra de navegacion y puede enviar la cantidad de caracteres que yo quiera el get me limita-->

              <div class="form-group">
                <label for="nomcategoria">Nombre</label>
                <input type="text" id="nomcategoria" class="form-control" name="nomcategoria" value="<?php echo $this->mostrardatos['nomcategoria'];?>" required="required">

                <input type="hidden" name="idcategoria" value="<?php echo $this->mostrardatos['idcategoria'];?>">
                
              </div>
              
              
            

              <div class="form-group">
                <button class="btn btn-success" >Modificar datos</button>
              </div>
      
            </form>

            <?php	
				
			}
			
		}
				
	}	
	
?>

	
