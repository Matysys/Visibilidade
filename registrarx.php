<?php

header('Content-type: application/json');

class Usuario{
	private $nome;
	private $senha;
	private $info;

	public function set_Name($nome){
         $this->nome = $nome;
	}

	public function set_Senha($senha){
         $this->senha = $senha;
	}

   public function set_Info($info){
         $this->info = $info;
	}

	public function get_Name(){
         return $this->nome;
	}

	public function get_Senha(){
         return $this->senha;
	}

	public function get_Info(){
         return $this->info;
	}
}

$n = $_POST['name'];
$p = $_POST['password'];
$i = $_POST['info'];

if($n == null || $p == null || $i == null){
    echo json_encode("Preencha todos os campos!");
	return;
}

if($_POST['password'] != $_POST['password2']){
	echo json_encode("Senhas não correspondem");
}else{

$n = $_POST['name'];
$p = $_POST['password'];
$i = $_POST['info'];

$user = new Usuario();
$user->set_Name($n);
$user->set_Senha($p);
$user->set_Info($i);

$nome = $user->get_Name();
$senha = $user->get_Senha();
$informacao = $user->get_Info();

include "conexao.php";

//echo json_encode($user->get_Info());

try{
  $sql = "INSERT INTO usuario (nome, senha, info) VALUES ('$nome', '$senha', '$informacao')";
  $conn->exec($sql);
  echo json_encode("Cadastro concluído");
}catch(PDOexception $e){
	echo json_encode("Cadastro já existe");
}





}

?>