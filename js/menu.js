function loadContent(section) {
    const content = document.getElementById('content');
    if (section === 'usuario') {
        content.innerHTML = `
            <h2>Configuração de Usuário</h2>
            <p>Aqui você pode alterar os detalhes da sua conta.</p>

        `;
    } else if (section === 'plano') {
        content.innerHTML = `
            <h2>Acesso e Segurança</h2>
            <p>Aqui você pode alterar as configurações de segurança e acesso.</p>
        `;
    } else if (section === 'download') {
        content.innerHTML = `
            <h2>Histórico de downloads</h2>
            <p>Aqui você pode gerenciar suas notificações.</p>
        `;
    } else if (section === 'haulas'){
        content.innerHTML = `
             <h2>Historico de aulas</h2>
            <p>Aqui você pode gerenciar suas notificações.</p>
        `;
    } else if (section === 'servico'){
        content.innerHTML = `
             <h2>Serviços</h2>
            <p>Aqui você pode gerenciar suas notificações.</p>
        `;
    } else if (section === 'sobsite'){
        content.innerHTML = `
             <h2>Sobre o site</h2>
            <p>Aqui você pode gerenciar suas notificações.</p>
        `;
    } else if (section === 'suporte'){
        content.innerHTML = `
         <h2>Suporte</h2>
        <p>Veja nossos links de suporte </p>
        `;
    }
}