const selectedStyle = `
  background-color: white;
  filter: invert(100%);
  box-shadow: -0.125rem 0 0 0 white, 0.125rem 0 0 0 white, 0 -0.125rem 0 0 white,
  0 0.125rem 0 0 white;
  border: 0.063rem solid white;
`;

const selectRankingClassic = () => {
  document.getElementById('standard-ranking-button').style.cssText = selectedStyle;
  document.getElementById('against-time-ranking-button').style = null;
  getDataRanking('standard');
}

const selectRankingAgainstTime = () => {
  document.getElementById('against-time-ranking-button').style = selectedStyle;
  document.getElementById('standard-ranking-button').style.cssText = null;
  getDataRanking('against_time');
}

const getDataRanking = async gameMode => {
  const table_ranking = document.getElementById('table-ranking');
  const request = await fetch(`ranking_resultset.php?gameMode=${gameMode}`);
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
        `<div class="item-table-ranking">
          <div class="trophy-table-ranking">
            ${trophy_icon ? `<img class="${trophy_icon.className}" src="../assets/icons/trophy.svg" alt="${trophy_icon.alt}">` : ""}
          </div>
          <div class="position-table-ranking">${ranking_position}</div>
          <div class="player-name-table-ranking">${item.nickname}</div>
          <div class="game-mode-table-ranking">${game_mode} ${Math.sqrt(item.board_size)}x${Math.sqrt(item.board_size)}</div>
          <div class="match-details-table-ranking">
            <div class="date-table-ranking">02/02/2022 22:22</div>
            <div class="plays-duration-table-ranking">
              <div>
                <img src="../assets/icons/clock.svg" height="12" alt="Tempo da partida"> ${item.game_time}s
              </div>
              <div>
                <img src="../assets/icons/play.svg" height="12" alt="Número de jogadas"> ${item.attempts}
              </div>
            </div>
          </div>
        </div>`
    });
  } else {
    table_ranking.innerHTML += `<div class="zero-results">Nenhum resultado foi encontrado</div>`;
  }
}

window.addEventListener('DOMContentLoaded', async event => {
  selectRankingClassic();
});
