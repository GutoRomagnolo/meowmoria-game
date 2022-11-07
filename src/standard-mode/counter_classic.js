let second = 0;
let minute = 0;
let interval;
let verifier = false;

const setTwoDigits = value => {
  if (value < 10) {
    return "0" + value;
  } else {
    return value;
  }
}

const startCounterClassic = () => {
  if (verifier === false) {
    interval = setInterval(counter, 1000);
  }
  verifier = true;
}

const stopCounter = () => {
  clearInterval(interval);
}

const counter = () => {
  second++;
  if (second === 60) {
    minute++;
    second = 0;
  }

  document.getElementById("timer").innerText =
    setTwoDigits(minute) + ":" + setTwoDigits(second);
}
