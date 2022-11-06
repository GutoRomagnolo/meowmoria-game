const selectedStyle = `
  background-color: white;
  filter: invert(100%);
  box-shadow: -0.125rem 0 0 0 white, 0.125rem 0 0 0 white, 0 -0.125rem 0 0 white,
  0 0.125rem 0 0 white;
  border: 0.063rem solid white;
`;

function selectRankingClassic() {
    document.getElementById('botao-ranking-classico').style.cssText = selectedStyle;
    document.getElementById('botao-ranking-contratempo').style = null;
  }

  function selectRankingAgainstTime() {
    document.getElementById('botao-ranking-contratempo').style = selectedStyle;
    document.getElementById('botao-ranking-classico').style.cssText = null;
  }

