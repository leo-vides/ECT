<?php

include "../acceso/classsesion.php";
include "../acceso/session.php";
include "classventas.php";

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
				
				
				
				    <h1>Pagos</h1>

     		<hr>
                
			         
			         <table class="table table-hover">
						<thead class="text-light bg-dark">
							<tr>
							<th>cuota</th>
								<th>Descripcion</th>
								<th>Precio</th>
								<th>Acciones</th>
								
								
							</tr>	
			        </thead> 
			        <tbody>
			         	<?php 
                         
                      
                        if(isset($_GET['buscar'])){
							$objbusqueda= new buscarcuota();
							$objbusqueda->Mostrarcuota($_GET['buscar'],$_GET['tipo']); 
                         }else{
                         	 
	                         $objetoregistros= new listarcuota();
	                         $objetoregistros->Mostrarcuota();
                         } 
			         	?>
			         	</tbody>	
			        </table>
			        <hr>

				</td>
			        

			</section>  

			<footer>
				
			</footer>  
		</body>
	</html>
