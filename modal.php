<?php require_once'conexao.php'; ?>
<script src="js/jquery.js"></script>
<script>
    // código que faz o efeito de fechar a modal
    $(document).ready(function(){
        $('#btnCancelar').click(function(){
            $('.container').fadeOut(600);
        });
    });
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
                <input class="inputs" type="text" name="txtNome" value="" placeholder="Informe seu nome..." required maxlength="50">
            </div>
            <div class="linhaCampo">
                <div class="label">
                    Telefone
                </div>
                <input class="inputs" type="tel" name="txtTelefone" value="" placeholder="Informe seu telefone..." required maxlength="13">
            </div>
            <div class="linhaCampo">
                <div class="label">
                    Email
                </div>
                <input class="inputs" type="email" name="txtEmail" value="" placeholder="Informe seu email..." required maxlength="100">
            </div>
            <div class="linhaCampo">
                <div class="label">
                    Mensagem
                </div>
                <textarea type="email" name="txtMensagem" required></textarea>
            </div>
    </section>
    <hr>
    <div class="contentBotao">
        <input class="botaoStyle" type="submit" name="btnEnviar" value="Enviar">
        <input class="botaoStyle" type="button" name="btnCancelar" id="btnCancelar" value="Cancelar">
    </div>
</form>
