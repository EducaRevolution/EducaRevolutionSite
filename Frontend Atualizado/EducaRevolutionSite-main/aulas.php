<<<<<<< HEAD
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
    <title>Aulas</title>
    <link rel="stylesheet" href="css/aulas.css?v=1.10">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <!-- barra de navegação do site -->
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

            <span class="sr-only">BARRA DE NAVEGAÇÃO</span>

            <li class="mobile-spacing"><a href="home.php" class="nav-item">HOME</a></li>
            <li class="mobile-spacing"><a href="aulas.php" class="nav-item">AULAS</a></li>
            <li class="mobile-spacing"><a href="menu.php" class="nav-item">MENU</a></li>
            <li class="mobile-spacing"><a href="perfil.php" class="nav-item special">PERFIL</a></li>
            <li class="mobile-spacing"><a href="premium.php" class="nav-item premium">PLANOS</a></li>

        </ul>


    </nav>

    <!--esta div é o fundo preto que aparece quando abre-se o menu do MOBILE. -->
    <div class="nav-overlay"></div>


    <main>

        <article class="container">
            <div class="container__text">
                <h3>Olá <span>
                        <?php echo htmlspecialchars($_SESSION['nm_usuario']); ?>
                    </span> Bem-vindo a área de aulas</h1>
                    <p>Bem vindo a área de aulas onde irá aprender sobre as coisas básicas da tecnologia com uso de
                        imagens e videos autorais e feitos por nossa equipe de desenvolvedores. </p>
                    <div class="lado">
                        <div onclick="startReading()" class="audio-player"><img class="audio-player__image"
                                src="imagens/megaphone-icone.png"></div>
                        <div onclick="stopReading()" class="audio-player"><img class="audio-player__image" src="">X
                        </div>
                    </div>
            </div>
        </article>


        <h1 class="main__title">Aulas que você pode querer</h1>

        <div class="search-container">

            <div class="main__search">

                <input type="text" class="search__input" placeholder="Digite aqui o que deseja achar">
                <button class="btn__input-search"><img class="input__image" src="imagens/lupa-icone.png"></button>
            </div>

            <button class="btn__input-talk"><img class="input__image" src="imagens/microfone-icone.png"></button>

        </div>



        <div class="aulas">



            <div class="aulas__grid">

                <img class="grid__img" src="imagens/placeholder.png" onclick="window.location.href='aulas-video.html'">

                <h5 class="grid__title" onclick="window.location.href='aulas-video.html'">Titulo de Exemplo</h5>

                <div class="grid__text" onclick="window.location.href='aulas-video.html'">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam,
                    totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora
                    eius eum earum.

                </div>

                <div class="grid__buttons">

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>

                    <a class="buttons__anchor yellow-star-btn">
                        <img class="buttons__icon-white-star" src="imagens/estrela-icone.png">
                        <img class="buttons__icon-yellow-star" src="imagens/estrela-icone-on.png">
                    </a>

                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img" src="imagens/placeholder.png" onclick="window.location.href='aulas-video.html'">

                <h5 class="grid__title" onclick="window.location.href='aulas-video.html'">Titulo de Exemplo</h5>

                <div class="grid__text" onclick="window.location.href='aulas-video.html'">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam,
                    totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora
                    eius eum earum.

                </div>

                <div class="grid__buttons">

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>

                    <a class="buttons__anchor yellow-star-btn">
                        <img class="buttons__icon-white-star" src="imagens/estrela-icone.png">
                        <img class="buttons__icon-yellow-star" src="imagens/estrela-icone-on.png">
                    </a>

                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img" src="imagens/placeholder.png" onclick="window.location.href='aulas-video.html'">

                <h5 class="grid__title" onclick="window.location.href='aulas-video.html'">Titulo de Exemplo</h5>

                <div class="grid__text" onclick="window.location.href='aulas-video.html'">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam,
                    totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora
                    eius eum earum.

                </div>

                <div class="grid__buttons">

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>

                    <a class="buttons__anchor yellow-star-btn">
                        <img class="buttons__icon-white-star" src="imagens/estrela-icone.png">
                        <img class="buttons__icon-yellow-star" src="imagens/estrela-icone-on.png">
                    </a>

                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img" src="imagens/placeholder.png" onclick="window.location.href='aulas-video.html'">

                <h5 class="grid__title" onclick="window.location.href='aulas-video.html'">Titulo de Exemplo</h5>

                <div class="grid__text" onclick="window.location.href='aulas-video.html'">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam,
                    totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora
                    eius eum earum.

                </div>

                <div class="grid__buttons">

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>

                    <a class="buttons__anchor yellow-star-btn">
                        <img class="buttons__icon-white-star" src="imagens/estrela-icone.png">
                        <img class="buttons__icon-yellow-star" src="imagens/estrela-icone-on.png">
                    </a>

                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img" src="imagens/placeholder.png" onclick="window.location.href='aulas-video.html'">

                <h5 class="grid__title" onclick="window.location.href='aulas-video.html'">Titulo de Exemplo</h5>

                <div class="grid__text" onclick="window.location.href='aulas-video.html'">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam,
                    totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora
                    eius eum earum.

                </div>

                <div class="grid__buttons">

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>

                    <a class="buttons__anchor yellow-star-btn">
                        <img class="buttons__icon-white-star" src="imagens/estrela-icone.png">
                        <img class="buttons__icon-yellow-star" src="imagens/estrela-icone-on.png">
                    </a>

                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img" src="imagens/placeholder.png" onclick="window.location.href='aulas-video.html'">

                <h5 class="grid__title" onclick="window.location.href='aulas-video.html'">Titulo de Exemplo</h5>

                <div class="grid__text" onclick="window.location.href='aulas-video.html'">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam,
                    totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora
                    eius eum earum.

                </div>

                <div class="grid__buttons">

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>

                    <a class="buttons__anchor yellow-star-btn">
                        <img class="buttons__icon-white-star" src="imagens/estrela-icone.png">
                        <img class="buttons__icon-yellow-star" src="imagens/estrela-icone-on.png">
                    </a>

                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img" src="imagens/placeholder.png" onclick="window.location.href='aulas-video.html'">

                <h5 class="grid__title" onclick="window.location.href='aulas-video.html'">Titulo de Exemplo</h5>

                <div class="grid__text" onclick="window.location.href='aulas-video.html'">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam,
                    totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora
                    eius eum earum.

                </div>

                <div class="grid__buttons">

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>

                    <a class="buttons__anchor yellow-star-btn">
                        <img class="buttons__icon-white-star" src="imagens/estrela-icone.png">
                        <img class="buttons__icon-yellow-star" src="imagens/estrela-icone-on.png">
                    </a>

                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img" src="imagens/placeholder.png" onclick="window.location.href='aulas-video.html'">

                <h5 class="grid__title" onclick="window.location.href='aulas-video.html'">Titulo de Exemplo</h5>

                <div class="grid__text" onclick="window.location.href='aulas-video.html'">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam,
                    totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora
                    eius eum earum.

                </div>

                <div class="grid__buttons">

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>

                    <a class="buttons__anchor yellow-star-btn">
                        <img class="buttons__icon-white-star" src="imagens/estrela-icone.png">
                        <img class="buttons__icon-yellow-star" src="imagens/estrela-icone-on.png">
                    </a>

                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img" src="imagens/placeholder.png" onclick="window.location.href='aulas-video.html'">

                <h5 class="grid__title" onclick="window.location.href='aulas-video.html'">Titulo de Exemplo</h5>

                <div class="grid__text" onclick="window.location.href='aulas-video.html'">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam,
                    totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora
                    eius eum earum.

                </div>

                <div class="grid__buttons">

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>

                    <a class="buttons__anchor yellow-star-btn">
                        <img class="buttons__icon-white-star" src="imagens/estrela-icone.png">
                        <img class="buttons__icon-yellow-star" src="imagens/estrela-icone-on.png">
                    </a>

                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img" src="imagens/placeholder.png" onclick="window.location.href='aulas-video.html'">

                <h5 class="grid__title" onclick="window.location.href='aulas-video.html'">Titulo de Exemplo</h5>

                <div class="grid__text" onclick="window.location.href='aulas-video.html'">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam,
                    totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora
                    eius eum earum.

                </div>

                <div class="grid__buttons">

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>

                    <a class="buttons__anchor yellow-star-btn">
                        <img class="buttons__icon-white-star" src="imagens/estrela-icone.png">
                        <img class="buttons__icon-yellow-star" src="imagens/estrela-icone-on.png">
                    </a>

                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img" src="imagens/placeholder.png" onclick="window.location.href='aulas-video.html'">

                <h5 class="grid__title" onclick="window.location.href='aulas-video.html'">Titulo de Exemplo</h5>

                <div class="grid__text" onclick="window.location.href='aulas-video.html'">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam,
                    totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora
                    eius eum earum.

                </div>

                <div class="grid__buttons">

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>

                    <a class="buttons__anchor yellow-star-btn">
                        <img class="buttons__icon-white-star" src="imagens/estrela-icone.png">
                        <img class="buttons__icon-yellow-star" src="imagens/estrela-icone-on.png">
                    </a>

                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img" src="imagens/placeholder.png" onclick="window.location.href='aulas-video.html'">

                <h5 class="grid__title" onclick="window.location.href='aulas-video.html'">Titulo de Exemplo</h5>

                <div class="grid__text" onclick="window.location.href='aulas-video.html'">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam,
                    totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora
                    eius eum earum.

                </div>

                <div class="grid__buttons">

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>

                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>

                    <a class="buttons__anchor yellow-star-btn">
                        <img class="buttons__icon-white-star" src="imagens/estrela-icone.png">
                        <img class="buttons__icon-yellow-star" src="imagens/estrela-icone-on.png">
                    </a>

                </div>

            </div>


    </main>

    <input type="range" id="rate-control" min="0.1" max="2" step="0.1" value="1" style="display: none;">
    <span id="rate-value" style="display: none;">1</span>


    <style>
        .highlight {
            background-color: rgb(112, 67, 185);
        }
    </style>

    <script>
        const synth = window.speechSynthesis;
        let utterance;
        let allWordSpans = [];

        function prepararTexto() {
            allWordSpans = [];
            const elementos = document.querySelectorAll('h1, h2, h3, p, a, label, div.titulo_Videos1, div.titulo_Recomendados1, div.grid__text');
            elementos.forEach(el => {
                const textoOriginal = el.innerText.trim();
                if (textoOriginal !== '') {
                    const palavras = textoOriginal.split(/\s+/);
                    el.innerHTML = ''; // limpa o conteúdo
                    palavras.forEach((palavra, idx) => {
                        const span = document.createElement('span');
                        span.textContent = palavra + ' ';
                        el.appendChild(span);
                        allWordSpans.push(span);
                    });
                }
            });
        }

        function startReading() {
            stopReading(); // para leitura atual
            prepararTexto(); // divide o texto em spans

            const textoCompleto = allWordSpans.map(span => span.textContent).join('').trim();
            const rate = parseFloat(document.getElementById('rate-control').value);
            document.getElementById('rate-value').textContent = rate;

            utterance = new SpeechSynthesisUtterance(textoCompleto);
            utterance.rate = rate;

            utterance.onboundary = function (event) {
                if (event.name === 'word') {
                    highlightByCharIndex(event.charIndex);
                }
            };

            utterance.onend = function () {
                clearHighlights();
            };

            synth.speak(utterance);
        }

        function stopReading() {
            if (synth.speaking) {
                synth.cancel();
                clearHighlights();
            }
        }

        function highlightByCharIndex(charIndex) {
            clearHighlights();

            let count = 0;
            for (const span of allWordSpans) {
                const len = span.textContent.length;
                if (charIndex < count + len) {
                    span.classList.add('highlight');
                    break;
                }
                count += len;
            }
        }

        function clearHighlights() {
            allWordSpans.forEach(span => {
                span.classList.remove('highlight');
            });
        }

        window.onload = () => {
            speechSynthesis.onvoiceschanged = () => {
                speechSynthesis.getVoices();
            };
        };
    </script>


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

    <script src="js/aulas.js?v1.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
=======
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
    <title>Aulas</title>
    <link rel="stylesheet" href="css/aulas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <!-- barra de navegação do site -->
    <nav class="navbar px-5 ">

        <div class="logo">
            EDUCA REVOLUTION
        </div>

        <ul class="nav-links mx-4">

            <li><a href="home.php" class="nav-item">HOME</a></li>
            <li><a href="aulas.php" class="nav-item special">AULAS</a></li>
            <li><a href="menu.php" class="nav-item">MENU</a></li>
            <li><a href="perfil.php" class="nav-item">PERFIL</a></li>
            <li><a href="premium.php" class="nav-item premium">PLANOS</a></li>

        </ul>

    </nav>
    <!-- fim -->


    <main>
        
        <article class="container">
            <div class="container__text">
                <h1>Olá <span id="user_id"><?php echo htmlspecialchars($_SESSION['nm_usuario']); ?></span> <br>Bem-vindo a área de aulas</h1>
                <p>Bem vindo a área de aulas onde irá aprender sobre as coisas básicas da tecnologia com uso de imagens e videos autorais e feitos por nossa equipe de desenvolvedores. </p>
                <div class="lado">
                <div onclick="startReading()" class="audio-player"><img class="audio-player__image" src="imagens/megaphone-icone.png"></div>
                <div onclick="stopReading()" class="audio-player"><img class="audio-player__image" src="">X</div>
                </div>
            </div>
        </article>

        
        <h1 class="main__title">Aulas que você pode querer</h1>
        
        <div class="search-container">
            
        <div class="main__search">

            <input type="text" class="search__input" placeholder="Digite aqui o que deseja achar">
            <button class="btn__input-search"><img class="input__image" src="imagens/lupa-icone.png"></button>    
        </div>

        <button class="btn__input-talk"><img class="input__image" src="imagens/microfone-icone.png"></button>


        </div>



        <div class="aulas">
            <div class="aulas__grid">

                <img class="grid__img"src="imagens/placeholder.png">

                <h5 class="grid__title">Titulo de Exemplo</h5>

                <div class="grid__text">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam, totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora eius eum earum.
                
                </div>  

                <div class="grid__buttons">
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>
                    <a class="buttons__anchor yellow-star-btn"><img class="buttons__icon-white-star"src="imagens/estrela-icone.png"><img class="buttons__icon-yellow-star"src="imagens/estrela-icone-on.png"></a>
                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img"src="imagens/placeholder.png">

                <h5 class="grid__title">Titulo de Exemplo</h5>

                <div class="grid__text">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam, totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora eius eum earum.
                
                </div>  

                <div class="grid__buttons">
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>
                    <a class="buttons__anchor yellow-star-btn"><img class="buttons__icon-white-star"src="imagens/estrela-icone.png"><img class="buttons__icon-yellow-star"src="imagens/estrela-icone-on.png"></a>
                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img"src="imagens/placeholder.png">

                <h5 class="grid__title">Titulo de Exemplo</h5>

                <div class="grid__text">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam, totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora eius eum earum.

                </div>  

                <div class="grid__buttons">
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>
                    <a class="buttons__anchor yellow-star-btn"><img class="buttons__icon-white-star"src="imagens/estrela-icone.png"><img class="buttons__icon-yellow-star"src="imagens/estrela-icone-on.png"></a>
                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img"src="imagens/placeholder.png">

                <h5 class="grid__title">Titulo de Exemplo</h5>

                <div class="grid__text">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam, totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora eius eum earum.

                </div>  

                <div class="grid__buttons">
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>
                    <a class="buttons__anchor yellow-star-btn"><img class="buttons__icon-white-star"src="imagens/estrela-icone.png"><img class="buttons__icon-yellow-star"src="imagens/estrela-icone-on.png"></a>
                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img"src="imagens/placeholder.png">

                <h5 class="grid__title">Titulo de Exemplo</h5>

                <div class="grid__text">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam, totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora eius eum earum.

                </div>  

                <div class="grid__buttons">
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>
                    <a class="buttons__anchor yellow-star-btn"><img class="buttons__icon-white-star"src="imagens/estrela-icone.png"><img class="buttons__icon-yellow-star"src="imagens/estrela-icone-on.png"></a>
                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img"src="imagens/placeholder.png">

                <h5 class="grid__title">Titulo de Exemplo</h5>

                <div class="grid__text">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam, totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora eius eum earum.

                </div>  

                <div class="grid__buttons">
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>
                    <a class="buttons__anchor yellow-star-btn"><img class="buttons__icon-white-star"src="imagens/estrela-icone.png"><img class="buttons__icon-yellow-star"src="imagens/estrela-icone-on.png"></a>
                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img"src="imagens/placeholder.png">

                <h5 class="grid__title">Titulo de Exemplo</h5>

                <div class="grid__text">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam, totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora eius eum earum.

                </div>  

                <div class="grid__buttons">
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>
                    <a class="buttons__anchor yellow-star-btn"><img class="buttons__icon-white-star"src="imagens/estrela-icone.png"><img class="buttons__icon-yellow-star"src="imagens/estrela-icone-on.png"></a>
                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img"src="imagens/placeholder.png">

                <h5 class="grid__title">Titulo de Exemplo</h5>

                <div class="grid__text">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam, totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora eius eum earum.
                    
                </div>  

                <div class="grid__buttons">
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>
                    <a class="buttons__anchor yellow-star-btn"><img class="buttons__icon-white-star"src="imagens/estrela-icone.png"><img class="buttons__icon-yellow-star"src="imagens/estrela-icone-on.png"></a>
                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img"src="imagens/placeholder.png">

                <h5 class="grid__title">Titulo de Exemplo</h5>

                <div class="grid__text">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam, totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora eius eum earum.

                </div>  

                <div class="grid__buttons">
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>
                    <a class="buttons__anchor yellow-star-btn"><img class="buttons__icon-white-star"src="imagens/estrela-icone.png"><img class="buttons__icon-yellow-star"src="imagens/estrela-icone-on.png"></a>
                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img"src="imagens/placeholder.png">

                <h5 class="grid__title">Titulo de Exemplo</h5>

                <div class="grid__text">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam, totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora eius eum earum.

                </div>  

                <div class="grid__buttons">
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>
                    <a class="buttons__anchor yellow-star-btn"><img class="buttons__icon-white-star"src="imagens/estrela-icone.png"><img class="buttons__icon-yellow-star"src="imagens/estrela-icone-on.png"></a>
                </div>

            </div>

            <div class="aulas__grid">

                <img class="grid__img"src="imagens/placeholder.png">

                <h5 class="grid__title">Titulo de Exemplo</h5>

                <div class="grid__text">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam, totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora eius eum earum.

                </div>  

                <div class="grid__buttons">
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>
                    <a class="buttons__anchor yellow-star-btn"><img class="buttons__icon-white-star"src="imagens/estrela-icone.png"><img class="buttons__icon-yellow-star"src="imagens/estrela-icone-on.png"></a>
                </div>

            </div>

            <div class="aulas__grid">
                <img class="grid__img"src="imagens/placeholder.png">
                
                <h5 class="grid__title">Titulo de Exemplo</h5>

                <div class="grid__text">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reiciendis soluta quo veniam, totam ipsum deserunt molestiae accusantium neque illo maxime officiis eos non natus aut tempora eius eum earum.

                </div>  

                <div class="grid__buttons">
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/megaphone-icone.png"></a>
                    <a class="buttons__anchor"><img class="buttons__icon" src="imagens/download-icon.png"></a>
                    <a class="buttons__anchor yellow-star-btn"><img class="buttons__icon-white-star"src="imagens/estrela-icone.png"><img class="buttons__icon-yellow-star"src="imagens/estrela-icone-on.png"></a>
                </div>

            </div>

        </div>


    </main>

    <input type="range" id="rate-control" min="0.1" max="2" step="0.1" value="1" style="display: none;">
    <span id="rate-value" style="display: none;">1</span>
    
    
    <style>
      .highlight {
        background-color: rgb(112, 67, 185);
      }
    </style>
    
    <script>
    const synth = window.speechSynthesis;
    let utterance;
    let allWordSpans = [];
    
    function prepararTexto() {
      allWordSpans = [];
      const elementos = document.querySelectorAll('h1, h2, h3, p, a, label, div.titulo_Videos1, div.titulo_Recomendados1, div.grid__text');
      elementos.forEach(el => {
        const textoOriginal = el.innerText.trim();
        if (textoOriginal !== '') {
          const palavras = textoOriginal.split(/\s+/);
          el.innerHTML = ''; // limpa o conteúdo
          palavras.forEach((palavra, idx) => {
            const span = document.createElement('span');
            span.textContent = palavra + ' ';
            el.appendChild(span);
            allWordSpans.push(span);
          });
        }
      });
    }
    
    function startReading() {
      stopReading(); // para leitura atual
      prepararTexto(); // divide o texto em spans
    
      const textoCompleto = allWordSpans.map(span => span.textContent).join('').trim();
      const rate = parseFloat(document.getElementById('rate-control').value);
      document.getElementById('rate-value').textContent = rate;
    
      utterance = new SpeechSynthesisUtterance(textoCompleto);
      utterance.rate = rate;
    
      utterance.onboundary = function(event) {
        if (event.name === 'word') {
          highlightByCharIndex(event.charIndex);
        }
      };
    
      utterance.onend = function() {
        clearHighlights();
      };
    
      synth.speak(utterance);
    }
    
    function stopReading() {
      if (synth.speaking) {
        synth.cancel();
        clearHighlights();
      }
    }
    
    function highlightByCharIndex(charIndex) {
      clearHighlights();
    
      let count = 0;
      for (const span of allWordSpans) {
        const len = span.textContent.length;
        if (charIndex < count + len) {
          span.classList.add('highlight');
          break;
        }
        count += len;
      }
    }
    
    function clearHighlights() {
      allWordSpans.forEach(span => {
        span.classList.remove('highlight');
      });
    }
    
    window.onload = () => {
      speechSynthesis.onvoiceschanged = () => {
        speechSynthesis.getVoices();
      };
    };
    </script>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
>>>>>>> feature
