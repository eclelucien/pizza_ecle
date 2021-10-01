<main>
    <h2><?=$titulo?></h2>
    <hr>
    <br><br>
    <div class="erro_form">
    <?php
    if(isset($erros) && count($erros) != 0){
        echo "<ul>";
        foreach ($erros as $e)
            echo "<li>$e</li>";
        echo "</ul>";
    }

    $nome = (isset($_POST['field_nome'])) ? $_POST['field_nome'] : "";
    $ingred = (isset($_POST['field_ingredientes'])) ? $_POST['field_ingredientes'] : "";
    ?>
    </div>
    <form action="#" method="post" enctype="multipart/form-data">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="field_nome" size="20" maxlength="20" id="nome" value="<?=$nome?>">
        </div>
        <div>
            <label for="ingred">Ingredientes: </label>
            <input type="text" name="field_ingredientes" size="100" maxlength="100" id="ingred" value="<?=$ingred?>">
        </div>  
        <div>
            <label for="img">Imagem: </label>
            <input type="file" name="field_imagem" id="img">
        </div>      
        <div>
            <input type="submit" name="cadastrar" value="Cadastrar">
        </div>
    </form> 
</main>