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
  				<h1>Modificar Midi</h1>
  				<hr>
          <div class="container">
            <?php
              $mod_datos = new datos();
              $mod_datos->mostrar($_GET['idmidi']);

            ?>
          </div>
            
      
  			</section>
  			<footer>
  				<?php
					include"../config/footer.php"
  				?>
  			</footer>
		</body>
</html>