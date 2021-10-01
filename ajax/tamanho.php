<?php
$conexao = new PDO("mysql:host=localhost;dbname=pizza", "admpizza", "12345");
$consulta = $conexao->prepare("SELECT codigo, nome, numOpcoes, preco FROM tamanho where sigla=:s");
$consulta->bindParam(":s", $_GET['sigla']);
$consulta->execute();
$array = $consulta->fetch(PDO::FETCH_ASSOC);
$array = json_encode($array);
print_r($array);
?>