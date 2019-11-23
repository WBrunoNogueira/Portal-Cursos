<meta charset='UTF-8'>
<?php
	if(!isset($_SESSION)) session_start();
	
	if(!isset($_SESSION['usuario'])){
		session_destroy();
		header('Location: index.php');
		exit;
	}
	
	echo "Olá, ".$_SESSION['usuario'];
	echo "<a href='logout.php'>Sair</a>";
?>