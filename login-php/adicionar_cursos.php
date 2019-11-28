<?php

include('verifica_login.php');
if(!isset($_SESSION)) 
{ 
  session_start(); 
} 
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <title>PLay</title>
  <style type="text/css">
    

  </style>


  
  <!--adicionar cursos ação para o input de videos-->
  <?php
  include('conexao.php');

  if(isset($_POST['but_upload'])){
            $maxsize = 10485760; // 5MB

            $name = $_REQUEST ["titulo"];
            $target_dir = "videos/";
            $target_file = $target_dir . $_FILES["file"]["name"];

            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

            // Check extension
            if( in_array($videoFileType,$extensions_arr) ){

                // Check file size
              if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                echo "Arquivo muito grande.";
              }else{
                    // Upload
                if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        // Insert record
                  $query = "INSERT INTO videos(titulo_video,descricao_video) VALUES('".$name."','".$target_file."')";

                  mysqli_query($conexao,$query);
                  echo "<div class='alert alert-success' role='alert'>
                  enviado com sucesso! <a href='alert-volta.php'>ok</a>
                  </div>";

                
                }
              }

            }else{
              echo "Arquivo inválido";
            }

          }
          ?>
        </head>
        <body>

          <nav class="navbar navbar-expand-lg navbar-light" style="background: white">
            <a class="navbar-brand" href="#"><span style="color: #9F29FF">Educa</span> Videos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="painel.php">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="cursos.php">Lista videos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="adicionar_cursos.php">Adicionar Videos + <span class="sr-only">(current)</span></a>
                </li>


              </ul>

            </div>
            <div>
              <p>Olá, <?php echo $_SESSION['usuario'];?> <a style="background-color: " href="logout.php">Sair</a></p>

            </div>

          </nav>

          <div class="container">
            <div class="row">
             <div class="col-lg-6 offset-lg-3" style="margin-top: 100px;">
              <form method="post" action="" enctype='multipart/form-data'>
                <div class= "form-group">
                  <label>Título do video: </label>
                  <input type="text" name="titulo" class="form-control">
                </div>
                <div class= "form-group">
                  <label>Descrição do video: </label>
                  <input type="text" name="descricao" class="form-control">
                </div>
                <input type='file' name='file' />
                <br>
                <br>

                <button type="submit" class="btn btn-primary" name='but_upload'>
                  Enviar</button>
                  


                </form>
              </div>
            </div>
          </div>


          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
        </html>