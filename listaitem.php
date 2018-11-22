<?php

	session_start();

	if (!isset($_SESSION['id']) || empty($_SESSION['id']) 
		|| (array_key_exists('permissao_item', $_SESSION) && !$_SESSION['permissao_item'])) {
		header('Location: index.php');
	}

	include_once("conexao.php");

	$consulta = "SELECT * FROM item";

	$con = $conexao->query($consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php include('usuarioLogado.php');?>
	<table border="1">
		<thead>
			<tr>
				<th>Id</th>
				<th>nome item</th>
				<th>categoria</th>
			</tr>
		</thead>
		<tbody>
			<?php while($dado = $con->fetch_array()){ ?>
			<tr>
				<td><?php echo $dado["idItem"];?></td>
				<td><?php echo $dado["nomeItem"];?></td>
				<td><?php echo $dado["categoria"];?></td>
			</tr>
			<?php } mysqli_close($conexao); ?>
		</tbody>

	</table>

</body>
</html>