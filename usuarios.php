<?php session_start();
if(isset($_SESSION['user'])){
$usuario = $_SESSION['user'];
}
?>
<!DOCTYPE html>
	<html lang="pt-BR">
	<head>
		<title>Usuários</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>
	<body id="back">
    <?php include "conexao.php" ?>
    <div class="container p-3 mt-5" id="con"> <?php if(!isset($_SESSION['user'])){ ?>
      <h2>USUÁRIOS</h2><?php }else {?>
      <h2>Olá, <?php echo $usuario; ?></h2><br>
      <?php
        $consultau = $conn->query("SELECT id, info, public FROM usuario WHERE nome = '$usuario'");
        $linhau = $consultau->fetch(PDO::FETCH_ASSOC);

       ?><h3>Informações gerais:<br><?php
        echo "ID: " . $linhau['id'] . "<br>";
        echo "Informação: " . $linhau['info'] . "<br>";
        if($linhau['public'] == 1)
          $i = "Público";
        else $i= "Privado";
        echo "Visibilidade: " . $i . "<br>";
        ?></h3>
      <p>Você quer sua informação pública ou privada?</p>
  <input type="radio" value="1" name="ra" checked>
  <label for="public">Público</label><br>
  <input type="radio" name="ra" value="0">
  <label for="privado">Privado</label><br>
  <button class="btn btn-success mb-5" id="mudar">Alterar</button>
  <button class="btn btn-danger mb-5" id="logout">Sair</button>
    <?php } ?>    
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Info</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if(isset($_SESSION['user']))
      $consulta = $conn->query("SELECT id, nome, info, public FROM usuario WHERE nome <> '$usuario' ORDER BY id ASC");
      else
      $consulta = $conn->query("SELECT id, nome, info, public FROM usuario ORDER BY id ASC");


      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
      

      ?>
      <tr>
        <td><?php echo $linha['id']; ?></td>
        <td><?php echo $linha['nome']; ?></td>
        <td><?php
        if($linha['public'] == 1){
          echo $linha['info'];
        }else{
          echo "Informação privada";
        } }?></td>
      </tr>
    </tbody>
  </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="ajax.js"></script>       
</body>
</html>