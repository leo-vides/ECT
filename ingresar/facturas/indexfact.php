<?php  
include "../acceso/classsesion.php";
include "../acceso/session.php";
include "../facturas/classfactura.php";

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
				
				<h2>Facturas Emitidas</h2>
     			<hr>
				   <form class="form-horizontal"  action="indexfact.php" method="GET">
                   	 <label for="buscar" class="control-label">Buscar Factura</label>
                   	   <input type="text" id="buscar" name="buscar" placeholder="Ingrese valor" required>
                   	    <select name="tipofac" class="form-control col-sm-4" required >
                   	      <option value="">Seleccion criterio</option>
                   	      <option value="1">Año de emision</option>
                   	     
                   	    </select>  
                   	      <input type="submit" value="buscar">
                   </form>
					<table class="table table-hover">
						<thead class="text-light bg-dark">
							<tr>
								<th>factura</th>
								<th>Cliente</th>
                                <th>Registrante</th>
                                <th>Total</th>
                                <th>Fecha de emision</th> 
							</tr>	
			        </thead> 
			        <tbody>
			         	<?php 
                         
                         if(isset($_GET['buscar'])){

                             $objbusqueda= new buscarfac();
                             $objbusqueda->MostrarDatosfac($_GET['buscar'], $_GET['tipofac']); 
                         }
                         else{

	                         $objetoregistros= new listarfac();
	                         $objetoregistros->MostrarDatosfac();
                         }
			         	?>
			        </tbody>	
			        </table>
			</section>  

			<footer>
				
			</footer>  
		</body>
	</html>
