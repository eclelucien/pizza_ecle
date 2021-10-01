<?php
// pagina que opera como um controller

include_once "views/layout/topo.php";
include_once "../classes/SaborDAO.php";
if(!isset($_GET['acao'])){
    // nenhuma acao: carrega pg inicial de adm. de sabores 
    $titulo = "Lista de Sabores";
    $obj = new SaborDAO();
    $lista = $obj->listar();
    include "views/listaSabor.php";
}
else {   
	switch($_GET['acao']){

        case 'cadastra':
            $titulo = "Cadastro de Sabor";
            if(!isset($_POST['cadastrar'])) { //ao carregar formulario
                include "views/cadastraSabor.php";
            }
            else { // apos submeter os dados 
                $novo = new Sabor();
                $novo->setNome($_POST['field_nome']);
                $novo->setIngredientes($_POST['field_ingredientes']);
                $novo->setNomeImagem($_FILES['field_imagem']['name']);
                $erros = $novo->validate();
                if(count($erros) != 0){ // algum campo não validou
                    include "views/cadastraSabor.php";
                }
                else{
                    //sem erros de validacao, fazer o upload
                    $destino = "../assets/images/".$_FILES['field_imagem']['name'];
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        // upload bem sucedido, insere no BD
                        $bd = new SaborDAO();
                        if($bd->inserir($novo))
                            header("Location: adm_sabor.php");
                    }
                } 
            }
                     
            break;

        
        case 'altera':
            $titulo = "Alteração de Sabor";
            if(!isset($_POST['alterar'])) { //ao carregar formulario
               $obj = new SaborDAO();
               $sabor = $obj->buscar($_GET['cod']);
               if(is_object($sabor)) // registro com aquele codigo existe
                   include "views/alteraSabor.php";
               else // retornou falso; codigo nao existe na tabela
                   header("Location: adm_sabor.php");     
            }
            else { // apos submeter os dados 
                $atual = new Sabor();
                $atual->setNome($_POST['field_nome']);
                $atual->setIngredientes($_POST['field_ingredientes']);
                $atual->setNomeImagem($_FILES['field_imagem']['name']);
                $atual->setCodigo($_POST['cod']);
                $erros = $atual->validate();
                if(count($erros) != 0){ // algum campo não validou
                    include "views/alteraSabor.php";
                }
                else{
                    //sem erros de validacao, fazer o upload
                    $destino = "../assets/images/".$_FILES['field_imagem']['name'];
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        // upload bem sucedido, altera no BD
                        $bd = new SaborDAO();
                        if($bd->alterar($atual))
                            header("Location: adm_sabor.php");
                    }
                } 
            }                        
            break;

        
        case 'exclui':
            //$titulo = "Exclusão de Sabor";
            $bd = new SaborDAO();
            $retorno = $bd->excluir($_GET['cod']);
            if(is_bool($retorno))
                header("Location: adm_sabor.php");
            else{
                echo "<p>$retorno</p>";
            }    
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }// fim switch
} // fim else
include_once "views/layout/rodape.php";
?>

