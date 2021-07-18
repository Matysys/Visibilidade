<?php

include "conexao.php";

$nome = $_POST['name'];
$senha = $_POST['password'];

$consulta = $conn->query("SELECT nome, senha FROM usuario WHERE nome = '$nome' AND senha = '$senha'");

      $linha = $consulta->fetch(PDO::FETCH_ASSOC);   
      //echo json_encode($nome); 
      if($consulta->rowCount() > 0){
      	session_start();
      	$_SESSION['user'] = $linha['nome'];
      	echo json_encode("OK");
      	return;
      }else{
      	echo json_encode("Login incorreto!"); 
}


?>