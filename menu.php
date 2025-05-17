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
    <title>Menu</title>
    <link rel="stylesheet" href="css/menu.css?v=1.10">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        
        <li class="mobile-spacing"><a href="home.php" class="nav-item">HOME</a></li>
        <li class="mobile-spacing"><a href="aulas.php" class="nav-item">AULAS</a></li>
        <li class="mobile-spacing"><a href="#" class="nav-item">MENU</a></li>
        <li class="mobile-spacing"><a href="perfil.php" class="nav-item special">PERFIL</a></li>
        <li class="mobile-spacing"><a href="premium.php" class="nav-item premium">PLANOS</a></li>
        
    </ul>
    
    
</nav>

<!--esta div é o fundo preto que aparece quando abre-se o menu do MOBILE. -->
<div class="nav-overlay"></div>


    <!-- Parte do menu -->
    
    <div class="containerMenu">
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="#" onclick="loadContent('usuario')">Configuração de Usuário </a></li>
            <li><a href="#" onclick="loadContent('plano')">Configuração de Planos </a></li>
            <li><a href="#" onclick="loadContent('download')">Historico de download </a></li>
            <li><a href="#" onclick="loadContent('haulas')">Historico de aulas </a></li>
            <li><a href="#" onclick="loadContent('servico')">Termos de uso e serviço </a></li>
            <li><a href="#" onclick="loadContent('sobsite')">Sobre o site </a></li>
            <li><a href="#" onclick="loadContent('suporte')">Suporte </a></li> 
        </ul>
    </div>
    <div class="content" id="content">
        <h2>Bem-vindo às Configurações</h2>
        <p>Selecione uma opção no menu para visualizar mais detalhes.</p>
    </div>
</div>


    
    <div style="display: flex; gap: 10px; align-items: center;">
        <button class="buttonLP" onclick="startReading()">
          <svg
            viewBox="0 0 16 16"
            class="bi bi-lightning-charge-fill"
            fill="currentColor"
            height="13"
            width="1"
            xmlns="http://www.w3.org/2000/svg"
          >
            </path></svg>
          🔊 Ler a Página
        </button>
      
        <button class="buttonLP" onclick="stopReading()">
          <svg
            viewBox="0 0 16 15"
            class="bi bi-lightning-charge-fill"
            fill="currentColor"
            height="13"
            width="1"
            xmlns="http://www.w3.org/2000/svg"
          >
            </path></svg>
          🛑 Parar Leitura
        </button>
    </div>
      
    
    <br>
    
    
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
    
    

      <!-- Rodape -->


<footer class="text-white"> <!-- Caixa Roxa - Container -->


    <address> <!-- Tag para endereços e contatos, usada para enquadramento -->
    
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
<script src="js/menu.js?v1.01"></script> 
</body>
</html>
