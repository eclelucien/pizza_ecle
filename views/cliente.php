    <main>
        <!-- conteúdo específico -->
        <h2>Área do Cliente</h2>
        <hr>
        <form method="POST" action="index.php?acao=login">
            <fieldset>
                <legend>Acesse sua conta</legend>
                <div>
                    <label for="id_email">E-mail: </label>
                    <input type="email" name="field_email" size="50" maxlength="50"
                        placeholder="Informe o e-mail utilizado no cadastro" id="id_email">
                </div>
                <br>
                <div>
                    <label>
                        Senha:
                        <input type="password" name="field_senha">
                    </label>
                </div>
                <br>
                <div class="erro_form">
                    <?php
                    if(isset($_GET['erro']) && $_GET['erro'] == 1)
                        echo "Dados de acesso inválidos!<br><br>";
                    ?>

                </div>
                <div>
                    <input type="submit" value="Acessar minha conta">
                    <input type="reset" value="Limpar campos">
                </div>
                <div>
                    <p><a href="index.php?acao=cadastro">Criar uma conta</a></p>
                </div>
            </fieldset>
        </form>
    </main>
