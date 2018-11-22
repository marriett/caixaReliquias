<?php
	
	session_start();

	if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
		header('Location: formularioLogin.php');
	}

	$arrayMenu = [
		'permissao_item_cadastrar'    => '/caixaReliquia/formularioItem.php',
		'permissao_item_listar'       => '/caixaReliquia/listaitem.php'
	];

	$menu = '';

	//checar se usuario esta na sessao
	if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {

		//Capturar informacoes da sessao (permissao)
		foreach ($arrayMenu as $permissaoNome => $permissaoUrl) {

			if (array_key_exists($permissaoNome, $_SESSION) && $_SESSION[$permissaoNome] > 0) {
				$menu .= "<a href='$permissaoUrl'> $permissaoNome </a> <br>";
			}
			
		}

	} else {
		
		//Redirecionado para o formularioLogin
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Caixa Relíquia</title>
	<meta charset="utf-8">
</head>
<body>
	<?php include('usuarioLogado.php');?>	
	Menu de Opções <br>
	<?php echo $menu;?>
</body>
</html>