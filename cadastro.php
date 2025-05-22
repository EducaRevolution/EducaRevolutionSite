<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro e Login</title>
  <link rel="stylesheet" href="css/cadastro.css?v=1.10">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a2e8f8ef8b.js" crossorigin="anonymous"></script>
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

    <br>
  <div class="container" id="container">
    <!-- Cadastro -->
    <div class="form-container sign-up-container">
      <form class="form" action="processa_cadastro.php" method="POST">
        <h1>Crie sua Conta</h1>
        <input type="text" placeholder="Nome" name="nome" required />
        <input type="email" placeholder="Email" name="email" required />
        <input type="password" placeholder="Senha" name="senha" required />
        <input type="password" placeholder="Confirme a senha" name="confirma_senha" required />
        <button type="submit">Cadastrar</button>
      </form>
    </div>
    
    <!-- Login -->
    <div class="form-container sign-in-container">
      <form class="form" method="POST" action="login.php">
        <h1>Login</h1>
        <input type="email" placeholder="Email" name="login" id="login" required />
        <input type="password" placeholder="Senha" name="senha" id="senha" required />
        <a href="#">Esqueceu sua senha?</a>
        <button type="submit">Entrar</button>
      </form>
    </div>

    <!-- Painel lateral -->
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Bem-vindo de volta!</h1>
          <p>Já tem uma conta? Faça login agora mesmo.</p>
          <button class="ghost" id="signIn">Entrar</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Olá, novo usuário!</h1>
          <p>Insira seus dados e comece sua jornada conosco.</p>
          <button class="ghost" id="signUp">Cadastrar</button>
        </div>
      </div>
    </div>
  </div>

<br>
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

<script src="js/cadastro.js?v=1.10"></script>

  

</body>
</html>
