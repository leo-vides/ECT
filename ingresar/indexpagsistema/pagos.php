<?php

include "../acceso/classsesion.php";
include "../acceso/session.php";
include "../pagos/classventas.php";

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
				
			<section>
			
           
				    <h1>Pagos</h1>

     		<hr>
                <form class="form-horizontal"  action="index.php" method="GET">
                   	<label for="buscar" class="control-label">Buscar Producto</label>
                   	   <input type="text" id="buscar" name="buscar" placeholder="Ingrese Codigo" required>
                   	      <input type="submit" value="buscar">
                 </form>  	      
			         
			         <table class="table table-hover">
						<thead class="text-light bg-dark">
							<tr>
								<th>Descripcion</th>
								<th>Precio</th>
								<th>Cantidad</th>
								<th>Subtotal</th>
								<th>Accion</th>
								
							</tr>	
			        </thead> 
			        <tbody>
			         	<?php 
                         
                      
                        if(isset($_GET['buscar'])){
                             $objbusqueda= new buscarprodventas();
                             $objbusqueda->resultadobuscar($_GET['buscar']); 
                             $objventas= new listarVentas();
	                         $objventas->MostrarVentas();
                         }else{
                         	 $objventas= new listarVentas();
                             $objventas->MostrarVentas();
                         } 
			         	?>
			         	</tbody>	
			        </table>
			        <hr>
			        <td><a onclick="return confirm('&iquest; Cancelar la venta?');" class="btn btn-danger" href="cancelarventa.php">Cancelar Venta</a></td>
			        <td><a onclick="return confirm('&iquest; Terminar la venta?');" class="btn btn-success" href="terminarventa.php">Terminar Venta</a></td>

			</section>  

			<footer>
				
			</footer>  
		</body>
	</html>
