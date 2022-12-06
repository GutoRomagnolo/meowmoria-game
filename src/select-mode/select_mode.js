const selectedStyle = `
  background-color: white;
  filter: invert(100%);
  box-shadow: -0.125rem 0 0 0 white, 0.125rem 0 0 0 white, 0 -0.125rem 0 0 white,
  0 0.125rem 0 0 white;
  border: 0.063rem solid white;
`;

let gameMode = '';

const selectStandardMode = () => {
  document.getElementById('standard-card').style.cssText = selectedStyle;
  document.getElementById('against-time-card').style = null;
  gameMode = 'standard';
}

const selectAgainstTimeMode = () => {
  document.getElementById('against-time-card').style.cssText = selectedStyle;
  document.getElementById('standard-card').style = null;
  gameMode = 'against_time';
}

const startGame = () => {
  let boardSize = document.getElementById('board-selector').value;
  localStorage.setItem('boardSize', boardSize);
  localStorage.setItem('gameMode', gameMode);

  if (gameMode == 'standard') {
    window.open('./../standard-mode/standard_mode.php', '_self');
  } else if (gameMode == 'against_time') {
    window.open('./../against-time-mode/against_time_mode.php', '_self');
  } else {
    document.getElementById('erro').style.visibility = 'visible';
  }
}