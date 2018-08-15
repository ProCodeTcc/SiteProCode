<?php
    require_once"conexao.php";

    $nome = "";
    $telefone = "";
    $email = "";
    $mensagem = "";

    if(isset($_POST['btnEnviar'])){

        $nome = $_POST['txtNome'];
        $telefone = $_POST['txtTelefone'];
        $email = $_POST['txtEmail'];
        $mensagem = $_POST['txtMensagem'];

        $sql = "INSERT INTO tbl_faleConosco (nome, telefone, email, mensagem)
        VALUES ('".$nome."', '".$telefone."', '".$email."', '".$mensagem."')";

        mysqli_query($conexao, $sql);
    }
 ?>
<html>
    <head>
        <title> ProCode </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/styleModal.css">
        <script src="js/jquery.js"> </script>
        <script>
            $(document).ready(function(){
                $("#abrirModal").click(function(){
                    $(".container").fadeIn(600);
                });
            });

            $(document).ready(function(){
                $(".fechar").click(function(){
                    $(".container").fadeOut(600);
                });
            });
        </script>
    </head>
    <body>
        <header>
            <div>
                <a href="#quemSomos">Quem Somos?</a>
            </div>
            <div>
                Soluções
            </div>
            <div>
                Portfolio
            </div>
            <div id="abrirModal">
                <a class="a">
                    Fale Conosco
                </a>
            </div>
        </header>
        <div class="container">
            <div class="fechar"></div>
            <div class="modal">
                <?php require_once"modal.php"; ?>
            </div>
        </div>
        <section class="full_principal">
            <div class="content">
                <div id="logo">
                    <img src="imagens/teste2.png">
                </div>
                <div id="texto">
                    
                </div>
                <div id="slogan">
                    ProCode O Futuro é agora !
                </div>

             </div>
        </section>
        <section class="segundo_full">
            <div class="content">
                <div id="esquerda">
                    <div class="titulo" id="quemSomos">
                        <u>
                            QUEM SOMOS
                        </u>
                    </div>
                    <div id="texto_fazemos">
                        <p class="pula">
                            ProCode, uma StartUp no ramo de desenvolvimento de software, foi idealizada por um grupo de quatro amigos, que são apaixonados por tecnologia.
                        </p>
                        <p class="pula">
                            O sonho de trabalhar com o que gostam, os levaram se especializarem na área de desenvolvimento de softwares, mas há um tempo atrás não tinham pretensão do que estava por vir. Até que se conheceram em um evento de tecnologia, mantiveram contato e idealizaram um sonho de serem reconhecidos no mercado, mas não como funcionário e sim como empresários.
                        </p>
                        <p class="pula">
                            Fundada no ano de 2018, esta empresa tem por finalidade ser umas das melhores na área de desenvolvimento, trabalhando com soluções para as plataformas Web, Mobile(Android) e Desktop. Com a intenção potencializar pequenos negócios no mercado de trabalho, a empresa começou a ficar conhecida no mundo digital.
                        </p>
                    </div>
                </div>
                <div id="direita">
                    <div id="imagem">
                        <img src="imagens/foto.jpg">
                    </div>
                </div>
             </div>
        </section>
        <div class="full"></div>
        <section class="segundo_full">
            <div class="content">

                    <div class="teste">
                    <div class="titulo">
                        <u>
                            SOLUÇÕES
                        </u>
                    </div>
                    <div class="segura">
                        <div class="icones">
                            <div class="icone_redondo">
                                    <img src="imagens/desktop.png">
                            </div>
                            <div class="descricao">
                                <p class="pula"><b>Desktop</b></p>
                                <p class="pula">Desktop é a principal ferramenta para o controle da empresa.</p>

                            </div>
                        </div>
                        <div class="icones">
                            <div class="icone_redondo">
                                <img src="imagens/web.png">
                            </div>
                            <div class="descricao">
                                <p class="pula"><b>Web</b></p>
                            <p class="pula">Paginas web são para o reconhecimento e divulgação.</p>
                            </div>
                        </div>
                        <div class="icones">
                            <div class="icone_redondo">
                                <img src="imagens/celular.png">
                            </div>
                            <div class="descricao">
                                <p class="pula"><b>Mobile</b></p>
                                <p class="pula">Desenvolvemos soluçoes mobile para aparelhos android.</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </section>
        <div class="full"></div>
        <section class="segundo_full">
            <div class="content">
                <div class="teste">
                    <div class="titulo">
                        <u>
                            PORTFOLIO
                        </u>
                    </div>
                    <div class="portfolio">
                        <div class="texto_protfolio">

                            Barbearia Cachorro Loko
                        </div>
                        <div class="area_protfolio">

                            <div class="imagens_protfolio_unico">
                                <img src="imagens/web_pc2.png">
                            </div>
                        </div>
                    </div>
                    <div class="portfolio">
                        <div class="texto_protfolio">
                            Padoka Hill valley
                        </div>
                        <div class="area_protfolio">
                            <div class="imagens_protfolio">
                                <img src="imagens/web_pc.png">
                            </div>
                            <div class="imagens_protfolio_mobile">
                                <img src="imagens/galaxy.png">
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </section>
        <footer>
            © COPYRIGHT 2018 - ProCode LTDA, TODOS OS DIREITOS RESERVADOS.
        </footer>
    </body>
</html>
