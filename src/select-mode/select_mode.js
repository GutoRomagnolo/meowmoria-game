const selectedStyle = `
  background-color: white;
  filter: invert(100%);
  box-shadow: -0.125rem 0 0 0 white, 0.125rem 0 0 0 white, 0 -0.125rem 0 0 white,
  0 0.125rem 0 0 white;
  border: 0.063rem solid white;
`;

let game_mode = '';

const selectStandardMode = () => {
  document.getElementById('card-classico').style.cssText = selectedStyle;
  document.getElementById('card-tempo').style = null;
  game_mode = 'standard';
}

const selectAgainstTimeMode = () => {
  document.getElementById('card-tempo').style.cssText = selectedStyle;
  document.getElementById('card-classico').style = null;
  game_mode = 'against_time';
}

const startGame = () => {
  let boardSize = document.getElementById("seletor-tabuleiro").value;
  localStorage.setItem("boardSize", boardSize);

  if (game_mode == 'standard') {
    window.open("./../standard-mode/standard_mode.html", "_self")
  } else if (game_mode == 'against_time') {
    window.open("./../against-time-mode/against_time_mode.html", "_self")
  }
  else {
    document.getElementById('erro').style.visibility = 'visible';
  }
}