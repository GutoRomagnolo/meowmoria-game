const selectedStyle = `
  background-color: white;
  filter: invert(100%);
  box-shadow: -0.125rem 0 0 0 white, 0.125rem 0 0 0 white, 0 -0.125rem 0 0 white,
  0 0.125rem 0 0 white;
  border: 0.063rem solid white;
`;

var modo_jogo = '';

function selectClassico() {
  document.getElementById('card-classico').style.cssText = selectedStyle;
  document.getElementById('card-tempo').style = null;
  modo_jogo = 'classico';
}

function selectTempo() {
  document.getElementById('card-tempo').style.cssText = selectedStyle;
  document.getElementById('card-classico').style = null;
  modo_jogo = 'contra_tempo';
}

function jogar() {
  var tamanhoTabuleiro = document.getElementById("seletor-tabuleiro").value;
  localStorage.setItem("tamanho", tamanhoTabuleiro);
  if (modo_jogo == 'classico') {
    window.open("./../JogoPadrão/jogo_padrao.html", "_self")
  }
  else if (modo_jogo == 'contra_tempo') {
    window.open("./../JogoContraTempo/jogo_contra_tempo.html", "_self")
  }
  else {
    document.getElementById('erro').style.visibility = 'visible';
  }
}