<?php

include('conexao.php');
include('verifica_login.php'); #starta o login
if(!isset($_SESSION)) 
{ 
  session_start(); 
} 
?>




<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--estilização in-page-->
    <style type="text/css">
    	body{
	background-color: #1C0924;
    	}
    	.navbar{
    		
    	}
    </style>

    <title>PLAY</title>
  </head>
  <body>
  	<!--inicio da navbar-->
  	<div>

  		<nav class="navbar navbar-expand-lg navbar-light" style="background: white">
  			<a class="navbar-brand" href="#"><span style="color: #9F29FF">Educa</span> Videos</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  				<span class="navbar-toggler-icon"></span>
  			</button>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
  				<ul class="navbar-nav mr-auto">
  					
  					<li class="nav-item active">
  						<a class="nav-link" href="cursos.php">Lista videos <span class="sr-only">(current)</span></a>
  					</li>
  					<li class="nav-item active">
  						<a class="nav-link" href="adicionar_cursos.php">Adicionar Videos + <span class="sr-only">(current)</span></a>
  					</li>
  				</ul>
      </div>
     
      <div>
        <p>Olá, <?php echo $_SESSION['usuario'];?> <a href="logout.php">Sair</a></p>
      </div>
    </nav>
  </div><!--fim da navbar-->


<div class="container">
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm-8">
       <!--inicio  da player video-->
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
  		echo "<embed src='$url' width='600' height='450'></embed>";
  	}
  	else
  	{
  		echo "Error!";
  	}

  	?>
  	<!--fim do player-->
    </div>
    <div class="col-sm">
      One of three columns
    </div>
   
  </div>
   <div class="row">
   	<div class="col-lg">
   	</div><div class="col-lg-8">
   		<a class="btn btn btn-outline-danger btn-lg" role="button" href="cursos.php" > Voltar para Lista</a>
   	</div><div class="col-lg">
   	</div>
    	
    </div>
</div>




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>