<?php include "../cuotas/nuevacuota.php"; ?>
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
				
				<h1>Nueva Cuota</h1>
                    
	               <?php 
                    $obj1=new formcuota();
                    $obj1->datoscuota();
                    ?>
			  
			</section>  

			<footer>
				
			</footer>  
		</body>
	</html>