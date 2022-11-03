function ExibirJanelaAviso(tipo) {
    const configuracoes = {
        derrota: {
        imagem: "../assets/Imagens/fail.svg",
        mensagem: "Ops, nao foi dessa vez!",
        },
        vitoria: {
        imagem: "../assets/Imagens/trophy.svg",
        mensagem: "Parabéns, você ganhou!",
        }
    };

    const selecionado = configuracoes[tipo];

    document.body.innerHTML += `
        <div class="modal-aviso-fundo">
            <div class="modal-aviso-janela">
                <img src="${selecionado.imagem}" alt="${selecionado.mensagem}" class="modal-aviso-icone">
                <div style="margin: 1rem 0;">${selecionado.mensagem}</div>
                <div class="modal-aviso-botoes">
                <input class="botao-padrao botao-sair" type="submit" value="Sair" onclick="RemoverJanelaAviso();">
                <input class="botao-padrao botao-jogar" type="submit" value="Jogar novamente">
                </div>
            </div>
        </div>
    `;
}

function RemoverJanelaAviso() {
    document.querySelector('.modal-aviso-fundo').remove();
}