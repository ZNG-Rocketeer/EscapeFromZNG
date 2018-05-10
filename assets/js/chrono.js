var startTime = 0
var start = 0
var end = 0
var diff = 0
var timerID = 0
function chrono(){
	end = new Date()
	diff = end - start
	diff = new Date(diff)
	var msec = diff.getMilliseconds()
	var sec = diff.getSeconds()
	var min = diff.getMinutes()
	var hr = diff.getHours()-1
	min = 60*hr
	if (min < 10){
		min = "0" + min
	}
	if (sec < 10){
		sec = "0" + sec
	}
	if(msec < 10){
		msec = "00" +msec
	}
	else if(msec < 100){
		msec = "0" +msec
	}

	document.getElementById("chronotime").innerHTML = min + ":" + sec + ":" + msec
	document.getElementById("chronosec").value = min*60+sec
	timerID = setTimeout("chrono()", 10)
}

function chronoStart(){
	start = new Date()
	chrono()
}

function chronoStop(){
	clearTimeout(timerID)
}
