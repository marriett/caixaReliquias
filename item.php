<?php

$dns = "mysql:dbname=caixa_reliquias;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dns,$dbuser,$dbpass);
	echo "Inserir no banco<br>";

	$nomei = $_POST['nome'];
	$categoriai = $_POST['categoria'];
	$colecaoi = $_POST['colecao'];
	$descricai = $_POST['descricao'];
	$situacaoi = $_POST['situacao'];
	$empretimoi = $_POST['emprestimo'];
	$id = '7';

	$sql = "INSERT INTO item SET nomeItem='$nomei', categoria='$categoriai', colecaoItem='$colecaoi', descricao='$descricai', emprestimoPessoa='$empretimoi', idUsuario='$id'";

	$sql = $pdo->query($sql);

	echo "Inserido no banco com sucesso!";

}catch(PDOException $e){
	echo "Falou: ".$e->getMessager();
}


?>