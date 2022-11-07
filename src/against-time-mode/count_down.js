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

const startCountDown = (tableSize) => {
  mapTimer(tableSize)

  if (verifier === false) {
    interval = setInterval(countDown, 1000);
  }
  verifier = true;
}

const stopCountDown = (result) => {
  clearInterval(interval);

  if (result === 'defeat') {
    showMatchResult(result, 'against-time');
  }
}

const countDown = () => {
  seconds--;

  if (minutes === 00 && seconds === 00) {
    stopCountDown('defeat');
  } else if (seconds === 00 && minutes > 0) {
    minutes--;
    seconds = 59;
  }
  document.getElementById("timer").innerText = setTwoDigits(minutes) + ":" + setTwoDigits(seconds);
}

const mapTimer = tableSize => {
  let startMinute = 0;
  let startSeconds = 0;

  if (tableSize === '4x4') {
    startSeconds = 35;
  }

  if (tableSize === '6x6') {
    startMinute = 1;
    startSeconds = 30;
  }

  if (tableSize === '8x8') {
    startMinute = 2;
  }

  minutes = startMinute;
  seconds = startSeconds;
}