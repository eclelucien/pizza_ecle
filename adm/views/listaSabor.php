<main>
    <h2><?=$titulo?></h2>
    <hr>
    <br><br>
    <p>| <a href="adm_sabor.php?acao=cadastra">cadastrar novo</a> |</p>
    <?php
    if(count($lista) == 0){
        echo "<p>Nenhum sabor cadastrado</p>";
    }
    else{
        ?>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Ingredientes</th>
                <th>Ações</th>
            </tr>
            <?php
            foreach($lista as $sabor){
                ?>
                <tr>
                    <td><?=$sabor->getCodigo()?></td>
                    <td><?=$sabor->getNome()?></td>
                    <td><?=$sabor->getIngredientes()?></td>
                    <td>
                    <a href="adm_sabor.php?acao=altera&cod=<?=$sabor->getCodigo()?>">alterar</a> 
                    | 
                    <a href="adm_sabor.php?acao=exclui&cod=<?=$sabor->getCodigo()?>" onclick="return confirm('Tem certeza que deseja excluir este item?')">excluir</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    }
    ?>
</main>