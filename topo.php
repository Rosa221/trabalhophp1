<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="javascript:void(0);" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation" onclick="myFunction()">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="myLinks">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" >theBEBIDAS.COM<span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href = "index.php" >Sair<span class="sr-only"></span></a>
            </li>

 <?php
 session_start();
    if($_SESSION["perfil"] == "adm"){
        echo '<a class="nav-link" href = "index.php" >Sair do Adm<span class="sr-only"></span></a>';
    }else{
      echo '<a class="nav-link" href = "index.php" >Sair do usuário<span class="sr-only"></span></a>';
    }
    ?>


          </ul>
        </div>
      </nav>
      <script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
  
