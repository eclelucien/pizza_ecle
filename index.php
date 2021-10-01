<?php
    include_once("views/layout/topo.php");

    if(isset($_GET['acao'])){

        if($_GET['acao'] == "login"){
            include_once("classes/ClienteDAO.php");
            $obj = new ClienteDAO();
            if ($res = $obj->autenticar($_POST['field_email'], $_POST['field_senha'])){ // sucesso
                $_SESSION['codigo'] = $res['codigo'];
                $_SESSION['nome'] = $res['nome'];
                $_SESSION['endereco'] = $res['endereco'];
                $_SESSION['bairro'] = $res['bairro'];
                header("Location: index.php?acao=minhaconta");
            }
            else{ // login e/ou senha incorretos
                header("Location: index.php?acao=cliente&erro=1");
            }
            
        }

        elseif($_GET['acao'] == "sair"){
            session_destroy();
            header("Location: index.php");
        }
        elseif($_GET['acao']=="cliente" && isset($_SESSION['nome'])){
            header("Location: index.php?acao=minhaconta");         
        }

        // carrinho de compras
        elseif($_GET['acao'] == "addCarrinho"){
            // adicionar
        }
        elseif($_GET['acao'] == "delCarrinho"){
            // excluir
        }        
        else
            include_once("views/{$_GET['acao']}.php");
    }
    else
        include_once("views/inicio.php");

    include_once("views/layout/rodape.php");
?>