<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <title>CRUD PHP</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar Usuários</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");

                switch (@$_REQUEST["page"]) {
                    case "login":
                        include("login.php");
                        break;
                    case "novo":
                        include("novo-usuario.php");
                        break;
                    case "salvar":
                        include("salvar-usuario.php");
                        break;
                    case "listar":
                        include("listar-usuario.php");
                        break;
                    case "editar":
                        include("editar-usuario.php");
                        break;
                    default:
                        print "<h1>Home</h1>";
                }
                ?>
            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>