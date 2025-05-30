<?php
session_start();
if (!isset($_SESSION['nm_usuario'])) {
  header('Location: cadastro.php'); // Se não estiver logado, manda pra login
  exit();
}
?>

<!-- está parte faz os videos irem para a pagina -->
<?php
include("conexao.php");
include("pesquisa.php");


// Consulta os dados das aulas
$query = "SELECT id_video, nm_titulo, ds_descricao, video_drive_id FROM tb_videos";
$result = mysqli_query($conexao, $query);

$aulas = [];

if ($result && mysqli_num_rows($result) > 0) {
    $aulas = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo "Nenhuma aula encontrada.";
}

$busca = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['busca'])) {
        $busca = trim($_POST['busca']);
        $stmt = mysqli_prepare($conexao, "SELECT * FROM tb_videos WHERE nm_titulo LIKE ?");
        $param = "%$busca%";
        mysqli_stmt_bind_param($stmt, "s", $param);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $aulas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        // Se nada for pesquisado
        $query = "SELECT * FROM tb_videos";
        $result = mysqli_query($conexao, $query);
        $aulas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
} else {
    // Primeira vez na página
    $query = "SELECT * FROM tb_videos";
    $result = mysqli_query($conexao, $query);
    $aulas = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aulas</title>
  <link rel="stylesheet" href="css/aulas.css?v=<?= time(); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

  <main>

    <article class="container">
      <div class="container__text">
        <h1>Olá <span id="user_id"><?php echo htmlspecialchars($_SESSION['nm_usuario']); ?></span> <br>Bem-vindo a área
          de aulas</h1>
        <p>Bem vindo a área de aulas onde irá aprender sobre as coisas básicas da tecnologia com uso de imagens e videos
          autorais e feitos por nossa equipe de desenvolvedores. </p>
        <div class="lado">
          <div onclick="startReading()" class="audio-player"><img class="audio-player__image"
              src="imagens/megaphone-icone.png"></div>
          <div onclick="stopReading()" class="audio-player"><img class="audio-player__image" src="">X</div>
        </div>
      </div>
    </article>


    <h1 class="main__title">Aulas que você pode querer</h1>

    <div class="search-container">
      
      <form method="POST" action="">
          <input type="text" name="busca" value="<?= htmlspecialchars($busca) ?>" placeholder="Digite o título">
          <button type="submit">Buscar</button>
      </form>

      <button class="btn__input-talk"><img class="input__image" src="imagens/microfone-icone.png"></button>
    
    </div>
    
    <div class="output-container">
      <?php if (!empty($termo_limpo)): ?>
          <p>Buscando por: <strong><?= htmlspecialchars($termo_limpo) ?></strong></p>
      <?php endif; ?>
    </div>
    
    <div class="aulas">
          <?php if (!empty($aulas)): ?>
              <?php foreach ($aulas as $aula): ?>
                  <div class="aulas__grid">
                      <?php if (!empty($aula['video_drive_id'])): ?>
                          <div class="grid__video">
                              <iframe 
                                  src="https://drive.google.com/file/d/<?= htmlspecialchars($aula['video_drive_id']) ?>/preview"
                                  allowfullscreen>
                              </iframe>
                          </div>
                      <?php else: ?>
                          <p><em>Vídeo não disponível.</em></p>
                      <?php endif; ?>

                      <h5 class="grid__title"><?= htmlspecialchars($aula['nm_titulo']) ?></h5>

                      <div class="grid__text">
                          <?= nl2br(htmlspecialchars($aula['ds_descricao'])) ?>
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
              <?php endforeach; ?>
          <?php else: ?>
              <p><em>Nenhuma aula encontrada.</em></p>
          <?php endif; ?>
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

  <script src="js/aulas.js?v=<?= time(); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

    <script>
    window.onload = function () {
        const resultSection = document.querySelector('.aulas__container');
        if (resultSection) {
            resultSection.scrollIntoView({ behavior: 'smooth' });
        }
    };
</script>

</body>

</html>