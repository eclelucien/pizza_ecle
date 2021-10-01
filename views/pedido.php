        <main>
            <!-- conteúdo específico -->
            <h2>Faça seu pedido</h2>
            <hr>
            <form id="form_pedido" method="post" action="index.php?acao=addcarrinho">
                <label for="tamanho">Selecione o tamanho da pizza:</label>
                <select name="tamanho" id="tamanho">
                    <option value="">---- Selecione ----</option>
                    <option value="b">Broto</option>
                    <option value="p">Pequena</option>
                    <option value="m">Média</option>
                    <option value="g">Grande</option>
                    <option value="gg">Gigante</option>
                </select>
                <br>
                <br>
                <div id="opcoes_pedido">
                    <p>Preço: <strong id="mostraPreco">0</strong></p>
                    <p>Você selecionou <strong id="numSabores">0</strong> de <strong id="limiteSabores">0</strong>
                        sabores</p>
                    <input type="hidden" name="preco" id="preco">
                    <input type="hidden" name="codTamanho" id="codTamanho">
                    <input type="hidden" name="nomeTamanho" id="nomeTamanho">
                    <div id="cardapio">
                        <!-- container -->

                        <?php
                        require_once "classes/SaborDAO.php";
                        $obj = new SaborDAO();
                        $lista = $obj->listar();
                        foreach($lista as $sabor){
                        ?>
                        <div class="sabor" id="flavor<?=$sabor->getCodigo()."-".$sabor->getNome();?>">
                            <label>
                                <input type="checkbox" name="sabores[]" value="<?=$sabor->getCodigo()."-".$sabor->getNome();?>">
                                <div class="sabor_img">
                                    <img src="assets/images/<?=($sabor->getNomeImagem() == "")? "sem_foto.jpg" : $sabor->getNomeImagem();?>" alt="imagem: <?=$sabor->getNome();?>">
                                </div>
                                <div class="sabor_descricao">
                                    <strong><?=$sabor->getNome();?></strong>
                                    <?=$sabor->getIngredientes();?>
                                </div>
                            </label>
                        </div>
                        <?php
                        }
                        ?>
                  
                    </div> <!-- fim container -->
                    <br><br>
                    <fieldset>
                        <legend>Selecione a opção de borda:</legend>
                        <label><input type="radio" name="borda" value="Sem borda" checked>Sem borda</label><br>
                        <label><input type="radio" name="borda" value="Catupiry">Catupiry</label><br>
                        <label><input type="radio" name="borda" value="Cheddar">Cheddar</label><br>
                        <label><input type="radio" name="borda" value="Chocolate">Chocolate</label><br>
                    </fieldset>
                    <br><br>
                    <input type="submit" value="Adicionar ao carrinho" name="adicionar">
                </div>



            </form>
        </main>

        <div id="duvidas">
            <div id="texto">Dúvidas? Fale com nossos atendentes</div>
            <div id="botoes">
                <span id="minHelp" class="btHelp" onclick="minHelp()">&or;</span>
                <span id="maxHelp" class="btHelp" onclick="maxHelp()">&and;</span>
                <span id="closeHelp" class="btHelp" onclick="closeHelp()">x</span>
            </div>            
        </div>
        <script src="assets/js/pedido.js"></script>
       