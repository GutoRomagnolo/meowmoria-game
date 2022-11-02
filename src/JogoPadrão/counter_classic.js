let second = 0
let minute = 0
let interval

function setTwoDigits(value) {
    if(value<10){
        return('0' + value)
    } else{
        return (value)
    }
}

function startCounterClassic() {
    interval = setInterval(counter, 1000)
    }
    
function stop() {
    //conectar essa funcao à condicao de vitoria quando ela for realizada
    clearInterval(interval)
    }

function counter() {
    second++
    if(second == 60){
        minute++
        second=0
    }

    document.getElementById('timer').innerText = setTwoDigits(minute) + ':' + setTwoDigits(second)
}

