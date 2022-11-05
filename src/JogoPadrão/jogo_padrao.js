const boardContainer = document.getElementById('container-board');
const allPlayerMatchs = [];

const resolveBoardSize = chosenSize => {
  switch (chosenSize) {
    case '2x2':
      generateBoardGame(2);
      break;
    case '4x4':
      generateBoardGame(8);
      break;
    case '8x8':
      generateBoardGame(32);
      break;
    default:
      backToMenu();
  }

  boardContainer.classList.add(`container-tabuleiro-${chosenSize}`);
}

const generateBoardGame = boardSize => {
  const boardFirstHalfPlaces = [];
  const boardSecondHalfPlaces = [];
  const shuffledBoardPlaces = [];

  for (let index = 0; index < boardSize; index++) {
    boardFirstHalfPlaces.push(index);
  }

  boardSecondHalfPlaces.push(...boardFirstHalfPlaces);
  shuffleAllTablePlaces(boardFirstHalfPlaces, boardSecondHalfPlaces);

  shuffledBoardPlaces.push(...boardFirstHalfPlaces, ...boardSecondHalfPlaces);
  shuffleCards(shuffledBoardPlaces);
}

const shuffleCards = (shuffledBoardPlaces) => {
  shuffledBoardPlaces.forEach(boardPlace => {
    generateBoardCard(boardPlace);
  })
}

const shuffleAllTablePlaces = (tableFirstHalf, tableSecondHalf) => {
  for (let index = tableFirstHalf.length - 1; index > 0; index--) {
    const randomizer = Math.floor(Math.random() * (index + 1));
    const randomizerHelper = tableFirstHalf[index];

    tableFirstHalf[index] = tableFirstHalf[randomizer];
    tableFirstHalf[randomizer] = randomizerHelper;
  }

  for (let index = tableSecondHalf.length - 1; index > 0; index--) {
    const randomizer = Math.floor(Math.random() * (index + 1));
    const randomizerHelper = tableSecondHalf[index];

    tableSecondHalf[index] = tableSecondHalf[randomizer];
    tableSecondHalf[randomizer] = randomizerHelper;
  }
}

const generateBoardCard = index => {
  const imageCardFrontPath = `./../assets/Cartas/carta-${index + 1}.png`
  const imageCardBackPath = './../assets/Imagens/android.svg'

  const { cardPlaces, cardBack, cardFront, cardFrontImage } = generateCardsElements();

  cardPlaces.classList.add('card-place');
  cardPlaces.setAttribute('data-index', index);

  cardBack.src = imageCardBackPath
  cardBack.classList.add('card-back');

  cardFront.classList.add('card-front');

  cardFrontImage.src = imageCardFrontPath
  cardFrontImage.classList.add('card-front-image');

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
  card.addEventListener('click', event => {
    flipCard(card)
  })
}

const flipCard = (card) => {
  const isMatching = true;
  const matchChance = [];

  card.classList.add('flipped');

  matchChance.push(card);

}

function modoTrapaca(id)
	{
		if (document.getElementById(id).getAttribute("src") == "./../assets/Imagens/cheat-off.svg")
		{
			document.getElementById(id).setAttribute("src", "./../assets/Imagens/cheat-onn.svg");
      flipCard();
    }
		else
		{
			document.getElementById(id).setAttribute("src", "./../assets/Imagens/cheat-off.svg");
		}
	}
	


// const flipCard = card => {
//   state.flippedCards++
//   state.totalFlips++

//   if (!state.gameStarted) {
//       startGame()
//   }

//   if (state.flippedCards <= 2) {
      // cardPlace.classList.add('flipped')
//   }

//   if (state.flippedCards === 2) {
//       const flippedCards = document.querySelectorAll('.flipped:not(.matched)')

//       if (flippedCards[0].innerText === flippedCards[1].innerText) {
//           flippedCards[0].classList.add('matched')
//           flippedCards[1].classList.add('matched')
//       }

//       setTimeout(() => {
//           flipBackCards()
//       }, 1000)
//   }
// }

resolveBoardSize('8x8')