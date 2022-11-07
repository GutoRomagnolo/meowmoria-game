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
}

const selectRankingAgainstTime = () => {
  document.getElementById('against-time-ranking-button').style = selectedStyle;
  document.getElementById('standard-ranking-button').style.cssText = null;
}

