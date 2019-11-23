<?php
	if(empty($_POST) or (empty($_POST['usuario']) or empty($_POST['senha']))){
		header('Location: index.php');
		exit;
		#codigo para so validar se for devidamente preenchido
	}
	
	session_start();#para navegar em varias páginas
	
	include("config.php");# inclue a pagina config
	
	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];
	
	$sql = "SELECT * FROM usuarios WHERE usuario='".$usuario."'AND senha='".md5($senha)."'";	
			
	$res = $conn->query($sql) or die($conn->error);
	
	$row = $res->fetch_assoc();
		
	if($res->num_rows > 0){
		$_SESSION["usuario"] = $usuario;
		$_SESSION["nivel"]   = $row["nivel"];
		header('Location: painel.php');
 	}else{
		unset($_SESSION["usuario"]);
		unset($_SESSION["nivel"]);
		header('Location: index.php?aut=err');
	}
	
?>




