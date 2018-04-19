function play(){
  document.getElementById("redir").write=sessionStorage.getItem('znglogged');
    if( document.getElementById("btn").innerHTML[0]=='J'){
    document.location.href = "enigme_1_1.php";
  }
  else{
      document.location.href = "signup.php";
  }
}
