<?php
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header("Location: ../index.html");
		# code...
	}else{
		echo "Bienvenido ". $_SESSION['usuario']->getusurio();
		echo "<a href='../salir.php'> Salir del sistema</a>";
	}

?>