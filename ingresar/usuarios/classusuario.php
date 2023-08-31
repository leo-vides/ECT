<?php
  
	include'../config/conexion.php';
  
	class Listar extends conexion{
		public $consulta;// asi declaramos atributos (variables y atributos es lo mismo) 
		public $filas;
		public function MostrarDatos(){//function es metodo
			$this->consulta=$this->con->query("SELECT * FROM usuarios ORDER BY apellido ASC, nombre ASC");//$this->consulta es para llamar a la variable consulta- con query es para hacer consulta mysql quiere deckr q se va a hacer una consuta de una base da datos
			while ($this->filas=$this->consulta->fetch_array()) {//fecth_array es para ordernar los datos
				?>
				
						<tr>
              <td><?php echo $this->filas['usuario'];?></td>
              <td><?php echo $this->filas['password'];?></td>
							<td><?php echo $this->filas['apellido'];?></td>
							<td><?php echo $this->filas['nombre'];?></td>
							<td><?php echo $this->filas['dni'];?></td>
							<td><?php echo $this->filas['edad'];?></td>
							<td><?php echo $this->filas['fechanac'];?></td>
							<td><?php echo $this->filas['direccion'];?></td>
							<td><?php echo $this->filas['localidad'];?></td>
							<td><?php echo $this->filas['provincia'];?></td>
							<td><?php echo $this->filas['nacionalidad'];?></td>
							<td><?php echo $this->filas['tel_cel'];?></td>
							<td><?php echo $this->filas['tel'];?></td>
							<td><?php echo $this->filas['email'];?></td>
							<td><?php echo $this->filas['sexo'];?></td>
							<td><?php echo $this->filas['privilegio'];?></td>
							<td><a class="btn btn-success" href="formusuariomod.php?idusuario=<?php echo $this->filas['idusuario'];?>">Modificar</a> <!--//El signo de pregunta genera una variable-->
							<a onclick="return confirm('&iquest;Desea eliminar este registro?');" class="btn btn-danger" href="eliminar.php?idusuario=<?php echo $this->filas['idusuario'];?>">Eliminar</a></td>

						</tr>	
			
				
					<?php 
			
			}
		}
		
	}


  class buscar extends conexion{
    public $consulta;// asi declaramos atributos (variables y atributos es lo mismo) 
    public $filas;
    public $busqueda;
    public function MostrarDatos($buscar, $tipo){//function es metodo
      $this->busqueda=$buscar;
      switch ($tipo) {
        case 1:
          $this->consulta=$this->con->query("SELECT * FROM usuarios WHERE apellido LIKE'%$this->busqueda%' ORDER BY apellido ASC, nombre ASC");//$this->consulta es para llamar a la variable consulta- con query es para hacer consulta mysql quiere deckr q se va a hacer una consuta de una base da datos
          # code...
          break;

        case 2:

          $this->consulta=$this->con->query("SELECT * FROM usuarios WHERE dni LIKE'%$this->busqueda%' ORDER BY apellido ASC, nombre ASC");

          break;

        case 3:
          $this->consulta=$this->con->query("SELECT * FROM usuarios WHERE email LIKE'%$this->busqueda%' ORDER BY apellido ASC, nombre ASC");
          break;



        
        
      }

      
      
      while ($this->filas=$this->consulta->fetch_array()) {//fecth_array es para ordernar los datos
        ?>
        
            <tr>
              <td><?php echo $this->filas['usuario'];?></td>
              <td><?php echo $this->filas['password'];?></td>
              <td><?php echo $this->filas['apellido'];?></td>
              <td><?php echo $this->filas['nombre'];?></td>
              <td><?php echo $this->filas['dni'];?></td>
              <td><?php echo $this->filas['edad'];?></td>
              <td><?php echo $this->filas['fechanac'];?></td>
              <td><?php echo $this->filas['direccion'];?></td>
              <td><?php echo $this->filas['localidad'];?></td>
              <td><?php echo $this->filas['provincia'];?></td>
              <td><?php echo $this->filas['nacionalidad'];?></td>
              <td><?php echo $this->filas['tel_cel'];?></td>
              <td><?php echo $this->filas['tel'];?></td>
              <td><?php echo $this->filas['email'];?></td>
              <td><?php echo $this->filas['sexo'];?></td>
              <td><?php echo $this->filas['privilegio'];?></td>
              <td><a class="btn btn-success" href="formusuariomod.php?idusuario=<?php echo $this->filas['idusuario'];?>">Modificar</a> <!--//El signo de pregunta genera una variable-->
              <a onclick="return confirm('&iquest;Desea eliminar este registro?');" class="btn btn-danger" href="eliminar.php?idusuario=<?php echo $this->filas['idusuario'];?>">Eliminar</a></td>

            </tr> 
      
        
          <?php 
      
      }
    }
    
  }

	/**
	 * 
	 */
	class datos extends conexion{
		public $idusuario;
		public $consulta;
		public $mostrardatos;
		public function mostrar($id){
			$this->idusuario = $id;
			$this->consulta = $this->con->query("SELECT * FROM usuarios WHERE idusuario='$this->idusuario'");
			if ($this->mostrardatos = $this->consulta->fetch_array()) {
				?>
				<form method="Post" action="modificar.php" class="consulta_form"> <!--//el post envia los datos de forma ocultatodos los datos que  se carguen se estaran de forma oculta  el get se visualizan en la barra de navegacion y puede enviar la cantidad de caracteres que yo quiera el get me limita-->

               
              <div class="form-group">
                <label for="dni">Usuario</label>
                <input type="text" id="usuario" class="form-control" name="usuario" value="<?php echo $this->mostrardatos['usuario'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="dni">Contraseña</label>
                <input type="text" id="password" class="form-control" name="password" value="<?php echo $this->mostrardatos['password'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" class="form-control" name="apellido" value="<?php echo $this->mostrardatos['apellido'];?>" required="required">

                <input type="hidden" name="idusuario" value="<?php echo $this->mostrardatos['idusuario'];?>">
                
              </div>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" class="form-control" name="nombre" value="<?php echo $this->mostrardatos['nombre'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" id="dni" class="form-control" name="dni" value="<?php echo $this->mostrardatos['dni'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" id="edad" class="form-control" name="edad" value="<?php echo $this->mostrardatos['edad'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="fechanac">Fecha de nacimiento</label>
                <input type="date" id="fechanac" class="form-control" name="fechanac" value="<?php echo $this->mostrardatos['fechanac'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" id="direccion" class="form-control" name="direccion" value="<?php echo $this->mostrardatos['direccion'];?>"required="required">
              </div>

              <div class="form-group">
                <label for="Localidad">Localidad</label>
                <input type="text" id="localidad" class="form-control" name="localidad" value="<?php echo $this->mostrardatos['localidad'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="provincia">Provincia</label>
                <input type="text" id="provincia" class="form-control" name="provincia" value="<?php echo $this->mostrardatos['provincia'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="nacionalidad">Nacionalidad</label>
                <input type="text" id="nacionalidad" class="form-control" name="nacionalidad" value="<?php echo $this->mostrardatos['nacionalidad'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="tel_cel">Teléfono celular</label>
                <input type="text" id="tel_cel" class="form-control" name="tel_cel" value="<?php echo $this->mostrardatos['tel_cel'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="tel">Teléfono</label>
                <input type="text" id="tel" class="form-control" name="tel" value="<?php echo $this->mostrardatos['tel'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="algo@algo.com" value="<?php echo $this->mostrardatos['email'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="sexp">Sexo</label>
                <input type="text" id="sexo" class="form-control" name="sexo" value="<?php echo $this->mostrardatos['sexo'];?>"required="required">
              </div>
              <div class="form-group">
                <label for="privilegio">Privilegio</label>
                <input type="text" id="privilegio" class="form-control" name="privilegio" value="<?php echo $this->mostrardatos['privilegio'];?>"required="required">
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

	
