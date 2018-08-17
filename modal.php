<?php require_once'conexao.php'; ?>

<script>
// mascara de formatação para o campo de telefone/celular
    function formatPhone(obj, id){
        if(id == 'telefone'){
            var numbers = obj.value.replace(/\D/g, ''),
                char = {0: '(', 2: ') ', 6: '-'};
            obj.value = '';
            for(var i = 0; i < numbers.length; i++){
                obj.value += (char[i] || '') + numbers[i];
            }
        } else {
            var numbers = obj.value.replace(/\D/g, ''),
            char = {0: '(', 2: ') ', 7: '-'};
            obj.value = '';
            for(var i = 0; i < numbers.length; i++){
                obj.value += (char[i] || '') + numbers[i];
            }
        }

    }

    function validar(caracter, blockType, campo){
        document.getElementById(campo).style="background-color:#FFFFFF;";
       // Tratamento para verificar em qual tipo de navegador está vindo a tecla
        if(window.event){
       // Recebe a ascii do IE
            var letra = caracter.charCode;
        } else {
          // Recebe a ascii dos outros navegadores
            var letra = caracter.which;
        }


        if(blockType == 'caracter'){
          // bloqueio de caracteres
            if(letra<48 || letra>57){
                if(letra != 8 && letra!=32 && letra!=45){
            /* Troca a cor do elemento conforme for bloqueado
                variavel campo é recebida na função, nela contem o ID  do elemento a ser formatado
            */
                document.getElementById(campo).style="border-color:#FF0000;";
                document.write
                return false;
                }
            }
        } else if(blockType == 'number') {
        // bloqueio de numeros
            if(letra>=48 && letra<=64){
                document.getElementById(campo).style="border-color:#FF0000;";
                return false;
            }
        }
    }
</script>

<h1 class="tituloModal">
    Fale Conosco
</h1>
<hr>
<form action="index.php" method="post">
    <section class="contentCampos">
            <div class="linhaCampo">
                <div class="label">
                    Nome
                </div>
                <input class="inputs" id="nome" type="text" name="txtNome" value="" placeholder="Informe seu nome..." required maxlength="50">
            </div>
            <div class="linhaCampo">
                <div class="label">
                    Telefone
                </div>
                <input id="telefone" class="inputs" type="tel" name="txtTelefone" value="" placeholder="Informe seu telefone..." required maxlength="14" onkeypress="formatPhone(this, id); return validar(event, 'caracter', 'telefone')">
            </div>
            <div class="linhaCampo">
                <div class="label">
                    Email
                </div>
                <input id="email" class="inputs" type="email" name="txtEmail" value="" placeholder="Informe seu email..." required maxlength="100">
            </div>
            <div class="linhaCampo">
                <div class="label">
                    Mensagem
                </div>
                <textarea id="mensagem" type="email" name="txtMensagem" required></textarea>
            </div>
    </section>
    <hr>
    <div class="contentBotao">
        <input class="botaoStyle" type="submit" name="btnEnviar" value="< Enviar />">
    </div>
</form>
