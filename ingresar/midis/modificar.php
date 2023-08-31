
<?php
/**
 * 
 */
include"../acceso/classsesion.php"; 
include"../acceso/session.php";
include "../config/conexion.php";
class modificar extends conexion{
	public $idmidi;
	public $pdf;
	public $archivo;
	
	public function datos ($id,$nom,$desc, $cat,$pdf,$arc,$pdfViejo,$archivoViejo){
		//controlo si se cargo un pdf nuevo
		if($pdf['size'] > 0){
			$this->pdf = $pdf['name'];
			move_uploaded_file($pdf['tmp_name'], '../archivos/pdf/'.$pdf['name']);
		}else{
			$this->pdf = $pdfViejo;
		}

		//controlo si se cargo un archivo de audio nuevo
		if($arc['size'] > 0){
			$this->archivo = $arc['name'];
			move_uploaded_file($arc['tmp_name'], '../archivos/midi/'.$arc['name']);
		}else{
			$this->archivo = $archivoViejo;
		}

		$this->con->query("UPDATE midis SET nommidi='$nom', descripcion='$desc',  idcategoria='$cat', pdf='$this->pdf', archivo='$this->archivo' WHERE idmidi ='$id'");

		echo "<script>alert ('midi modificado'); window.location.href='index.php'; </script>";
	}
	
}
$objeto =  new modificar ();
$objeto->datos ($_POST ['idmidi'], $_POST ['nommidi'], $_POST ['descripcion'], $_POST ['idcategoria'],$_FILES ['pdf'],$_FILES ['archivo'], $_POST['pdfmidi'], $_POST['archivomidi']);
?>