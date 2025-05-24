<?php
session_start();
include("conexao.php");
date_default_timezone_set('America/Sao_Paulo');

$id_usuario = $_SESSION['id_usuario'];

// 1. Soma das sessões finalizadas
$stmt = $conexao->prepare("
    SELECT SUM(TIMESTAMPDIFF(SECOND, inicio_sessao, fim_sessao)) AS tempo_finalizado
    FROM tb_sessoes
    WHERE id_usuario = ? AND fim_sessao IS NOT NULL
");
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$tempo_finalizado = $row['tempo_finalizado'] ?? 0;

// 2. Sessão atual (em andamento)
$stmt = $conexao->prepare("
    SELECT inicio_sessao
    FROM tb_sessoes
    WHERE id_usuario = ? AND fim_sessao IS NULL
    ORDER BY id_sessao DESC LIMIT 1
");
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    $inicio = strtotime($row['inicio_sessao']);
    $tempo_atual = time() - $inicio;
} else {
    $tempo_atual = 0;
}

$tempoTotal = $tempo_finalizado + $tempo_atual;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/perfil.css">
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

            <li class="mobile-spacing"><a href="home.php" class="nav-item">HOME</a></li>
            <li class="mobile-spacing"><a href="aulas.php" class="nav-item">AULAS</a></li>
            <li class="mobile-spacing"><a href="menu.php" class="nav-item">MENU</a></li>
            <li class="mobile-spacing"><a href="perfil.php" class="nav-item special">PERFIL</a></li>
            <li class="mobile-spacing"><a href="premium.php" class="nav-item premium">PLANOS</a></li>

        </ul>

    </nav>


    <!--esta div é o fundo preto que aparece quando abre-se o menu do MOBILE. -->
    <div class="nav-overlay"></div>


    <!-- seção com foto, nome e plano do usuário -->
    <section class="areafoto">
        <img class="icone" src="imagens/user.png" alt="ícone de usuário">
        <div class="texto">
            <?php echo htmlspecialchars($_SESSION['nm_usuario']); ?>
        </div>
        <div class="tipo-plano">
            tipo plano
        </div>
    </section>
    <!-- seção dos dados de tempo, atividade, aulas e downloads do usuário -->
    <section class="user_data">
        <div class="data_grid">
            <div class="taad">
                <h3>Tempo de <br> plataforma</h3>
                    <p id="tempo-container" data-tempo="<?= $tempoTotal ?>">
                        <span id="horas">00</span> Horas
                        <span id="minutos">00</span> Min
                        <span id="segundos">00</span> Seg
                    </p>
            </div>
            
            <div class="taad">
                <h3>Vídeos <br> assistidos</h3>
                <p><span>10</span></p>
            </div>
            <div class="taad">
                <h3>Download de <br> vídeos</h3>
                <p><span>4</span></p>
            </div>
        </div>
    </section>

    <!-- seção dos videos assitidos recentemente -->
    <section class="assistidos">
        <div class="titulo1">
            Vídeos Assistidos Recentemente
        </div>

        <div class="video-container">
            <div class="video__grid">

                <div class="videos__border">
                    <div class="videos">
                        <img src="imagens/icone_video.png" alt="video do bloco">
                        <div class="titulo_video">
                            Titulo video
                        </div>
                    </div>
                </div>

                <div class="videos__border">
                    <div class="videos">
                        <img src="imagens/icone_video.png" alt="video do bloco">
                        <div class="titulo_video">
                            Titulo video
                        </div>
                    </div>
                </div>

                <div class="videos__border">
                    <div class="videos">
                        <img src="imagens/icone_video.png" alt="video do bloco">
                        <div class="titulo_video">
                            Titulo video
                        </div>
                    </div>
                </div>

                <div class="videos__border">
                    <div class="videos">
                        <img src="imagens/icone_video.png" alt="video do bloco">
                        <div class="titulo_video">
                            Titulo video
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- seção da playlist -->
    <section class="playlists">

        <div class="titulo_playlist">
            Playlists
        </div>

        <div class="playlists__container">
            <div class="videos__border">
                <div class="videos">
                    <img src="imagens/icone_video.png" alt="video do bloco">
                    <div class="titulo_video">
                        Playlist - Download
                    </div>
                </div>
            </div>

            <div class="videos__border">
                <div class="videos">
                    <img src="imagens/icone_video.png" alt="video do bloco">
                    <div class="titulo_video">
                        Playlist - Mais Usados
                    </div>
                </div>
            </div>

            <div class="videos__border">
                <div class="videos">
                    <img src="imagens/icone_video.png" alt="video do bloco">
                    <div class="titulo_video">
                        Playlist - Mais Usados
                    </div>
                </div>
            </div>

            <div class="videos__border">
                <div class="videos">
                    <img src="imagens/adicionar.png" alt="botão adicionar">
                    <div class="titulo_video">
                        Criar Playlist
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- área de configurações e saida de conta -->
    <section class="cl">
        <button class="con_sair">
            <img class="icones" src="imagens/configuracao.png" alt="botão de configuração">
            <h2>Configurações</h2>
        </button>
        <a href="logout.php" class="con_sair">
        <!-- <a class="con_sair"> -->
            <img class="icones" src="imagens/sair.png" alt="botão de saída">
            <h2>Sair</h2>
        </a>

    </section>

    <script>
const tempoInicial = parseInt(document.getElementById('tempo-container').dataset.tempo);
let tempoAtual = tempoInicial;

function atualizarTempo() {
    const horas = Math.floor(tempoAtual / 3600);
    const minutos = Math.floor((tempoAtual % 3600) / 60);
    const segundos = tempoAtual % 60;

    document.getElementById('horas').textContent = String(horas).padStart(2, '0');
    document.getElementById('minutos').textContent = String(minutos).padStart(2, '0');
    document.getElementById('segundos').textContent = String(segundos).padStart(2, '0');

    tempoAtual++;
}

setInterval(atualizarTempo, 1000);
atualizarTempo();


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


    <script src="js/perfil.js"></script>

</body>

</html>