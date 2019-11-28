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
  <link rel="stylesheet" type="text/css" href="css/estilo-cursos.css">

  <!--estilização de links-->
  <style type="text/css">
   a:link, a:visited, a:active {
    text-decoration: none;
    color: black;
  }
  a:hover {text-decoration: underline;  
    color:#000; 
    font-size:150%; 
  }

  .card{
    margin-top: 10px;
  }
  h5{
    font-family: "Comic Sans MS";
    color: white;
    border-bottom: 1px solid white;
    text-shadow: 2px 1px black;
  }

</style>

<title>LISTAS</title>
</head>
<body>

  <div>
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
        <p>Olá, <?php echo $_SESSION['usuario'];?> <a class="bd-danger" href="logout.php">Sair</a></p>

      </div>

    </nav>

  </div>


  <h5>Lista de Aulas Adicionadas</h5>
  <?php
  include("conexao.php");
  ?>

    <div>

      <?php
      $fetchVideos = mysqli_query($conexao, "SELECT * FROM videos ORDER BY idvideos DESC");
      while($row = mysqli_fetch_assoc($fetchVideos)){
        $location = $row['descricao_video'];
        $name = $row['titulo_video'];
        $id = $row['idvideos'];

      

       echo  "<div class='container-fluid'>";
       echo "<div class='row'>";
       echo   "<div class='col-lg'>";
            
       echo   "</div>";
       echo   "<div class='col-lg-8'>";
       echo     "<div class='card'>";
       echo       "<h4 class='card-header'>Videos Aula</h4>";
       echo       "<div class='card-body' style='padding: 20px;'>";
       echo         "<div class='d-block' style='position: relative; float: left; margin-right: 50px;'>";
       echo "<!--link com imagem-->";
       echo         "<a  class='btn btn-primary' href='assistirvideo.php?id=$id'><img  style='width: 80px;' src='../img/ply.png' href='assistirvideo.php?id=$id' class='card-img d-block' alt='...'></a>";
       echo         "</div>";
        echo       "<div class='d-block' style='position: relative; float: left;'>";
        echo         "<h4 class='card-title'>$name</h4><!--nome do video-->";
        echo         "<p class='card-text'>$location</p><!--descrição-->";

        echo          "<br />";
        echo       "</div>";

        echo      "</div>";
        echo    "</div>";
        echo  "</div>";
        echo  "<div class='col-lg'>";
            
        echo  "</div>";
       echo "</div>";
     echo "</div>";


       /*echo "<div >";
        echo "<div class='card'>";
        echo "<h5 class='card-header'>Video</h5>";
        echo "<div class='card-body' style='padding: 20px;'>";
        echo "<div class='d-block' style='position: relative; float: left; margin-right: 50px;'>";

        echo  "<a  class='btn btn-primary' href='assistirvideo.php?id=$id'><img  style='width: 80px;' src='../img/ply.png' href='assistirvideo.php?id=$id' class='card-img d-block' alt='...'></a>";
        echo "</div>";
        echo "<div class='d-block' style='position: relative; float: left;'>";
        echo "<h5 class='card-title'>$name</h5>";
        echo  "<p class='card-text'>$location</p>";

        echo  "<br />";
        echo  "</div>";

        echo "</div>";
        echo "</div>";
        
        echo "</div>";*/
      }
      ?>
     
  











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>


  </html>