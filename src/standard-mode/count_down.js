let minutes = 0;
let seconds = 0;
let interval;
let verifier = false;

const setTwoDigits = value => {
  if (value < 10) {
    return "0" + value;
  } else {
    return value;
  }
}

const startCountDown = (boardSize) => {
  mapTimer(boardSize)

  if (verifier === false) {
    interval = setInterval(countDown, 1000);
  }
  verifier = true;
}

const stopCountDown = () => {
  clearInterval(interval);

  return seconds + (minutes * 60)
}

const countDown = () => {
  if (minutes === 0 && seconds === 0) {
    callDefeat();
  } else if (seconds === 0 && minutes > 0) {
    console.log("AAAA")
    minutes--;
    seconds = 59;
  } else {
    seconds--;
  }

  document.getElementById("timer").innerText = setTwoDigits(minutes) + ":" + setTwoDigits(seconds);
}

const mapTimer = boardSize => {
  let startMinute = 0;
  let startSeconds = 0;

  if (boardSize === '4x4') {
    startSeconds = 35;
  }

  if (boardSize === '6x6') {
    startMinute = 1;
    startSeconds = 30;
  }

  if (boardSize === '8x8') {
    startMinute = 2;
    startSeconds = 0;
  }

  minutes = startMinute;
  seconds = startSeconds;
}