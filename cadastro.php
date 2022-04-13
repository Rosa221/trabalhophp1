<script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

<?php include 'topo.php'; ?>
<div class = "container">
<h3>Nova Bebida</h3>
<form action = "cadastrar.php" method = "post">
<br>
<b>Bebida:</b><br>
<input type = "text" name = "bebida" id = "bebida" class = "form-control">
</br>
<b>Tipo:</b><br>
<input type = "text" name = "tipo" id = "tipo" class = "form-control">
</br>
<b>Valor:</b><br>
<input type = "text" name = "valor" id = "valor" class = "form-control">
</br>
<b>País:</b><br>
<input type = "text" name = "pais" id = "pais" class = "form-control">
</br>
<b>Comentário:</b><br>
<input type = "text" name = "comentario" id = "comentario" class = "form-control">
</br>

        <label>Cep:
        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);"class="form-control" /></label><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" size="60" class="form-control" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" class="form-control"/></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" size="40" class="form-control"/></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" size="2"class="form-control" /></label><br />
        <label>IBGE:
        <input name="ibge" type="text" id="ibge" size="8" class="form-control"/></label><br />



Nota:<br>
<select name = "nota" id = "nota">
    <option value = "">Selecione</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "4">4</option>
    <option value = "5">5</option>
</select>
<br></br>

<input type = "submit" value = "Cadastrar Produto" class="btn btn-primary" >
<input type = "reset" value = "Limpar" class="btn btn-danger">
</form>
</div>
<script>
function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }
</script>

</br>
</br>
</br>
</br>
</br>
<?php include 'rodape.php'; ?>