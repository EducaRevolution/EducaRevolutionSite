<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium</title>
    <link rel="stylesheet" href="css/premium.css?v=<?= time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

   <!-- barra de navegação do site -->
   <nav class="navbar px-5">


    <div class="logo">
        EDUCA REVOLUTION
    </div>

    <ul class="nav-links mx-4">

            <li class="mobile-spacing"><a href="home.php" class="nav-item">Página principal</a></li>
            <li class="mobile-spacing"><a href="aulas.php" class="nav-item">Vídeoaulas</a></li>
            <li class="mobile-spacing"><a href="menu.php" class="nav-item">Opções</a></li>
            <li class="mobile-spacing"><a href="perfil.php" class="nav-item">Meu Espaço</a></li>
            <li class="mobile-spacing"><a href="premium.php" class="nav-item special">Planos</a></li>

    </ul>


</nav>


<section class="sec_titulo">
    <h1>Planos</h1>
    <div class="lado">
        <div onclick="startReading()" class="audio-player"><img class="audio-player__image" src="imagens/megaphone-icone.png"></div>
        <div onclick="stopReading()" class="audio-player"><img class="audio-player__image" src="">X</div>
    </div>
</section>

<section class="tabela-planos">
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Gratuito</th>
                <th class="col-premium">
                    <div class="titulo-premium">Premium</div>
                    <div class="preco">R$ 12,00/mês</div><br>
                    <a href="#" class="btn-assinar">Assinar</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Atendimento prioritário no fórum e suporte</td>
                <td class="nao">✗</td>
                <td class="sim">✓</td>
            </tr>
            <tr>
                <td>Download ilimitado</td>
                <td>Máximo de 5 downloads</td>
                <td class="sim">✓</td>
            </tr>
            <tr>
                <td>Mensagens ilimitadas no fórum</td>
                <td>Máximo de 3 mensagens</td>
                <td class="sim">✓</td>
            </tr>
            <tr>
                <td>Sem Anúncios</td>
                <td class="nao">✗</td>
                <td class="sim">✓</td>
            </tr>
            <tr>
                <td>Vídeos exclusivos</td>
                <td class="nao">✗</td>
                <td class="sim">✓</td>
            </tr>
        </tbody>
    </table>
</section>

<BR></BR>




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
  const elementos = document.querySelectorAll('h1, h2, h3, p, a, label, div.titulo_Videos1, div.titulo_Recomendados1,th,td');
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
</body>
</html>
