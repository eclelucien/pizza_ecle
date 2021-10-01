<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Pizza Byte</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Pizza, Pedido online">
    <meta name="description" content="Site da Pizzaria">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container">
    <header>
        <h1>Pizza Byte</h1>
        <p>Love at first byte</p>
        <div id="menu_topo">
            <?php
            if(isset($_SESSION['nome'])) // esta logado
                echo "Olá, {$_SESSION['nome']} (<a href='index.php?acao=sair'>sair</a>)";
            else    
                echo "Olá, visitante! (<a href='index.php?acao=cliente'>entrar</a>)";
            ?>
            &nbsp;&nbsp;
            <a href="index.php?acao=carrinho">meu carrinho</a>
        </div>
        <div id="menu_topo_mobile">
            <span class="material-icons">
                <a href='index.php?acao=cliente'>login</a>
            </span> 
            &nbsp;           
            <span class="material-icons">
                <a href='index.php?acao=carrinho'>shopping_cart</a>
            </span>
        </div>
        <span id="showMenu" onclick="showMenu()">&equiv; Menu</span>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="index.php?acao=quemsomos">Quem somos</a></li>
            <li><a href="index.php?acao=precos">Preços</a></li>
            <li><a href="index.php?acao=pedido">Faça seu pedido</a></li>
            <li><a href="index.php?acao=cliente">Área do cliente</a></li>
            <li><a href="index.php?acao=contato">Contato</a></li>
        </ul>
    </nav>
