<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>theBEBIDAS.COM</title>
</head>
<body>

<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
    <main class="form-signin">

<form class="formgroup" action="login.php" method="post">

<center><h1 class="h3 mb-3 fw-normal">Faça o Seu Login</h1></center>

    <div class="form-floating">
<input type="text" name = "login" class="form-control" id="login" placeholder="login"><label for="text">Login</label>
    </div>

<div class="form-floating">
<input type="password" name = "senha" class="form-control" id="senha" placeholder="Password"><label for="senha">Senha</label>
</div>

<div class="checkbox mb-3">
    <label><br><input type="checkbox" value="remember-me"> Lembra-me</label>
</div>

<div class="row">

    <div class="col">
    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    </div>

    <div class="col">   
    <button class="w-100 btn btn-lg btn-danger" type="submit">Limpar</button>
    </div>
</div>
</form>
  </main>


<?php include_once 'rodape.php'; ?>


<br>
</br>
<?php
    if(isset($_GET["msg"])){
    echo $_GET["msg"];
    }
    ?>

</div>
</body>
</html>