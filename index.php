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
        header('location:index.php');
    }
 ?>
<html>
    <head>
        <title> ProCode </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/styleModal.css">
        <link rel="stylesheet" href="css/styleText.css">
        <script src="js/jquery.js"> </script>
        <script src="index.js"></script>
        <script>
            // abrir a modal
            $(document).ready(function(){
                $("#abrirModal").click(function(){
                    $(".container").fadeIn(600);
                });
            });
            // fechar a modal
            $(document).ready(function(){
                $(".fechar").click(function(){
                    $(".container").fadeOut(600);
                });
            });

            // função para limpar os campos ao fechar a modal
            function limparCampos(){
                $("#nome").val("");
                $("#email").val("");
                $("#telefone").val("");
                $("#mensagem").val("");
            }

                        // código de efeito ancora do site
            var CORRECTION = 90;  // height of the navbar
             // don't forget to setup the data-offset attribute of the <body> tag

             var DELAY_READING = 4000; // 4 seconds = 4000; 10 seconds = 10000
             var DELAY_SCROLLING = 1500;

             var links = [ '#quemsomos', '#solucoes','#protifolio'];
             var timerId = 0;

             $(document).ready(function(){
                     $( 'a' ).click(function(event) {
                       event.preventDefault();
                       scrollToLink( $(this).attr('href') );
                 });
             });

             function scrollToLink( link ) {
               selectLink = $( link );
               if ( selectLink.length ) {
                   var top = selectLink.offset().top - CORRECTION;
                   $('body,html').stop().animate({scrollTop: top}, DELAY_SCROLLING);
               } else {
                   console.log('The link is not found: ' + link);
               }
             }
        </script>
    </head>
    <body>
        <header>
            <!--
            efeito vue-typer
            -->
            <nav class="contentCentralizar">
                <a href="body">
                    <div class="logoHeader"></div>
                </a>
                <section class="content_menu">
                    <a href="#quemSomos">
                        <div class="caixas">
                            Quem Somos
                        </div>
                    </a>
                    <a href="#solucoes">
                        <div class="caixas">
                            Soluções
                        </div>
                    </a>
                    <a href="#portifolio">
                        <div class="caixas">
                            Portifólio
                        </div>
                    </a>
                    <a>
                        <div id="abrirModal" class="caixas">
                            Fale Conosco
                        </div>
                    </a>
                </section>
            </nav>
        </header>

        <div class="alinhamento"></div>

        <!-- modal -->
        <div class="container">
            <div class="fechar" onclick="limparCampos();"></div>
            <div class="modal">
                <?php require_once"modal.php"; ?>
            </div>
        </div>

        <!-- home do site -->
        <section class="full_principal">
            <div class="content">
                <div id="logo">
                    <img src="imagens/teste2.png">
                </div>
                <div class="contentSlogan">
                    <div id="slogan" class="visible">
                        <p class="p">
                            O Futuro é
                        </p>
                        <ul class="ul">
                            <li class="li">agora !</li>
                            <li class="li">software !</li>
                            <li class="li">tecnologia !</li>
                            <li class="li">ProCode !</li>
                        </ul>
                    </div>
                </div>
             </div>
        </section>

        <!-- seção que fala sobre a emrpesa -->
        <section class="segundo_full">
            <div class="content">
                <div id="esquerda">
                    <div class="titulo" id="quemSomos">
                        <u>
                            QUEM SOMOS?
                        </u>
                    </div>
                    <div id="texto_fazemos">
                        <p class="pula1">
                            A ProCode, uma StartUp no ramo de desenvolvimento de software, foi idealizada por um
                            grupo de quatro amigos, que são apaixonados por tecnologia.
                        </p>
                        <p class="pula1">
                            O sonho de trabalhar com o que gostam, os levaram se especializarem na área de
                            desenvolvimento de softwares, mas há um tempo atrás não tinham pretensão do que estava
                            por vir. Até que se conheceram em um evento de tecnologia, mantiveram contato e
                            idealizaram um sonho de serem reconhecidos no mercado, mas não como funcionário e sim
                            como empresários.
                        </p>
                        <p class="pula1">
                            Fundada no ano de 2018, esta empresa tem por finalidade ser umas das melhores na área
                            de desenvolvimento, trabalhando com soluções para as plataformas Web, Mobile(Android)
                            e Desktop. Com a intenção potencializar pequenos negócios no mercado de trabalho, a
                            empresa começou a ficar conhecida no mundo digital.
                        </p>
                    </div>
                </div>
                <div id="direita">
                    <div id="imagem">
                        <img src="imagens/foto.jpg">
                    </div>
                </div>
            </div>
            <div class="missao_visao_valores">
                <div class="icones_informacoes">
                    <div class="titulo">
                        Missão
                    </div>
                    <div class="texto_informacoes">
                        Desenvolver softwares para pequenos negócios, contribuindo com o crescimento
                        das empresas, através da potencialização de seu negócio dando mais visibilidade
                        ao cliente no mundo digital.
                    </div>
                </div>
                <div class="icones_informacoes">
                    <div class="titulo">
                        Visão
                    </div>
                    <div class="texto_informacoes">
                        Ser reconhecida como uma das melhores desenvolvedoras de softwares no mundo tecnológico.
                    </div>
                </div>
                <div class="icones_informacoes">
                    <div class="titulo">
                        Valores
                    </div>
                    <div class="texto_informacoes">
                        <ul>
                            <li>
                                Soluções de qualidade;
                            </li>
                            <li>
                                Satisfazer nossos cliente;
                            </li>
                            <li>
                                Qualidade de vida;
                            </li>
                            <li>
                                Ética e respeito;
                            </li>
                            <li>
                                Preocupação com o sucesso do cliente.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- div transparente que faz efeito do background -->
        <div class="full" id="fundo2"></div>

        <!-- seção que fala das soluções -->
        <section class="segundo_full" id="solucoes">
            <div class="content">
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
        </section>

        <!-- div transparente que faz efeito do background -->
        <div class="full"></div>

        <!-- sseção que fala de nossos produtos -->
        <section class="segundo_full" id="portifolio">
            <div class="content">
                <div class="titulo">
                    <u>
                        Portifólio
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
        </section>
        <!-- rodapé do site -->
        <footer>
            © COPYRIGHT 2018 - ProCode LTDA, TODOS OS DIREITOS RESERVADOS.
        </footer>
    </body>
</html>
