<?php
  
	include'../config/conexion.php';
  
	class Listar extends conexion{
		public $consulta;// asi declaramos atributos (variables y atributos es lo mismo) 
		public $filas;
		public function MostrarDatos(){//function es metodo
			$this->consulta=$this->con->query("SELECT * FROM midis ORDER BY idcategoria ASC, nommidi ASC");//$this->consulta es para llamar a la variable consulta- con query es para hacer consulta mysql quiere deckr q se va a hacer una consuta de una base da datos
			while ($this->filas=$this->consulta->fetch_array()) {//fecth_array es para ordernar los datos
				?>
				
						<tr>

              
							<td><?php echo $this->filas['nommidi'];?></td>
							<td><?php echo $this->filas['descripcion'];?></td>
							<td><?php echo $this->filas['idcategoria'];?></td>
							<td>
								<a href="../archivos/pdf/<?php echo $this->filas['pdf']; ?>" target="_blank">
									<?php echo $this->filas['pdf'];?>
								</a>
							</td>
							<td>
								<a href="../archivos/midi/<?php echo $this->filas['archivo']; ?>" download>
									<?php echo $this->filas['archivo'];?>
								</a>
							</td>
							
							<td><a class="btn btn-success" href="formmidimod.php?idmidi=<?php echo $this->filas['idmidi'];?>">Modificar</a> <!--//El signo de pregunta genera una variable-->
							<a onclick="return confirm('&iquest;Desea eliminar este registro?');" class="btn btn-danger" href="eliminar.php?idmidi=<?php echo $this->filas['idmidi'];?>">Eliminar</a></td>

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
      
       
          $this->consulta=$this->con->query("SELECT * FROM midis WHERE nommidi='$this->busqueda'");//$this->consulta es para llamar a la variable consulta- con query es para hacer consulta mysql quiere deckr q se va a hacer una consuta de una base da datos
          # code..
      
      while ($this->filas=$this->consulta->fetch_array()) {//fecth_array es para ordernar los datos
        ?>
        
            <tr>
              <td><?php echo $this->filas['nommidi'];?></td>
              <td><?php echo $this->filas['descripcion'];?></td>
              <td><?php echo $this->filas['idcategoria'];?></td>
			  <td>
					<a href="../archivos/pdf/<?php echo $this->filas['pdf']; ?>" target="_blank">
						<?php echo $this->filas['pdf'];?>
					</a>
				</td>
				<td>
					<a href="../archivos/midi/<?php echo $this->filas['archivo']; ?>" download>
						<?php echo $this->filas['archivo'];?>
					</a>
				</td>

              <td><a class="btn btn-success" href="formmidimod.php?idmidi=<?php echo $this->filas['idmidi'];?>">Modificar</a> <!--//El signo de pregunta genera una variable-->
              <a onclick="return confirm('&iquest;Desea eliminar este registro?');" class="btn btn-danger" href="eliminar.php?idmidi=<?php echo $this->filas['idmidi'];?>">Eliminar</a></td>

            </tr> 
      
        
          <?php 
      
      }
    }
    
  }

	/**
	 * 
	 */
	class datos extends conexion{
		public $idmidi;
		public $consulta;
		public $mostrardatos;
    public $consulta2;
    public $mostrar2;
		public function mostrar($id){
			$this->idmidi = $id;
			$this->consulta = $this->con->query("SELECT * FROM midis WHERE idmidi='$this->idmidi'");
			if ($this->mostrardatos = $this->consulta->fetch_array()) {
				?>
				<form method="Post" action="modificar.php" class="consulta_form" enctype="multipart/form-data"> <!--//el post envia los datos de forma ocultatodos los datos que  se carguen se estaran de forma oculta  el get se visualizan en la barra de navegacion y puede enviar la cantidad de caracteres que yo quiera el get me limita-->

         <div class= "form-group">
            <input type="hidden" id="idmidi" class="form-control col-sm-4" name="idmidi" value="<?php echo $this->mostrardatos['idmidi'];?>"></input>
			<input type="hidden" id="pdfmidi" name="pdfmidi" value="<?php echo $this->mostrardatos['pdf'];?>">
			<input type="hidden" id="archivomidi" name="archivomidi" value="<?php echo $this->mostrardatos['archivo'];?>">
         </div>   
              <div class="form-group">
                <label for="nommidi">Nombre de midi</label>
                <input type="text" id="nommidi" class="form-control" name="nommidi" value="<?php echo $this->mostrardatos['nommidi'];?>" required="required">
								</div>

              <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" id="descripcion" class="form-control" name="descripcion" value="<?php echo $this->mostrardatos['descripcion'];?>"required="required">
              </div>

               <div class="form-group">
                <label for="idcategoria">Categoria</label>
                <input type="text" id="idcategoria" class="form-control" name="idcategoria" value="<?php echo $this->mostrardatos['idcategoria'];?>" required="required">
								</div>

								 <div class="form-group">
                <label for="pdf">pdf</label>
                <input type="file" id="pdf" class="form-control" name="pdf">
								</div>

								 <div class="form-group">
                <label for="archivo">Archivo</label>
                <input type="file" id="archivo" class="form-control" name="archivo">
								</div>


              <div class="form-group">
                <button class="btn btn-success" >Modificar datos</button>
              </div>
      
            </form>

            <?php	
				
			}
			
		}
				
	}	

  /**
   * 
   */
  
	
?>

	
