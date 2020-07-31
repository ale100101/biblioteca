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
                            <div class="card-img-overlay">
                                <div class="d-flex flex-row bd-highlight mb-3">
                                    <a href="#" class="btn btn-primary-wite"><svg class="bi bi-star-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="gold" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
    </div>

</body>





</html>