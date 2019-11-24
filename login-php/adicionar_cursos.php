<html lang="en"><head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title></title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#">Cursos OnLine</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="cursos_online.php">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Cursos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="adiconar_cursos.php">Adicionar</a>
            <a class="dropdown-item" href="#">Atualizar</a>
            <a class="dropdown-item" href="#">Remover</a>
          </div></li>
          

        </ul>
        <form class="form-inline my-2 my-lg-0">
          
          
        </form>
      </div>
    </nav>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 jumbotron" style="margin-top: 100px;">
          <form action="save.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <label>Título: </label>
              <input type="text" name="titulo" class="form-control">
            </div>
            <div class="form-group">
              <label>Descrição: </label>
              <input type="text" name="descricao" class="form-control">
            </div>

            <div class="form-group">
              <label>Anexar Arquivo</label>
              <input type="file" name="arquivo" accept="jpg|jpeg|png|gif|bmp|tiff|svg">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">
                Enviar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body></html>