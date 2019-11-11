
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portal Cursos</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo_index.css">

    <title>PORTAL- CUROS</title>
  </head>
  <body>
   <!--NAV-BAR - INICIO-->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.php">Portal <span style="color: cyan;">Cursos</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav  ">
					<a href="#myModal_MEMBRO"  data-toggle="modal">MEMBRO LOGIN  </a> &nbsp &nbsp &nbsp
					<a href="#myModal_PROFESOR"  data-toggle="modal">PROFESSOR LOGIN </a>
				</div>
			</div>
		</nav>
	</header>


	<!--NAV-BAR - FIM-->


<!-- Modal HTML - LOGINS -->
	<div id="myModal_MEMBRO" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">
					<div class="avatar">
						<img src="img/avatar.png" alt="Avatar">
					</div>				
					<h4 class="modal-title">Membro Login</h4>	
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form action="/examples/actions/confirmation.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
						</div>        
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<a href="#">Forgot Password?</a>
				</div>
			</div>
		</div>
	</div> 

	<!--FIM MODAL - ADM-->  

	<!-- Modal HTML DE LOGINS-->
	<div id="myModal_PROFESOR" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">
					<div class="avatar">
						<img src="img/avatar.png" alt="Avatar">
					</div>				
					<h4 class="modal-title">Professor Login</h4>	
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form action="/examples/actions/confirmation.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
						</div>        
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<a href="#">Forgot Password?</a>
				</div>
			</div>
		</div>
	</div> 

	<!--FIM MODAL - MEMBRO-->  

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>