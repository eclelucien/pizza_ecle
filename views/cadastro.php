    <main>
        <!-- conteúdo específico -->
        <h2>Cadastro</h2>
        <hr>
        <form method="POST" action="">
            <div>
                <label for="id_nome">Nome completo: </label>
                <input type="text" name="field_nome" size="50" maxlength="50" id="id_nome" required autofocus
                    autocomplete="off">
            </div>
            <div>
                <label for="id_email">E-mail: </label>
                <input type="email" name="field_email" size="50" maxlength="50"
                    placeholder="Informe o e-mail utilizado no cadastro" id="id_email" required>
            </div>
            <div>
                <label for="id_tel">Telefone: </label>
                <input type="tel" name="field_tel" id="id_tel">
            </div>
            <div>
                <label for="id_dn">Data de nascimento: </label>
                <input type="date" name="field_dn" id="id_dn">
            </div>
            <div>
                <label for="id_senha1">Senha: </label>
                <input type="password" name="field_senha1" id="id_senha1">
            </div>
            <div>
                <label for="id_senha2">Confirme a senha: </label>
                <input type="password" name="field_senha2" id="id_senha2">
            </div>
            <div>
                <label for="id_endereco">Endereço: </label>
                <input type="text" name="field_endereco" size="50" maxlength="50" id="id_endereco"
                    placeholder="Rua, número, complemento">
            </div>
            <div>
                <label for="id_bairro">Bairro:</label>
                <select id="id_bairro" name="field_bairro">
                    <option>Selecione</option>
                    <option>Centro</option>
                    <option>Maria Goretti</option>
                    <option>Santa Maria</option>
                    <option>Efapi</option>
                    <option>Engenho Braum</option>
                </select>
            </div>
            <div>
                <fieldset>
                    <legend>Como você conheceu nossa empresa?</legend>
                    <label><input type="radio" name="field_comoConheceu" value="Loja física" checked>Loja física</label>
                    <br>
                    <label><input type="radio" name="field_comoConheceu" value="Redes sociais">Redes sociais</label>
                    <br>
                    <label><input type="radio" name="field_comoConheceu" value="Publicidade">Publicidade</label>
                    <br>
                    <label><input type="radio" name="field_comoConheceu" value="Indicação de amigos">Indicação de
                        amigos</label>
                </fieldset>
            </div>
            <div>
                <label><input type="checkbox" name="field_promo1" value="sim" checked>
                    Quero receber promoções da Pizza Byte
                </label>
                <br>
                <label><input type="checkbox" name="field_promo2" value="sim" checked>
                    Quero receber promoções das empresas parceiras
                </label>
            </div>
            <div>
                <label for="id_obs">Observações:</label><br>
                <textarea name="field_obs" rows="5" cols="50" placeholder="Informações adicionais"
                    id="id_obs"></textarea>
            </div>

            <br>

            <br>
            <div>
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar campos">
            </div>
        </form>
    </main>

