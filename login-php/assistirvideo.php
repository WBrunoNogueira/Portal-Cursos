<?php

include('conexao.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Video Upload And Playback Tutorial</title>
</head>

<body>

<?php

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$query = mysqli_query ($conexao,"SELECT * FROM videos WHERE idvideos= $id ");
	while($row = mysqli_fetch_assoc($query))
	{
		$name = $row['titulo_video'];
		$url = $row['descricao_video'];
	}
	
	echo "Você esta assistindo ".$name."<br />";
	echo "<embed src='$url' width='560' height='315'></embed>";
}
else
{
	echo "Error!";
}

?>

</body>
</html>