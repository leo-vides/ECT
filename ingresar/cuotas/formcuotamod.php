<?php
include "../acceso/classsesion.php";
include "../acceso/session.php";
include "../cuotas/classcuota.php"; ?>
<!DOCTYPE html>
	<html lang="es">
		<head>
		    <?php 
			include("../config/head.php"); 
			?>
		</head>
		<body>
			<header> 
				<?php 
			    include("../config/cabecera.php");
				?>	
			</header>
				<?php 
			    include("../config/menu.php"); 
			    ?>
			<section>
				
				<h1>Modificar Cuota</h1>
           
                 <?php 
                   $obj1= new datoscuota();
                   $obj1->mostrarcuota($_GET['id']);

                  ?>
			</section>  

			<footer>
				
			</footer>  
		</body>
	</html>
