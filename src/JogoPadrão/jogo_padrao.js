const boardContainer = document.getElementById('container-board');

const resolveBoardSize = chosenSize => {
  switch (chosenSize) {
    case '2x2':
      generateBoardGame(4);
      break;
    case '4x4':
      generateBoardGame(16);
      break;
    case '8x8':
      generateBoardGame(64);
      break;
    default:
      backToMenu();
  }

  boardContainer.classList.add(`container-tabuleiro-${chosenSize}`);
}


const generateBoardGame = boardSize => {
  for (let index = 0; index < boardSize; index++) {
    const boardCard = document.createElement('img');
    boardCard.src='./../assets/ImagensTemporarias/GragasSquare.webp'
    boardCard.classList.add('board-cell');

    let indexTest = 1;
    boardCard.setAttribute('data-id')
    indexTest++
    boardContainer.appendChild(boardCard)
  }
}

resolveBoardSize('8x8')