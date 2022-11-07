const boardContainer = document.getElementById('board-place');
const middleContainer = document.getElementById('middle-container');
const flipsMadeCounter = document.getElementById('moves-made');
const boardSizeElement = document.getElementById('board-size');
const boardChosenSize = localStorage.getItem('boardSize');
const gameMode = localStorage.getItem('gameMode');
let isMatching = false;
let notMatchedCards = null;
let matchChance = [];

const gameProgress = {
  gameMode: gameMode,
  tableSize: 0,
  playerMatchs: 0,
  flipsMade: 0,
  gameIsRunning: false
}

flipsMadeCounter.innerHTML = `${gameProgress.flipsMade}`

const resolveBoardSize = chosenSize => {
  switch (chosenSize) {
    case '4x4':
      gameProgress.tableSize = 16;
      generateBoardGame(8);
      break;
    case '6x6':
      gameProgress.tableSize = 36;
      generateBoardGame(18);
      break;
    case '8x8':
      gameProgress.tableSize = 64;
      generateBoardGame(32);
      break;
    default:
      backToMenu();
  }

  boardContainer.classList.add(`board-container-${chosenSize}`);
  boardSizeElement.innerHTML = `${chosenSize}`
}

const backToMenu = () => {
  window.open("./../select-mode/select_mode.html", "_self");
  localStorage.clear();
}

const generateBoardGame = boardSize => {
  const boardFirstHalfPlaces = [];
  const boardSecondHalfPlaces = [];
  const shuffledBoard = [];

  for (let index = 0; index < boardSize; index++) {
    boardFirstHalfPlaces.push(index);
  }

  boardSecondHalfPlaces.push(...boardFirstHalfPlaces);

  shuffleBoard(boardFirstHalfPlaces);
  shuffleBoard(boardSecondHalfPlaces);

  shuffledBoard.push(...boardFirstHalfPlaces, ...boardSecondHalfPlaces);
  shuffleBoard(shuffledBoard);
  dealOutCards(shuffledBoard);
}

const dealOutCards = (shuffledBoard) => {
  shuffledBoard.forEach(boardPlace => {
    generateBoardCard(boardPlace);
  })
}

const shuffleBoard = (boardToShuffle) => {
  for (let index = boardToShuffle.length - 1; index > 0; index--) {
    const randomizer = Math.floor(Math.random() * (index + 1));
    const randomizerHelper = boardToShuffle[index];

    boardToShuffle[index] = boardToShuffle[randomizer];
    boardToShuffle[randomizer] = randomizerHelper;
  }
}

const generateBoardCard = index => {
  const imageCardFrontPath = `./../assets/cards-images/carta-${index + 1}.png`;
  const imageCardBackPath = './../assets/icons/android.svg';

  const { cardPlaces, cardBack, cardFront, cardFrontImage } = generateCardsElements();

  cardPlaces.classList.add('card-place');
  if (gameProgress.tableSize === 64) {
    cardPlaces.style.height = '4.7rem';
  }

  cardPlaces.setAttribute('data-index', index);

  cardBack.src = imageCardBackPath
  cardBack.classList.add('card-back');
  cardFront.classList.add('card-front');

  cardFrontImage.src = imageCardFrontPath
  cardFrontImage.classList.add('card-front-image');
  notMatchedCards = document.querySelectorAll('.card-place:not(.matched)');

  listenCardClicks(cardPlaces);
}

const generateCardsElements = () => {
  const cardPlaces = document.createElement('div');
  const cardFront = document.createElement('div');
  const cardBack = document.createElement('img');
  const cardFrontImage = document.createElement('img');

  boardContainer.appendChild(cardPlaces);
  cardPlaces.appendChild(cardFront);
  cardPlaces.appendChild(cardBack);
  cardFront.appendChild(cardFrontImage);

  return {
    cardPlaces,
    cardBack,
    cardFront,
    cardFrontImage
  }
}

const listenCardClicks = card => {
  const blockFlipCard = !card.classList.contains('matched') && !card.classList.contains('flipped')
  card.addEventListener('click', event => {
    if (!gameProgress.gameIsRunning) {
      startSpecificCounter()
    }

    if (blockFlipCard && !isMatching) {
      flipCards(card);
    }

    gameProgress.gameIsRunning = true;
  })
}

const startSpecificCounter = () => {
  gameProgress.gameMode === 'standard'
    ? startCounterClassic()
    : startCountDown(boardChosenSize)
}

const flipCards = (card) => {
  if (matchChance.length < 2) {
    card.classList.add('flipped');
    matchChance.push(card);
  }

  if (matchChance.length === 2) {
    isMatching = true;
    const firstCardFlipped = matchChance[0].getAttribute('data-index');
    const secondCardFlipped = matchChance[1].getAttribute('data-index');

    if (firstCardFlipped === secondCardFlipped) {
      matchChance[0].classList.add('matched');
      matchChance[1].classList.add('matched');
      gameProgress.playerMatchs++;

      checkPlayerMatchs();
    }

    matchChance = [];
    flipsMadeCounter.innerHTML = `${gameProgress.flipsMade += 1}`;

    setTimeout(() => {
      flipBackCards();
      isMatching = false;
    }, 500)
  }
}

const flipBackCards = () => {
  notMatchedCards = document.querySelectorAll('.card-place:not(.matched)');
  notMatchedCards.forEach(card => {
    card.classList.remove('flipped')
  })
}

const activateCheatMode = cheatButtonElementId => {
  const cheatsOffURL = './../assets/icons/cheat-off.svg';
  const cheatsONUrl = './../assets/icons/cheat-onn.svg';

  if (document.getElementById(cheatButtonElementId).getAttribute('src') === cheatsOffURL) {
    document.getElementById(cheatButtonElementId).setAttribute('src', cheatsONUrl);
    flipCardsOnCheat('cheatOn');
  } else {
    document.getElementById(cheatButtonElementId).setAttribute('src', cheatsOffURL);
    flipCardsOnCheat('cheatOff');
  }
}

const flipCardsOnCheat = cheatState => {
  if (cheatState === 'cheatOn') {
    notMatchedCards.forEach(card => card.classList.add('flipped'))
  } else {
    notMatchedCards.forEach(card => card.classList.remove('flipped'))
  }
}

const checkPlayerMatchs = () => {
  if (gameProgress.playerMatchs === (gameProgress.tableSize / 2)) {
    setTimeout(() => {
      showMatchResult('victory', gameProgress.gameMode);

      gameProgress.gameMode === 'standard'
        ? stopClassicCounter()
        : stopCountDown('victory')
    }, 500)
  }
}

resolveBoardSize(boardChosenSize);