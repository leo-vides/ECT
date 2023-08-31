<?php 
include"../acceso/classsesion.php"; 
include"../acceso/session.php";
include"classmidi.php";?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<?php
			include"../config/head.php"
  		?>
	</head>
		<body>
			<header>
				<?php
					include"../config/cabecera.php"
  				?>
			</header>
				<?php
					include"../config/menu.php"
  				?>

  			<section>

          <h1>Midis</h1>
          

     
  				
  				<hr>
          <a class="btn btn-primary" href="formmidi.php">Nuevo Registro</a>

          <br>
          <br>

          <form action="index.php" method="GET" class="consulta_form">
            <div class="form-group">
              <label for="buscar">Buscar Midi</label>
              <input type="text" id="buscar" name="buscar" placeholder="Ingrese Midi" required>
          
              <input type="submit" class="btn btn-success" value="Buscar" >
            </div>
           
          </form>


  				<table class="table">
  					<thead class="table-success">
  						<tr>

  							<th>idmidi</th>
  							<th>Nombre de Midi</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>PDF</th>
                <th>Archivo</th>
               
                <th>Acciones</th>
                
  					

  						</tr>
  					</thead>
  					<tbody>


              <?php
                if (isset($_GET['buscar'])) {
                  $objetonuevo = new buscar();
                  $objetonuevo->MostrarDatos($_GET['buscar']);
                }else{
                  $objetonuevo = new Listar();
                  $objetonuevo->MostrarDatos();
                }
              ?>
  						
  					</tbody>
  				</table>

  				
  			</section>
    
  			<footer>
  				<?php
					include"../config/footer.php"
  				?>
  			</footer>
		</body>
</html>