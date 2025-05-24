// Função que será chamada ao mudar o plano
function mostrarRecursos() {
    const planoSelecionado = document.getElementById("plano").value;
    const descricao = document.getElementById("descricao");
    const divRecursos = document.getElementById("recursos");

    if (planoSelecionado === "basico") {
        descricao.innerHTML = 
          descricao.innerHTML = "✅ Acesso limitado a conteúdos<br>✅ Suporte básico<br>✅ Feedbacks de conteudos<br>✅ Demonstração de cursos mais avançados (apenas visualização)";
    } else if (planoSelecionado === "premium") {
        descricao.innerHTML = descricao.innerHTML = "🔥 Acesso ilimitado a conteúdos<br>🔥 Sem anuncios<br>🔥 Atendimento prioritário<br>🔥 Acesso ao fórum da comunidade <br>🔥 Downloads disponíveis<br>";
    } else {
        divRecursos.style.display = "none";
        return;
    }

    divRecursos.style.display = "block";
}

function loadContent(section) {
    const content = document.getElementById('content');
    if (section === 'usuario') {
        content.innerHTML = `
             <style>
        .container {
            max-width: 600px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Configurações de Usuário</h1>

        <!-- Parte 1: Dados Pessoais -->
        <div class="section">
            <h2>Dados Pessoais</h2>
            <form>
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome">

                <label for="data-nascimento">Data de Nascimento:</label>
                <input type="date" id="data-nascimento" name="data-nascimento">

                </select>
            </form>
        </div>

        <!-- Parte 2: Preferências de Conta -->
        <div class="section">
            <h2>Preferências de Conta</h2>
            <form>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email">

                <label for="senha">Alterar Senha:</label>
                <input type="password" id="senha" name="senha">
            </form>
        </div>

        <!-- Parte 5: Configurações Específicas do Site -->
        <div class="section">
            <h2>Configurações Específicas do Site</h2>
            <form>
                <label for="plano">Plano de Assinatura:</label>
                <select id="plano" name="plano">
                    <option value="basico">Básico</option>
                    <option value="premium">Premium</option>
                    <option value="vip">VIP</option>
                </select>
            </form>
        </div>

        <button type="submit">Salvar Configurações</button>
    </div>
        `;
    } else if (section === 'plano') {
        content.innerHTML = `
             <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 700px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .section {
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input,
        select,
        button {
           
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        
.buttonLP {
    --bezier: cubic-bezier(0.22, 0.61, 0.36, 1);
    --edge-light: hsla(0, 0%, 50%, 0.8);
    --text-light: rgba(255, 255, 255, 0.4);
    --back-color: 240, 40%;
  
    cursor: pointer;
    padding: 0.7em 1em;
    border-radius: 0.5em;
    min-height: 2.4em;
    min-width: 3em;
    display: flex;
    align-items: center;
    gap: 0.5em;
  
    font-size: 18px;
    letter-spacing: 0.05em;
    line-height: 1;
    font-weight: bold;
  
    background: linear-gradient(
      140deg,
      hsla(var(--back-color), 50%, 1) min(2em, 20%),
      hsla(var(--back-color), 50%, 0.6) min(8em, 100%)
    );
    color: hsla(0, 0%, 90%);
    border: 0;
    box-shadow: inset 0.4px 1px 4px var(--edge-light);
  
    transition: all 0.1s var(--bezier);
  }
  
  .buttonLP:hover {
    --edge-light: hsla(0, 0%, 50%, 1);
    text-shadow: 0px 0px 10px var(--text-light);
    box-shadow: inset 0.4px 1px 4px var(--edge-light),
      2px 4px 8px hsla(0, 0%, 0%, 0.295);
    transform: scale(1.1);
  }
  
  .button:active {
    --text-light: rgba(255, 255, 255, 1);
  
    background: linear-gradient(
      140deg,
      hsla(var(--back-color), 50%, 1) min(2em, 20%),
      hsla(var(--back-color), 50%, 0.6) min(8em, 100%)
    );
    box-shadow: inset 0.4px 1px 8px var(--edge-light),
      0px 0px 8px hsla(var(--back-color), 50%, 0.6);
    text-shadow: 0px 0px 20px var(--text-light);
    color: hsla(0, 0%, 100%, 1);
    letter-spacing: 0.1em;
    transform: scale(1);
  }
    </style>
</head>
<body>
    <div class="container">
        <h1>Configurações de Planos</h1>

        <!-- Parte 1: Descrição do Plano -->
        <div class="section">
            <h2>Descrição do Plano</h2>
            <form>
                <label for="plano">Nome do Plano:</label>
                <select id="plano" onchange="mostrarRecursos()">
                    <option value="">Selecione...</option>
                    <option value="basico">Básico</option>
                    <option value="premium">Premium</option>
                </select>

            <div id="recursos">
            <h2>Recursos do Plano</h2>
            <p id="descricao"></p>
            </div>

            </form>
        </div>

        <!-- Parte 2: Preço e Pagamento -->
        <div class="section">
            <h2>Preço e Pagamento</h2>
            <form>
                <label for="preco">Preço do Plano:</label>
                <input type="text" id="preco" name="preco" placeholder="Ex.: R$ 29,90/mês">

                <label for="pagamento">Opção de Pagamento:</label>
                <select id="pagamento" name="pagamento">
                    <option value="cartao">Cartão de Crédito</option>
                    <option value="boleto">Boleto Bancário</option>
                    <option value="paypal">PayPal</option>
                </select>
            </form>
        </div>

        <!-- Parte 3: Status do Plano -->
        <div class="section">
            <h2>Status do Plano</h2>
            <form>
                <label for="plano-ativo">Plano Ativo:</label>
                <input type="text" id="plano-ativo" name="plano-ativo" placeholder="Ex.: Premium" disabled>

                <label for="validade">Data de Validade:</label>
                <input type="date" id="validade" name="validade">
            </form>
        </div>

        <!-- Parte 6: Gerenciamento de Planos -->
        <div class="section">
            <h2>Gerenciamento de Planos</h2>
            <form>
                <label for="renovacao">Renovação Automática:</label>
                <select id="renovacao" name="renovacao">
                    <option value="ativada">Ativada</option>
                    <option value="desativada">Desativada</option>
                </select>

                <button type="button">Cancelar Plano</button>
            </form>
        </div>
    </div>
</body>
        `;
        const planoSelect = document.getElementById("plano");
    planoSelect.addEventListener("change", mostrarRecursos);
    
    } else if (section === 'download') {
        content.innerHTML = `
            <h2>Histórico de downloads</h2>
            <p>Aqui você pode gerenciar suas notificações.</p>
        `;
    } else if (section === 'haulas') {
        content.innerHTML = `
             <h2>Historico de aulas</h2>
            <p>Aqui você pode gerenciar suas notificações.</p>
        `;
    } else if (section === 'servico') {
        content.innerHTML = `
              <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        h2 {
            color: #555;
            margin-top: 20px;
        }
        p {
            margin-bottom: 15px;
            text-align: justify;
        }
        .highlight {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Termos de Uso e Serviço</h1>

        <!-- Introdução -->
        <div class="section">
            <h2>1. Introdução</h2>
            <p>
                Bem-vindo à nossa plataforma! Ao acessar ou utilizar nossos serviços, você concorda em cumprir os Termos de Uso e Serviço descritos neste documento. Recomendamos que leia atentamente antes de prosseguir. Caso não concorde com os termos, interrompa o uso do site imediatamente.
            </p>
        </div>

        <!-- Propriedade Intelectual -->
        <div class="section">
            <h2>2. Propriedade Intelectual</h2>
            <p>
                Todo o conteúdo presente neste site, incluindo textos, imagens, gráficos, logotipos e outros materiais, é protegido por leis de propriedade intelectual e pertence exclusivamente ao nosso projeto. É proibido copiar, reproduzir ou distribuir qualquer conteúdo sem autorização prévia por escrito.
            </p>
        </div>

        <!-- Responsabilidades do Usuário -->
        <div class="section">
            <h2>3. Responsabilidades do Usuário</h2>
            <p>
             usuário concorda em fornecer informações precisas ao criar uma conta, manter os dados atualizados e proteger a confidencialidade da senha e suas informações. Qualquer atividade realizada por meio da conta será de responsabilidade do titular, incluindo uso indevido ou não autorizado.
            </p>
        </div>

        <!-- Política de Privacidade -->
        <div class="section">
            <h2>4. Política de Privacidade</h2>
            <p>
               Os dados pessoais coletados, como nome, e-mail e data de nascimento, são utilizados para aprimorar nossos serviços e garantir uma experiência personalizada. 
            </p>
        </div>

        <!-- Isenção de Responsabilidade -->
        <div class="section">
            <h2>5. Isenção de Responsabilidade</h2>
            <p>
              Embora nos esforcemos para oferecer um serviço de alta qualidade, não garantimos sua disponibilidade contínua ou livre de erros. Não somos responsáveis por danos resultantes do uso inadequado da plataforma ou por ações de terceiros.
            </p>
        </div>

        <!-- Planos e Pagamentos -->
        <div class="section">
            <h2>6. Planos e Pagamentos</h2>
            <p>
                Os preços e condições dos planos estão disponíveis na página 'Planos'. O cancelamento pode ser solicitado a qualquer momento, sendo os reembolsos analisados conforme a política vigente. Para suporte adicional, entre em contato conosco.
            </p>
        </div>

        <!-- Rescisão de Uso -->
        <div class="section">
            <h2>7. Rescisão de Uso</h2>
            <p>
                Nos reservamos o direito de suspender ou encerrar contas que violem os Termos de Uso, a nosso exclusivo critério. O uso indevido da plataforma poderá acarretar na suspensão permanente do acesso.
            </p>
        </div>

        <!-- Alterações nos Termos -->
        <div class="section">
            <h2>8. Alterações nos Termos</h2>
            <p>
                Podemos atualizar os Termos de Uso periodicamente para refletir mudanças em nossos serviços ou regulamentações. Caso isso ocorra, notificaremos os usuários.
            </p>
        </div>

        <!-- Informações de Contato -->
        <div class="section">
            <h2>9. Informações de Contato</h2>
            <p>
                Caso tenha dúvidas sobre estes Termos de Uso, entre em contato conosco através do e-mail: EducaRe350@gmail.com ou telefone: +(13) 98162-7452.
            </p>
        </div>
    </div>
</body>
        `;
    } else if (section === 'sobsite') {
        content.innerHTML = `
             <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre o Site</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        h2 {
            color: #555;
            margin-top: 20px;
        }
        p {
            text-align: justify;
            margin-bottom: 15px;
        }
        .highlight {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sobre o Site</h1>

        <!-- Missão e Objetivo -->
        <div class="section">
            <h2>1. Missão e Objetivo</h2>
            <p>
                Nosso site tem como missão facilitar o acesso a informações e serviços que tornam a vida mais simples e eficiente. Com foco em inovação, buscamos oferecer uma plataforma intuitiva e acessível para nossos usuários.
            </p>
        </div>

        <!-- História -->
        <div class="section">
            <h2>2. História</h2>
            <p>
                Fundado em [2024], o site nasceu da paixão por criar um espaço digital que conectasse ainda mais pessoas com tecnologia.Estamos nos dedicando para atender às necessidades dos usuários com tecnologia e trazendo um suporte confiável para todas as pessoas.
            </p>
        </div>

        <!-- Público-Alvo -->
        <div class="section">
            <h2>3. Público-Alvo</h2>
            <p>
                Criado para atender pessoas com mais necessidade tecnológica como idosos,analfabetos,deficientes e pessoas com pouco conhecimento tecnológico, nosso site é perfeito para quem busca conteúdos de qualidade e ferramentas práticas. Independentemente do nível do saber da pessoa ou idade, aqui você encontrará o que precisa.
            </p>
        </div>

        <!-- Diferenciais -->
        <div class="section">
            <h2>4. Diferenciais</h2>
            <p>
                Somos únicos em oferecer:
                <ul>
                    <li>Design intuitivo e amigável.</li>
                    <li>Suporte ao cliente dedicado.</li>
                    <li>Conteúdos atualizados e confiáveis.</li>
                </ul>
            </p>
        </div>

        <!-- Valores -->
        <div class="section">
            <h2>5. Valores</h2>
            <p>
                Nosso site é guiado pelos princípios de transparência, qualidade e inclusão. Cada decisão é tomada pensando na experiência do usuário e no impacto positivo que podemos causar.
            </p>
        </div>

        <!-- Equipe -->
        <div class="section">
            <h2>6. Equipe</h2>
            <p>
                Contamos com uma equipe formada por 3 estudantes de Desenvolvimento de Sistemas com muita vontade para fazer esse projeto dar certo.Nossos esforços iram garantir a melhor experiênica para você.
            </p>
        </div>

        <!-- Contato -->
        <div class="section">
            <h2>7. Contato</h2>
            <p>
                Estamos aqui para ajudar! Entre em contato conosco pelo e-mail:EducaRe350@gmail.com ou pelo telefone: +(13) 98162-7452. Sua opinião é sempre bem-vinda.
            </p>
        </div>
    </div>
</body>
        `;
    } else if (section === 'suporte') {
        content.innerHTML = `
         <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre o Site</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        h2 {
            color: #555;
            margin-top: 20px;
        }
        p {
            text-align: justify;
            margin-bottom: 15px;
        }
        .highlight {
            font-weight: bold;
        }
    </style>
</head>
<body>
        <h1>Nossos Canais de Suporte</h1>
        <h2><i class="fa-solid fa-envelope"></i>Email</h2>
        <p>EducaRe350@gmail.com</p>
        <h2><i class="fa-solid fa-phone"></i>Telefone</h2>
        <p>+(13) 98162-7452</p>
</body>
        `;
    }
}