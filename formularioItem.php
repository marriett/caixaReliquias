<?php

	session_start();

	if (!isset($_SESSION['id']) || empty($_SESSION['id']) 
		|| (array_key_exists('permissao_item_cadastrar', $_SESSION) && !$_SESSION['permissao_item_cadastrar']) || (array_key_exists('permissao_item_listar', $_SESSION) && !$_SESSION['permissao_item_listar'])) {
		header('Location: index.php');
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php include('usuarioLogado.php');?>
	<form action="item.php" method="POST">
	
		nome item: <input type="text" name="nome">
		categoria do item: <select name="categoria">
			<option value="livro">Livro</option>
			<option value="dvd">DVD</option>
			<option value="cd">CD</option>
			<option value="caneca">caneca</option>
		</select><br>
		coleção do item: <input type="text" name="colecao"><br>
		descrição do item: <textarea name="descricao" cols="20" rows="1"></textarea><br>
		situação do item: <select name="situacao">
			<option value="não emprestado">não emprestado</option>
			<option value="emprestado">Emprestado</option>
		</select><br>
		pessoa emprestada: <input type="text" name="emprestimo"><br>
		<button>cadastra</button>

</form>
</body>
</html>