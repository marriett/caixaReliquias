<?php 

	session_start();

	if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
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
	<form action="usuario.php" method="POST">
		nome: <input type='text' name='nome'><br>
   		sobrenome: <input type='text' name='sobrenome'><br>
   		email: <input type='text' name='email'><br>
   		login: <input type='text' name='login'><br>
   		senha: <input type='password' name='senha'>
    	<button>cadastra</button>
	</form>
</body>
</html>