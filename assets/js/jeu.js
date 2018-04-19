function play(){
  if( document.getElementById("btn").innerHTML[0]=='J'){
    document.location.href = "enigme_1_1.php";
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
