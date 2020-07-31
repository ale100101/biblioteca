<?php include "cabecalho.php" ?>
<?php include "card.php" ?>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-target="#staticBackdrop">
        <a class="navbar-brand" href="#">BIBLIOTECA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="favoritos.php">Favoritos <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Editar Biblioteca
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="cadastrar.php">Adicionar Livros</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav><br>

    <div class="container">
        <div class="card-deck">
            <?php while ($livro = $livros->fetchArray()) : ?>
                <div class="card-group">
                    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 12rem;">
                        <img src="<?= $livro["capa"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $livro["titulo"] ?></h5>
                            <p class="card-text"><?= $livro["autor"] ?></p>
                            <button  class="btn btn-danger" id="btn-delete"> DELETAR</button>

                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>
    
   <script> document.querySelectorAll("#btn-delete").forEach(btn => {
      btn.addEventListener("click", e => {
        const id = btn.getAttribute("data-id")
        const requestConfig = { method: "DELETE", headers: new Headers()}
        fetch(`/livros/${id}`, requestConfig)
          .then(response => response.json())
          .then(response => {
            if (response.success === "ok") {
              const card = btn.closest(".col")
              card.classList.add("fadeOut")
              setTimeout(() => card.remove(), 1000)
            }
          })
          .catch(error => {
            M.toast({
              html: 'Erro ao deletar'
            })
          })
      });
    });
</script>
</body>
