<?php

session_start();

include "conexao.php";

$alterar = $_POST['alterari'];
$nome = $_SESSION['user'];

$alterarinfo = $conn->query("SELECT public FROM usuario WHERE nome = '$nome'");
$linha = $alterarinfo->fetch(PDO::FETCH_ASSOC);

if($linha['public'] == $alterar){
	echo json_encode("Seu cadastro já está com a opção selecionada ativa");
}else{
	$stmt = $conn->prepare('UPDATE usuario SET public = :public WHERE nome = :nome');
    $stmt->execute(array(
    ':public'   => $alterar,
    ':nome' => $nome
  ));
    echo json_encode("Visibilidade alterada com sucesso!");

}


?>