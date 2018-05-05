function taille(){
  var height = document.body.clientHeight;
  var width  = document.body.clientWidth;

  document.getElementById("tailleh").innerHTML=height;
  document.getElementById("taillew").innerHTML=width;

  if (height==500 && width==500) {
    document.getElementById("porte").style.display=inline;
  }
}
