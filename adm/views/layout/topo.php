<?php
session_start();
if(!isset($_SESSION['logado']) || $_SESSION['logado'] == false){
    echo "Acesso negado!";
    die();
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Pizzaria Byte - Back Office</title>
    <meta charset="utf-8">
    <meta name="description" content="Site da Pizzaria">
    <meta name="keywords" content="Pizza, Pedido online"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container">
    <header>
        <h1>Pizza Byte</h1>
        <p>Área de Administração</p>
        <div id="menu_topo">
            Usuário: <?=$_SESSION['usuario']; ?>
            <br>
            Acesso em: <?=$_SESSION['inicio']; ?>
        </div>        
    </header>

    <nav>
        <ul>
            <li><a href="#">Início</a></li>
            <li><a href="adm_sabor.php">Sabores</a></li>
            <li><a href="#.php">Clientes</a></li>
            <li><a href="#">Pedidos</a></li>
            <li><a href="sair.php">Sair</a></li>
        </ul>
    </nav>
