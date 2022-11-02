let secondDown = 60
let minuteDown = 4
let interval

function setTwoDigits(value) {
    if(value<10){
        return('0' + value)
    } else{
        return (value)
    }
}


function startCountDown() {
    interval = setInterval(countDown, 1000)
    }
    
function stop() {
    clearInterval(interval)
    }

function countDown() {
    secondDown--

    if (minuteDown == 00 && secondDown == 00 ){
        stop()
    } else if(secondDown == 00 && minuteDown > 0){
        minuteDown--
        secondDown=59
    }
        document.getElementById('timer').innerText = setTwoDigits(minuteDown) + ':' + setTwoDigits(secondDown)
    }

