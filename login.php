<?php

include_once("conexao.php");

try{
	$login = $_POST['login'];
	$senha = (md5($_POST['senha']));

    $consulta = "SELECT * FROM usuario WHERE login = '$login' and senha = '$senha'";
	$con      = $conexao->query($consulta);

	$resultado = $con->fetch_array();	

	//Adicionar colunas na tabela de permissoes a tabela de usuario ex: permissao_usuario, permissao_item (x)

	//Verificar se usuario existe no banco, caso nao, redireciona para a formularioLogin
	if (count($resultado) > 0) {
		session_start();

		//Lanca dados na sessao     $_SESSION
		$_SESSION['id'] = $resultado['id'];
		$_SESSION['nome'] = $resultado['nome'] ;
		$_SESSION['sobrenome'] = $resultado['sobrenome'] ;
		$_SESSION['email'] = $resultado['email'];
		$_SESSION['login'] = $resultado['login'] ;
		$_SESSION['senha'] = $resultado['senha'];
		$_SESSION['permissao_usuario_cadastrar'] = $resultado['permissao_usuario_cadastrar'] ;
		$_SESSION['permissao_item_cadastrar'] = $resultado['permissao_item_cadastrar'];
		$_SESSION['permissao_item_listar'] = $resultado['permissao_item_listar'];

		//Adicionar id, login e campos de permissao na sessao dica: $_SESSION (php.net)
		//Redireciona para o index.php
		header('Location: index.php');
		//redirect('http://localhost/caixaReliquia/index.php');
	} else {
		//Redireciona para o formularioLogin.php	
		header('Location: formularioLogin.php');
	}

}catch(PDOException $e){
    echo "Falou: ".$e->getMessager();
}

?>