
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
    <title>Home Educa Revolution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css?v=<? time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
   <!-- barra de navegação do site -->
   <nav class="navbar px-5 ">

        <div class="logo"> EDUCA REVOLUTION </div>
    
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

    <!-- Conteudo da pagina -->
    <main>

        <div class="container1">
            <!-- Parte das boas-vindas -->
            <div class="container2">
            <h1 class="text-white">Olá, <?php echo htmlspecialchars($_SESSION['nm_usuario']); ?>. Seja Bem-Vindo!</h1>
                
                <p>
                    Estamos entusiasmados em tê-lo conosco. Nosso objetivo é proporcionar uma experiência de aprendizado
                    inovadora e transformadora. Aqui, você encontrará uma variedade de recursos e cursos projetados para impulsionar seus conhecimentos e habilidades.
                </p>
                
                <!-- BOTÃO DE CADASTRO COMENTADO, REVISAR O USO FUTURO DESTE BOTÃO -->

                <!-- <a href="cadastro.php" class="botaocadastrar">Cadastrar</a> -->

                <!-- BOTÃO DE CADASTRO COMENTADO, REVISAR O USO FUTURO DESTE BOTÃO -->


                <div class="lado">
                <div onclick="startReading()" class="audio-player"><img class="audio-player__image" src="imagens/megaphone-icone.png"></div>
                <div onclick="stopReading()" class="audio-player"><img class="audio-player__image" src="">X</div>
            </div>
            </div>
        </div>



        <!-- Parte dos vídeos -->

        <!-- Vídeos a esquerda -->
        <section class="section-grid">

            <div class="videos_1">

                <div class="titulo_Videos1">Ultimos Videos Postados</div>

                <div class="video-item">

                    <img class="video__img" src="imagens/pesquisasExatas.png" alt="Pesquisas Exatas">
                    <h3>Pesquisas Exatas</h3>
                </div>

                <div class="video-item">
                    <img class="video__img" src="imagens/conexoesdiarias.jpg" alt="Conteúdos Diários">
                    <h3>Conexões Diárias</h3>
                </div>

                <div class="video-item">
                    <img class="video__img" src="imagens/cotidianomelhor.jpg" alt="Cotidiano Melhor">
                    <h3>Cotidiano Melhor</h3>
                </div>

                <nav class="pagination">
                    <a href="#"><i class="fa-sharp fa-solid fa-left-long"></i></a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#"><i class="fa-sharp fa-solid fa-right-long"></i></a>
                </nav>

            </div>

            <!-- Parte dos vídeos -->

            <!---->
            <!---->
            <!---->

            <!-- Recomendados a direita -->

            <div class="recomendados">

                <h2 class="titulo_Recomendados1">Recomendados</h2>

                <!-- Parte do insta -->

                <div class="recomendado_itens">

                    <img src="imagens/instagram.png" alt="Instagram">

                    <div class="content">

                        <h3>Instagram</h3>

                        <p>Auxiliando a criar uma conta pessoal
                            ou administrando contas empresariais.
                        </p>

                        <div class="audio-btn1"></div>

                    </div>

                </div>

                <!-- Parte da nunbank -->

                <div class="recomendado_itens">
                    <img src="imagens/parte_nunbank.jpg" alt="Nubank">
                    <div class="content">
                        <h3>Nunbank - rendimento</h3>
                        <p>Explicação de como usar o rendimento do nunbank
                            e gestanciar seu dinheiro.
                        </p>

                        <div class="audio-btn2"></div>
                    </div>
                </div>

                <!-- parte do Power Pointer -->

                <div class="recomendado_itens">
                    <img src="imagens/powerpoint_picons.png" alt="Power Pointer">
                    <div class="content">
                        <h3>Powerpointer - planejar</h3>
                        <p>Ensinando a como planejar e moldar
                            uma apresentação do zero.
                        </p>
                        <div class="audio-btn3"></div>
                    </div>
                </div>

                <!-- parte do Ifood -->

                <div class="recomendado_itens">
                    <img src="imagens/ifood.jpg" alt="Ifood - Comida e lucro">
                    <div class="content">
                        <h3>Ifood - Comida e lucro</h3>
                        <p>Rendimento somente com esse app,entenda
                            como funciona sua interface e lucre em casa.
                        </p>
                        <div class="audio-btn1"></div>
                    </div>
                </div>

            </div>

        </section>

        <!-- Parte da introdução dos planos -->

        <div class="wrapper">

            <h2 class="aproveite_assinatura">Aproveite ainda mais o futuro da tecnologia com nossa Assinatura Premium! 🚀</h2>

            <div class="netflix-section">
                <div class="feature">
                    <h3 class="titulo_secao">Materiais Exclusivos</h3>
                    <p class="texto_dentrodasecao">Tenha mais formas de aprender e outros recursos exclusivos que você não encontrará em nenhum outro lugar.</p>
                    <i class="fa-solid fa-crown custom-icon" style="color:white"></i>
                </div>

                <div class="feature">
                    <h3 class="titulo_secao">Suporte personalizado</h3>
                    <p class="texto_dentrodasecao">Tenha acesso direto aos nossos especialistas para tirar dúvidas e receber orientações específicas.</p>
                    <i class="fa-solid fa-headset custom-icon1" style="color:white"></i>
                </div>

                <div class="feature">
                    <h3 class="titulo_secao">Comunidade Premium</h3>
                    <p class="texto_dentrodasecao">Conect-se com outros assinantes premium,compartilhe experiências e colabore em projetos inovadores.</p>
                    <i class="fa-solid fa-comments custom-icon" style="color:white"></i>
                </div>
                <div class="feature">
                    <h3 class="titulo_secao">Sem anúncios</h3>
                    <p class="texto_dentrodasecao">Navegue livremente pela nossa plataforma,sem se preocupar com propagandas ou interrupções.</p>
                    <i class="fa-regular fa-circle-xmark custom-icon2" style="color:white"></i>
                </div>
            </div>
        </div>

        <!-- perguntas frequentes -->
        <div class="faq-section">
            <h2>Perguntas Frequentes</h2>
            <div class="faq-item">
                <button class="faq-question">
                    O que é EducaRevolution? <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>EducaRevolution é um site inclusivo dedicado a ensinar o uso de tecnologias no dia a dia,O
                        objetivo é proporcionar um aprendizado acessível e prático para todos, incluindo crianças,
                        jovens, idosos e pessoas com deficiência (PCDs). A plataforma oferece uma variedade de recursos
                        e tutoriais que ajudam os usuários a se familiarizarem com diferentes tecnologias, promovendo a
                        inclusão digital e a autonomia no uso de dispositivos e ferramentas tecnológicas.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    O que irei aprender ? <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>No EducaRevolution, você poderá aprender uma variedade de habilidades tecnológicas adaptadas ao
                        seu nível de experiência e necessidade. Aqui estão alguns exemplos do que você pode aprender:
                        tecnologias básicas,internet e segurança,aplicativos essenciais,tecnologias assistivas e ferra
                        mentas de produtividade.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    Quanto custa ? <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>O EducaRevolution oferece uma versão gratuita com algumas limitações, mas que ainda permite acesso a diversos conteúdos e recursos.
                        Para aqueles que desejam uma experiência mais completa, há a versão premium, que custa R$ 12,90 por mês.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    Esse site é para mim ? <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Se você está interessado em aprender e se familiarizar com diferentes
                        tecnologias de maneira acessível e prática, então o EducaRevolution pode ser uma ótima opção para você.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    Como faço para cancelar ? <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Para cancelar a sua assinatura premium no EducaRevolution, siga estas etapas:

                        1° Faça login no site com sua conta.

                        2° Acesse a seção de configurações da conta ou perfil.

                        3° Procure pela opção de assinatura ou pagamento.

                        4° Selecione a opção para cancelar a assinatura.

                        5° Siga as instruções fornecidas para confirmar o cancelamento.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">
                    Esqueci minha senha? <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Se você esqueceu sua senha no EducaRevolution, siga estas etapas para redefini-la:

                        1° Vá para a página de login do EducaRevolution.

                        2° Clique na opção "Esqueci minha senha" ou "Redefinir senha".

                        3° Digite o endereço de e-mail associado à sua conta.

                        4° Você receberá um e-mail com um link para redefinir sua senha.

                        5° Siga o link no e-mail e crie uma nova senha.</p>
                </div>
            </div>

        </div>

        
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
  const elementos = document.querySelectorAll('h1, h2, h3, p, a, label, div.titulo_Videos1, div.titulo_Recomendados1');
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="js/home.js?v1.0"></script>
</body>
</html>