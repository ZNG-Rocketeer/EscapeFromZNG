function resize_tab(){

}

function pic(x,y){
  var coor=x+"a"+y;
  var coul=radioval();
  document.getElementById(coor).className=coul;
}

function radioval(){
  var radios = document.getElementsByName('radio-group');

  for (var i = 0, length = radios.length; i < length; i++)
  {
    if (radios[i].checked)
    {
      // do whatever you want with the checked radio
      return(radios[i].value);

      // only one radio can be logically checked, don't check the rest

    }
  }
}
