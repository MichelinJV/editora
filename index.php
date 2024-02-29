<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editora</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Editora</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Autores
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=autor-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=autor-cadastrar">Cadastrar</a></li>            
          </ul>
        </li>        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=livro-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=livro-cadastrar">Cadastrar</a></li>            
          </ul>
        </li>
      </ul>      
    </div>
  </div>
</nav>

<div class="containner">
    <div class="row">
        <div class="col">

            <?php
                include('config.php');

                switch(@$_REQUEST['page']){
                    case 'autor-listar':
                        include('autor-listar.php');
                        break;
                    case 'autor-cadastrar':
                        include('autor-cadastrar.php');
                        break;
                    case 'autor-editar':
                        include('autor-editar.php');
                        break;
                    case 'autor-salvar':
                        include('autor-salvar.php');
                        break;

                      case 'livro-listar':
                          include('livro-listar.php');
                          break;
                      case 'livro-cadastrar':
                          include('livro-cadastrar.php');
                          break;
                      case 'livro-editar':
                          include('livro-editar.php');
                          break;
                      case 'livro-salvar':
                          include('livro-salvar.php');
                          break;
                              
                    default:
                        print "<h1>Seja Bem-Vindo !</h1>";
                }

            ?>
        </div>
    </div>
</div>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>