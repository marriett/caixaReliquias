<?php

$dsn = "mysql:dbname=caixa_reliquias;host=localhost";

$dbuser = "root";
$dbpass = "";


try{
    $pdo = new PDO($dsn,$dbuser,$dbpass);
    echo "começou a inserir no banco <br>";

$nome =  $_POST['nome'];
$sobreN  = $_POST['sobrenome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = (md5($_POST['senha']));



    $sql = "INSERT INTO usuario SET nome='$nome',sobrenome='$sobreN',email='$email',login='$login',senha='$senha'";
    $sql = $pdo->query($sql);

    echo "Inserido com sucesso!";

}catch(PDOException $e){
    echo "Falou: ".$e->getMessager();
}

?>