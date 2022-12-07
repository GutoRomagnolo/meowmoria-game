let gameModeToRematch = null;
let resultInformations = null;
const standardRematchUrl = "./../standard-mode/standard_mode.php"
const againstTimeRematchUrl = "./../against-time-mode/against_time_mode.php"

const showMatchResult = (result, gameResult) => {
  gameModeToRematch = gameResult.gameMode;
  
  const resultMapper = {
    defeat: {
      image: "../assets/icons/fail.svg",
      message: "Ops, nao foi dessa vez!"
    },
    victory: {
      image: "../assets/icons/trophy.svg",
      message: "Parabéns, você ganhou!"
    }
  };

  resultInformations = resultMapper[result];
  registerGameResult(gameResult);

  document.getElementById("board-container").style.background = "rgba(221, 221, 221, 0.7)";
  document.getElementById("board-place").style.opacity = "0.3";
  document.getElementById("board-container").innerHTML += `
      <div class="modal-aviso-fundo">
        <div class="modal-aviso-janela">
          <img src="${resultInformations.image}" alt="${resultInformations.message}" class="modal-aviso-icone">
          <div style="margin: 1rem 0;">${resultInformations.message}</div>
          <div class="modal-aviso-botoes">
          <input class="default-button botao-sair" type="submit" value="Trocar modo de jogo" onclick="closeMatchResult()">
          <input class="default-button botao-jogar" type="submit" value="Jogar novamente" onclick="startRematch()">
          </div>
        </div>
      </div>
    `;
}

const registerGameResult = async gameResult => {
  await fetch('./../game-result/game_result.php', {
    method: 'POST',
    body: JSON.stringify(gameResult)
  });
}

const closeMatchResult = () => {
  document.querySelector(".modal-aviso-fundo").remove();
  backToMenu()
}

const startRematch = () => {
  gameModeToRematch === 'standard'
    ? window.open(standardRematchUrl, "_self")
    : window.open(againstTimeRematchUrl, "_self")
}

const getDataRanking = async (gameMode) => {
  const table_ranking = document.getElementById('table-ranking');
  const request = await fetch(`../global-ranking/ranking_resultset.php?gameMode=${gameMode}&historic=1`);
  const data = await request.json();

  table_ranking.innerHTML = '';

  if (data.length > 0) {
    data.forEach((item, index) => {
      let game_mode = (item.game_mode == 'standard') ? 'Clássico' : 'Contra o tempo';
      let ranking_position = index + 1;
      let trophy_icon = null;
  
      if (ranking_position === 1) {
        trophy_icon = {
          "className": "first-place-trophy",
          "alt": "Troféu Primeiro Lugar"
        }
      } else if (ranking_position === 2) {
        trophy_icon = {
          "className": "second-place-trophy",
          "alt": "Troféu Segundo Lugar"
        }
      } else if (ranking_position === 3) {
        trophy_icon = {
          "className": "third-place-trophy",
          "alt": "Troféu Terceiro Lugar"
        }
      } else {
        trophy_icon = null;
      }
  
      table_ranking.innerHTML += 
        `<div class="ranking-card">
          <div class="ranking-card-content">
            <div class="player-name-icon-container">
              ${trophy_icon ? `<img class="${trophy_icon.className}" src="../assets/icons/trophy.svg" alt="${trophy_icon.alt}">` : ""}
              <p class="player-name">${item.nickname}</p>
            </div>
            <p>${game_mode} ${Math.sqrt(item.board_size)}x${Math.sqrt(item.board_size)}</p>
            <div class="date-time-container">
              <div class="ranking-time">
                <img src="./../assets/icons/clock.svg" class="clock-icon" alt="Ícone relógio">&nbsp;
                <p>${item.game_time} s</p>
              </div>
            </div>
          </div>
        </div>`
    });
  } else {
    table_ranking.innerHTML += `<div class="zero-results">Nenhum resultado foi encontrado</div>`;
  }
}
