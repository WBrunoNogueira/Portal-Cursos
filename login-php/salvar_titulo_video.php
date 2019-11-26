<?php
include('conexao.php');




$titulo =$_REQUEST ["titulo"];
$descricao =$_REQUEST ["descricao"];
$login_usuario_id = '1';
$videos_idvideos = '1';




$sql = "INSERT INTO cursos (titulo_video, descricao_video, login_usuario_id, videos_idvideos) 
VALUES ('{$titulo}','{$descricao}','{$login_usuario_id}','{$videos_idvideos}')";

$result = $conexao->query($sql) or die ($conexao->error);

if ($result==true){
	print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
}else{
	print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
}


header("Location: adicionar_videos.php")



?>