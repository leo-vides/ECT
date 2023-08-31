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
  				<h1>Nuevo Midi</h1>
  				<hr>
          <div class="container">

          
       

            <form method="Post" action="registrar.php" class="consulta_form" enctype="multipart/form-data"> <!--//el post envia los datos de forma ocultatodos los datos que  se carguen se estaran de forma oculta  el get se visualizan en la barra de navegacion y puede enviar la cantidad de caracteres que yo quiera el get me limita-->
             <!-- <div class="form-group">
                <label for="codigoproducto">Código de producto</label>
                <input type="text" id="codigoproducto" class="form-control" name="codigoproducto" required="required">
              </div> -->

              <div class="form-group">
                <label for="nommidi">Nombre de midi</label>
                <input type="text" id="nommidi" class="form-control" name="nommidi" required="required">
              </div>
              <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" id="descripcion" class="form-control" name="descripcion" required="required">
              </div>
             <div class="form-group">
                <label for="idcategoria">Categoria</label>
                <input type="text" id="idpdf" class="form-control" name="idcategoria" required="required">
              </div>
              <div class="form-group">
                <label for="pdf">PDF</label>
                <input type="file" id="pdf" class="form-control" name="pdf" required="required">
              </div>
              <div class="form-group">
                <label for="archivo">Archivo</label>
                <input type="file" id="archivo" class="form-control" name="archivo" required="required">
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