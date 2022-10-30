const selectedStyle = `
  border: 0.313rem dashed #07ff07;
  box-shadow: none;
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
  var tamanho = document.getElementById("seletor-tabuleiro").value;
  localStorage.setItem("tamanho", tamanho);
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