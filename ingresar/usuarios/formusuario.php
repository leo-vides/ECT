<?php 
include"../acceso/classsesion.php"; 
include"../acceso/session.php";
include"classusuario.php";?>
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
  				<h1>Nuevo usuario</h1>
  				<hr>
          <div class="container">

          
       

            <form method="Post" action="registrar.php" class="consulta_form"> <!--//el post envia los datos de forma ocultatodos los datos que  se carguen se estaran de forma oculta  el get se visualizan en la barra de navegacion y puede enviar la cantidad de caracteres que yo quiera el get me limita-->

              <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" class="form-control" name="apellido" required="required">
              </div>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" class="form-control" name="nombre" required="required">
              </div>
              <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" id="dni" class="form-control" name="dni" required="required">
              </div>
              <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" id="edad" class="form-control" name="edad" required="required">
              </div>
              <div class="form-group">
                <label for="fechanac">Fecha de nacimiento</label>
                <input type="date" id="fechanac" class="form-control" name="fechanac" required="required">
              </div>
              <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" id="direccion" class="form-control" name="direccion" required="required">
              </div>

              <div class="form-group">
                <label for="Localidad">Localidad</label>
                <input type="text" id="localidad" class="form-control" name="localidad" required="required">
              </div>
              <div class="form-group">
                <label for="provincia">Provincia</label>
                <input type="text" id="provincia" class="form-control" name="provincia" required="required">
              </div>
              <div class="form-group">
                <label for="nacionalidad">Nacionalidad</label>
                <input type="text" id="nacionalidad" class="form-control" name="nacionalidad" required="required">
              </div>
              <div class="form-group">
                <label for="tel_cel">Teléfono celular</label>
                <input type="text" id="tel_cel" class="form-control" name="tel_cel" required="required">
              </div>
              <div class="form-group">
                <label for="tel">Teléfono</label>
                <input type="text" id="tel" class="form-control" name="tel" required="required">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email"  required="required">
              </div>
              <div class="form-group">
                <label for="sexp">Sexo</label>
                <input type="text" id="sexo" class="form-control" name="sexo" required="required">
              </div>
              <div class="form-group">
                <label for="privilegio">Privilegio</label>
                <input type="text" id="privilegio" class="form-control" name="privilegio" required="required">
              </div>

              <div class="form-group">
                <button class="btn btn-success" >Guardar datos</button>
              </div>
      
            </form>	
          </div>
            
     
  			</section>
  			<footer>
  				<?php
					include"../config/footer.php"
  				?>
  			</footer>
		</body>
</html>