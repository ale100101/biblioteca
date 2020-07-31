<?php include "cabecalho.php" ?>


<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-target="#staticBackdrop">
    <a class="navbar-brand" href="#">BIBLIOTECA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="favoritos.php">Favoritos <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link disabled" href="#" aria-disabled="true">
            Editar Biblioteca
          </a>
          <div class="dropdown-menu  disabled " aria-disabled="true">
            <a class="dropdown-item" href="#">Adicionar Livros</a>
          </div>
        </li>

      </ul>

    </div>
  </nav><br>
  <div class="container">
    <div class="card text-center">
      <div class="card-header ">
        <ul class="nav nav-pills card-header-pills ">
          <li class="nav-item">
            <button  class="btn btn-danger" > <a href="delet.php">DELETAR LIVROS</a></button>
          </li>

        </ul>
      </div>
      <div class="container">


        <div class="card-body">
          <form method="GET" action="inserirLivro.php" enctype="multipart/form-data">
            <h5 class="card-title">ADICIONAR LIVRO A BIBLIOTECA</h5>


            <input class="form-control" type="text" name="titulo" placeholder="NOME DO LIVRO" required> <br>

            <input class="form-control" type="text" name="autor" placeholder="AUTOR" required><br>

            <input class="form-control" type="text" name="capa" placeholder="CAPA" required>

        </div>

        <div class="align">
          <button type="submit" class="btn btn-success">Enviar</button>
        </div>
        </form>
      </div>
    </div>
</body>

</html>