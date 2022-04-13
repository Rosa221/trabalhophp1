<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link">theBEBIDAS.COM <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro.php"> Nova Bebida </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="consulta.php"> Consulta de Bebidas </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php"> Sair </a>
            </li>
          </ul>
        </div>
      </nav>

      <?php
      echo "Seja Bem Vindo(a), ".$_SESSION["nome"];

      ?>

