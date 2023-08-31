<?php 
include"../acceso/classsesion.php"; 
include"../acceso/session.php";
include"classcategoria.php";?>
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
  				<h1>Nueva categoria</h1>
  				<hr>
          <div class="container">

          
       

            <form method="Post" action="registrar.php" class="consulta_form"> <!--//el post envia los datos de forma ocultatodos los datos que  se carguen se estaran de forma oculta  el get se visualizan en la barra de navegacion y puede enviar la cantidad de caracteres que yo quiera el get me limita-->

              <div class="form-group">
                <label for="nomcategoria">Nombre</label>
                <input type="text" id="nomcategoria" class="form-control" name="nomcategoria" required="required">
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