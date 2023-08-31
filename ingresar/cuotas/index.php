<?php

include "../acceso/classsesion.php";
include "../acceso/session.php";
include "classcuota.php";

?>
<!DOCTYPE html>
	<html lang="es" >
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
					
     			<hr>
				<a class="btn btn-primary" href="formcuota.php">Nueva Cuota</a>
                   <form class="form-horizontal"  action="index.php" method="GET">
                   	
                   </form>
					<table class="table">
						<thead class="table-dark">
							<tr>
								 
														
								<th>Cuota</th>
								<th>Precio</th>
								<th>Descripcion</th>						
								<th>Acciones</th>
							</tr>	
			        </thead> 
			        <tbody>
			         	<?php 
                         
                         if(isset($_GET['buscar'])){

                             $objbusqueda= new buscarcuota();
                             $objbusqueda->Mostrarcuota($_GET['buscar'],$_GET['tipo']); 
                         }
                         else{

	                         $objetoregistros= new listarcuota();
	                         $objetoregistros->Mostrarcuota();
                         }
			         	?>
			        </tbody>	
			        </table>
			</section>  

			<footer>
				
			</footer>  
		</body>
	</html>
