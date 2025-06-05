<?php
session_start();
if (!isset($_SESSION['nm_usuario'])) {
    header('Location: cadastro.php'); // Se não estiver logado, manda pra login
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - <span id="videoTitle"></span></title>
    <link rel="stylesheet" href="css/aulas-video.css?v=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <nav class="navbar px-5 ">

        <div class="logo">
            EDUCA REVOLUTION
        </div>

        <button aria-controls="navigation" aria-expanded="false" class="mobile-toggle">

            <i class="fa-solid fa-bars"></i>


            <span class="sr-only">
                Menu
            </span>

        </button>


        <ul aria-expanded="false" id="navigation" class="nav-links mx-4">

            <img aria-hidden="true" class="nav-logo" src="imagens/nav-logo.png">

            <li class="mobile-spacing"><a href="home.php" class="nav-item">HOME</a></li>
            <li class="mobile-spacing"><a href="aulas.php" class="nav-item">AULAS</a></li>
            <li class="mobile-spacing"><a href="menu.php" class="nav-item">MENU</a></li>
            <li class="mobile-spacing"><a href="perfil.php" class="nav-item special">PERFIL</a></li>
            <li class="mobile-spacing"><a href="premium.php" class="nav-item premium">PLANOS</a></li>

        </ul>


    </nav>

    <!--esta div é o fundo preto que aparece quando abre-se o menu do MOBILE. -->
    <div class="nav-overlay"></div>

    <main class="video-container">

        <div class="video-sizing">
            <div class="video-responsive">
                <video style="border-radius: 2rem; border: white 2px solid;" controls>
                    <source src="imagens/placeholder-video.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="video__title">

            <h2 id="videoTitle">RODA GIGANTE MARAVILHOSA</h2>

            <div class="title__div">
                <button class="video__btn"><i class="fa-solid fa-list" style="color: #ffffff;"></i></button>
                <button class="video__btn"><i class="fa-solid fa-download" style="color: #ffffff;"></i></button>
            </div>

        </div>

        <div class="video-description">

            <p class="general-text-size">Este vídeo mostra uma roda gigante incrível e linda uma verdadeira obra da engenharia moderna, mas você
                sabia que a primeira roda gigante foi inventada e construída pelo engenheiro George Washington Gale
                Ferris Jr. em 1893 para a Exposição Mundial Colombiana em Chicago, EUA. Essa roda, muitas vezes chamada
                de Roda de Chicago, era um marco da engenharia da época e se tornou símbolo de diversão e atração
                turística. </p>

        </div>

    </main>


    <!-- ESTA É A PARTE DO RESUMO DO VÍDEO, O plano para você que está lendo é o seguinte
        será feito um JAVASCRIPT, ou uma estrutura em PHP para ser guardada, onde gerará um conteúdo
        PERSONALIZADO para cada vídeo.
        
        Use este html que eu fiz como base para construir a estrutura, vou deixar explicado as classes do 
        meu CSS que fiz aqui para o resumo:

        page-content:

        -------------------------------------------------------------------------------------------------

        É uma GRADE, ela é RESPONSIVA, quando a resolução diminuir até certo ponto, a grid vai ficar assim:

        ELEMENTO ELEMENTO <------- GRADE COM RESOLUÇÃO DE PX ALTA

        ELEMENTO
                        <--------- GRADE COM RESOLUÇÃO BAIXA
        ELEMENTO

        -------------------------------------------------------------------------------------------------

        
        page__resume:

        -------------------------------------------------------------------------------------------------

        É a caixa preta que envolve todos os elementos o padding é responsável pela margem dentro do elemento
        (com margen, digo a distância do texto até a borda da caixa preta)

        -------------------------------------------------------------------------------------------------


        -->

    <div class="page-content">

        <section class="page__resume">

            <h4 style="text-align: center;">Resumo de "&lt;nomedovideo&gt;</h4>

            <img class="resume__image" src="imagens/placeholder.png">
    
            <div class="resume__subject">
<p class="general-text-size">
    
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique corporis ab soluta autem sed debitis eaque, hic atque perspiciatis harum voluptas, fuga iure deleniti placeat necessitatibus adipisci, dolores ea vitae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quidem deserunt omnis, autem quae id excepturi iusto magni incidunt, velit consequuntur ea corporis, aperiam non mollitia natus aspernatur impedit distinctio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque modi adipisci ab animi nobis vel, illo, obcaecati asperiores odio ipsa velit beatae, tenetur sapiente totam impedit accusamus soluta rem maxime? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores voluptate illo quam quo quia amet libero, ipsum deserunt iste natus laborum quisquam facilis corrupti dolore eaque debitis fugit dicta eos! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium enim recusandae deleniti ratione consectetur et, at, dolores unde doloremque perspiciatis voluptates cum tempore. Cupiditate nam consectetur maiores nihil fugit? Nobis!
</p>

            </div>


        </section>

        <aside class="page__recomended">
            
            <h3 class="recomended__title">Veja Mais</h3>


            <div class="recomended__link">

                <div class="link__border">

                    <img class="link__image" src="imagens/placeholder.png">
                    
                    
                </div>
                
                <h4>Como Fazer pesquisas no Google</h4>

            </div>


            <div class="recomended__link">

                <div class="link__border">

                    <img class="link__image" src="imagens/placeholder.png">

                </div>

                <h4>Formatação de arquivos Word</h4>

            </div>


            <div class="recomended__link">

                <div class="link__border">

                    <img class="link__image" src="imagens/placeholder.png">
                
                </div>

                <h4>Apresentações PowerPoint</h4>

            </div>

        </aside>
    </div>

    <!-- Rodape -->
    <footer class="text-white"> <!-- Caixa Roxa - Container -->


        <address class="m-0"> <!-- Tag para endereços e contatos, usada para enquadramento -->

            <div class="d-flex flex-row">

                <!-- Icone do instagram -->
                <div class="d-flex align-items-center flex-column alignment-icons">

                    <a href="#" class="d-flex align-items-center flex-column link-icons">
                        <img class="icon" src="imagens/instagram-icone.png">
                        <p class="text-white fw-bold" style="font-size: 1,23em;">@educa_revolution</p>
                    </a>

                </div>

                <!-- Icone do Twitter -->
                <div class="d-flex align-items-center flex-column alignment-icons">

                    <a href="#" class="d-flex align-items-center flex-column link-icons">
                        <img class="icon x" src="imagens/twitter-icone.png">
                        <p class="text-white fw-bold" style="font-size: 1,23rem;">@Ed_Revolution</p>
                    </a>

                </div>

                <!-- Icone do LinkedIn -->
                <div class="d-flex align-items-center flex-column alignment-icons">
                    <a href="#" class="d-flex align-items-center flex-column link-icons">

                        <img class="icon" src="imagens/linkedin-icone.png">
                        <p class="text-white fw-bold" style="font-size: 1,23rem;">@EducaR_Oficial</p>

                    </a>
                </div>

            </div>

            <!-- Eleentos da direita -->
            <div class="d-flex flex-row">

                <!--Sessão Ajuda-->
                <div class="d-flex flex-column alignment text-nowrap">
                    <p style="margin: 1.5%;" class="text-outline text-white">Ajuda</p>
                    <a style="margin: 1.5%;" class="link" href="#">Serviço de Atendimento</a>
                    <a style="margin: 1.5%;" class="link" href="#">Cadastrar Conta</a>
                    <a style="margin: 1.5%;" class="link" href="#">Download de Vídeos</a>
                </div>

                <!-- Sessão Contato -->
                <div class="d-flex flex-column alignment text-nowrap">
                    <p style="margin: 1.5%;" class="text-outline text-white">Contato</p>
                    <p style="margin: 1.5%;" class="fw-bold">EducaRe350@gmail.com</p>
                    <p style="margin: 1.5%;">+55 (13) 98162-7452</p>
                    <p style="margin: 1.5%;">Av. Antonio Victor Lopes, 320</p>
                </div>

            </div>


        </address>

    </footer>








    <script src="js/aulas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>