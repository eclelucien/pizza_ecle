
    <main>
        <!-- conteúdo específico -->
        <h2>Preços</h2>
        <hr>
        <table>
            <caption>Conheça nossas opções:</caption>            
            <tr>
                <th>Tamanho</th>
                <th>Número de sabores</th>
                <th>Preço</th>
            </tr>
            <?php
            // forma mais fácil e direta de usar o PDo na página:
            $conexao = new PDO("mysql:host=localhost;dbname=pizza", "admpizza", "12345");
            $consulta = $conexao->prepare("SELECT * FROM tamanho");
            $consulta->execute();
            $array = $consulta->fetchAll(PDO::FETCH_ASSOC); 
            foreach($array as $opcao) {         
            ?>
                <tr>
                    <td><?=$opcao['nome']?></td>
                    <td><?=$opcao['numOpcoes']?></td>
                    <td>R$ <?=number_format($opcao['preco'], 2, ",", ".")?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </main>