function play(){
  if( document.getElementById("btn").innerHTML[0]=='J'){
    document.location.href = "enigme/enigme_1_1.php";
  }
  else{
    document.location.href = "connexion";
  }
}

function share(){
  panel=document.getElementById('sharepanel')
  panel.style.visibility="visible";
}
function shareout(){
  panel=document.getElementById("sharepanel")
  panel.style.visibility="hidden";
}

function fs(n) {
  //parseInt(document.getElementById("fsn").innerHTML);
    switch (n) {
    case 1:
        document.getElementById("fs1").style.display = "inline";
        document.getElementById("fs2").style.display = "none";
        document.getElementById("fs3").style.display = "none";
        document.getElementById("rec1").style.borderColor = "#41a741";
        document.getElementById("rec2").style.borderColor = "black";
        document.getElementById("rec3").style.borderColor = "black";
        document.getElementById("btn1").setAttribute("disabled", "");
        document.getElementById("btn2").removeAttribute("disabled");
        document.getElementById("fsn").innerHTML = "1";
        break;
    case 2:
        document.getElementById("fs1").style.display = "none";
        document.getElementById("fs2").style.display = "inline";
        document.getElementById("fs3").style.display = "none";
        document.getElementById("rec1").style.borderColor = "black";
        document.getElementById("rec2").style.borderColor = "#41a741";
        document.getElementById("rec3").style.borderColor = "black";
        document.getElementById("btn1").removeAttribute("disabled");
        document.getElementById("btn2").removeAttribute("disabled");
        document.getElementById("fsn").innerHTML = "2";
        break;
    case 3:
        document.getElementById("fs1").style.display = "none";
        document.getElementById("fs2").style.display = "none";
        document.getElementById("fs3").style.display = "inline";
        document.getElementById("rec1").style.borderColor = "black";
        document.getElementById("rec2").style.borderColor = "black";
        document.getElementById("rec3").style.borderColor = "#41a741";
        document.getElementById("btn1").removeAttribute("disabled");
        document.getElementById("btn2").setAttribute("disabled", "");
        document.getElementById("fsn").innerHTML = "3";
        break;
    default:
        break;
    }
}
