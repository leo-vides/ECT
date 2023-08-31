<?php include"classusuario.php";
include"../acceso/classsesion.php"; 
include"../acceso/session.php";
if($_SESSION['usuario']->getprivilegio() != 1){
  header("Location: ../indexpagsistema/");
}
?>

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

          <h1>Usuarios</h1>
          
     
  				
  				<hr>
          <a class="btn btn-primary" href="formusuario.php">Nuevo Registro</a>

          <br>
          <br>

          <form action="index.php" method="GET" class="consulta_form">
            <div class="form-group">
              <label for="buscar">Buscar usuario</label>
              <input type="text" id="buscar" name="buscar" placeholder="Ingrese el apellido" required>
              <select name="tipo" required >
                <option value="">Seleccionar</option>
                <option value="1">Apellido</option>
               
              </select>
              <input type="submit" class="btn btn-success" value="Buscar" >
            </div>
           
          </form>


  				<table class="table">
  					<thead class="table-success">
  						<tr>
  							 <th>Usuario</th>
                <th>Contraseña</th>
  							<th>Apellido</th>
                <th>Nombre</th>
                <th>DNI</th>              
                <th>Edad </th>
                <th>Nacimiento</th>
                <th>Dirección</th>
                <th>Localidad</th>
                <th>Provincia</th>
                <th>Nacionalidad</th>
                <th>Celular</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Sexo</th>
                <th>Privilegio</th>
                <th>Acciones</th>

  					

  						</tr>
  					</thead>
  					<tbody>


              <?php
                if (isset($_GET['buscar'])) {
                  $objetonuevo = new buscar();
                  $objetonuevo->MostrarDatos($_GET['buscar'], $_GET['tipo']);
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