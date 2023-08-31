<?php 
include"classusuario.php";
include"../acceso/classsesion.php"; 
include"../acceso/session.php";
if($_SESSION['usuario']->getprivilegio() != 1){
  header("Location: ../login/");
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

  						</tr>
  					</thead>
  					<tbody>
        
  					</tbody>
  				</table>

  				
  			</section>
    
  			<footer>
  				<div id="footer">
  <td>
  <font color="#000000">
  <center>
    <h6>
    ROLLING CODE SCHOOL<br>
    VIDES LEONARDO GABRIEL<br>
    AÑO 2022
    </h6>
  </center>
  </font>
  </td>
</div>
  			</footer>
		</body>
</html>