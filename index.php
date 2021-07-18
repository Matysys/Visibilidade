<?php

session_start();
if(isset($_SESSION['user'])){
  echo "<script>document.location = 'usuarios.php';</script>";
  return;
}

?>

<!DOCTYPE html>
	<html lang="pt-BR">
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body id="back">
    <div class="container p-4 mt-5" id="con">
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" placeholder="Seu nome" id="nome">
  </div>
  <div class="form-group">
    <label for="pwd">Senha:</label>
    <input type="password" class="form-control" placeholder="Sua senha" id="senha">
  </div>
  <div class="btn-group">
  <button type="submit" id="login" class="btn btn-info mr-1">Login</button>
  <a href="registrar.php"><button type="submit" class="btn btn-info mr-1">Registrar</button></a>
  <a href="usuarios.php"><button type="submit" class="btn btn-info mr-1">Usuários</button></a>
   </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="ajax.js"></script>       
	</body>
</html>