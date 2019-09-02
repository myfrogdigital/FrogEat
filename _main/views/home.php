<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frog Eat - Sistema Completo para Restaurantes</title>
    <!-- Base -->
    <base href="http://www.frogeat.ml/">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aladin&display=swap" rel="stylesheet">
    <!-- CSS Master -->
    <link rel="stylesheet" href="_main/assets/css/master.css">
    <!-- Fonte Awesome -->
    <script src="https://kit.fontawesome.com/95360ffae9.js"></script>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <h1 class="logo"><span>frog</span>digital.</h1>

        <div class="inner">
            <h2>Frog Eat</h2>
            <h3>Sistema Completo para Restaurantes e Lanchonetes</h3>
        </div>
    </header>
    
    <!-- Conteúdo -->
    <main>
        <section class="summary">
            <div class="left">
                <h2>Mostre a seus clientes o seu restaurante</h2>

                <div class="list">
                    <p><i class="far fa-check-circle"></i> Painel de Administração Completo</p>
                    <p><i class="far fa-check-circle"></i> Design Limpo e Moderno</p>
                    <p><i class="far fa-check-circle"></i> Interação com Google Maps</p>
                    <p><i class="far fa-check-circle"></i> 7 Dias de Suporte Técnico</p>
                    <p><i class="far fa-check-circle"></i> SEO Otimizado</p>
                    <p><i class="far fa-check-circle"></i> Responsivo</p>
                </div>
            </div>

            <div class="right">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wjXGoBzb2Ms" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <?php
                    if(isset($local[1])) {
                        if($local[1] == 'h') {
                            echo '<a href="https://pay.hotmart.com/A14691024K">Eu Quero!</a>';
                        }elseif($local[1] == 'm') {
                            echo '<a href="#">Eu Quero!</a>';
                        }elseif($local[1] == 'e') {
                            echo '<a href="https://sun.eduzz.com/248224">Eu Quero!</a>';
                        }
                    }else {
                        echo '<a href="https://pay.hotmart.com/A14691024K">Eu Quero!</a>';
                    }
                ?>
            </div>
        </section>

        <section class="details">
            <div class="detail-left">
                <img src="_main/assets/img/img1.jpg" alt="Página Principal">

                <div class="inner">
                    <h2>Página Principal</h2>
                    <p>- Menu Fixo com icones sociais</p>
                    <p>- Blocos Destaques, Galeria, Sobre e Contato</p>
                    <p>- Rodapé com Funcionamento, Telefone e Endereço</p>
                </div>
            </div>

            <div class="detail-right">
                <img src="_main/assets/img/img2.jpg" alt="Página Cardápio">

                <div class="inner">
                    <h2>Página Cardápio</h2>
                    <p>- Menu Superior com as categorias</p>
                    <p>- Visualização em Grade dos pratos</p>
                    <p>- Título, descrição e preço em cada prato</p>
                </div>
            </div>

            <div class="detail-left">
                <img src="_main/assets/img/img3.jpg" alt="Página de Administração">

                <div class="inner">
                    <h2>Página de Administração</h2>
                    <p>- Gerenciar Produtos, Destaques e Categorias</p>
                    <p>- Gerenciar fotos da Galeria</p>
                    <p>- Gerenciar Formulários de Contato</p>
                    <p>- Alterar informações detalhadas do site</p>
                </div>
            </div>
        </section>

        <section class="buy-button">
            <div class="inner">
                <h2>De <span>R$249,00</span> Por apenas <span><strong>R$199,00</strong></span></h2>
                <?php
                    if(isset($local[1])) {
                        if($local[1] == 'h') {
                            echo '<a class="btn" href="https://pay.hotmart.com/A14691024K">Eu Quero!</a>';
                        }elseif($local[1] == 'm') {
                            echo '<a class="btn" href="#">Eu Quero!</a>';
                        }elseif($local[1] == 'e') {
                            echo '<a class="btn" href="https://sun.eduzz.com/248224">Eu Quero!</a>';
                        }
                    }else {
                        echo '<a class="btn" href="https://pay.hotmart.com/A14691024K">Eu Quero!</a>';
                    }
                ?>
            </div>
        </section>

        <section class="questions">
            <h2 class="title">Perguntas Frequentes</h2>

            <div class="question">
                <span>01.</span>
                <div class="text">
                    <h2>Vou ter supote depois da compra?</h2>
                    <p>Sim, damos todo o suporte que precisar, instruções de como usar todo o sistema e quaisquer personalização que precisar.</p>
                </div>
            </div>

            <div class="question">
                <span>02.</span>
                <div class="text">
                    <h2>Quanto tempo é o período de suporte?</h2>
                    <p>O suporte está disponivel durante 7 dias após a compra.</p>
                </div>
            </div>

            <div class="question">
                <span>03.</span>
                <div class="text">
                    <h2>O site é adaptado para celulares?</h2>
                    <p>Sim, é adaptado para celulares e tablets.</p>
                </div>
            </div>

            <div class="question">
                <span>04.</span>
                <div class="text">
                    <h2>Quais mudanças posso fazer pelo painel de administração?</h2>
                    <p>Praticamente tudo, desde o título do site, descrição, logotipo, até o título e subtítulo dos blocos da página principal.</p>
                </div>
            </div>

            <div class="question">
                <span>05.</span>
                <div class="text">
                    <h2>O site aparecerá nas buscas do google e bing?</h2>
                    <p>Sim, utilizamos as melhores técnicas de SEO para obter o melhor rankeamento nos buscadores.</p>
                </div>
            </div>

            <div class="question">
                <span>06.</span>
                <div class="text">
                    <h2>O preço da hospedagem e domínio está incluso no preço do produto?</h2>
                    <p>Não, a hospedagem e o domínio fica por conta do comprador. Caso queira, nós damos suporte na contratação do serviço de hospedagem.</p>
                </div>
            </div>
        </section>

        <section class="buy-button">
            <div class="inner">
                <h2>De <span>R$249,00</span> Por apenas <span><strong>R$199,00</strong></span></h2>
                <?php
                    if(isset($local[1])) {
                        if($local[1] == 'h') {
                            echo '<a class="btn" href="https://pay.hotmart.com/A14691024K">Eu Quero!</a>';
                        }elseif($local[1] == 'm') {
                            echo '<a class="btn" href="#">Eu Quero!</a>';
                        }elseif($local[1] == 'e') {
                            echo '<a class="btn" href="https://sun.eduzz.com/248224">Eu Quero!</a>';
                        }
                    }else {
                        echo '<a class="btn" href="https://pay.hotmart.com/A14691024K">Eu Quero!</a>';
                    }
                ?>
            </div>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>Frog Eat - Um produto Frog Digital. &copycopyright 2019 All rights reserved.</p>
    </footer>
</body>
</html>