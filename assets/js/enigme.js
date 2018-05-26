
function MotADeviner(evt)
{
  var cherche=document.getElementById("mot").value;
  var res="lemotlepluschiantdelunivers";

  var code_user=evt.charCode;
  var lettre_user=String.fromCharCode(code_user);

  evt.preventDefault();
  est_Majuscule(evt,code_user);

  if(res[cherche.length]==lettre_user)
  {
    document.getElementById("mot").value=cherche+lettre_user;
  }

  if(res==document.getElementById("mot").value)
  {
    finEnigme(document.getElementById('Enisuiv').innerHTML);
  }
}

////////////////////////////////////////////////////////////////////////////////
var inputMot = document.getElementById('mot');
if (inputMot) {
  inputMot.addEventListener('keypress', MotADeviner, false);
}
////////////////////////////////////////////////////////////////////////////////

function est_Majuscule(mot,lettre)
{
  if (lettre != 0) {
    if (lettre < 97 || lettre > 122) {

      displayWarning(
        "S'il vous plaît veuillez utiliser des miniscules seulement."
        + "\n" + "caractère saisie : " + lettre + "\n"
      );
    }
  }
}


var warningTimeout;
var warningBox= document.createElement("div");
warningBox.className = "warning";

function displayWarning(msg) {
  warningBox.innerHTML = msg;
  inputMot.parentNode.insertBefore(warningBox, inputMot);

  if (warningBox) {
    window.clearTimeout(warningTimeout);
  }

  warningTimeout = window.setTimeout(function() {
    warningBox.parentNode.removeChild(warningBox);
    warningTimeout = -1;
  }, 2000);
}


function reponse(evt)
{
  var cherche=document.getElementById("rep").value;
  var resultat="Walle";


  if(resultat==cherche){
    finEnigme(document.getElementById('Enisuiv').innerHTML);
  }
}

////////////////////////////////////////////////////////////////////////////////
var inputrep = document.getElementById('rep');
if (inputrep) {
  inputrep.addEventListener('input', reponse, false);
}
////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////
function verif_label()
{
    var user_val1 = document.getElementById('i_2').value;
    var rep_val1 = "2";
    var user_val2 = document.getElementById('i_17').value;
    var rep_val2 = "17";
    var user_val3 =  document.getElementById('i_32').value;
    var rep_val3 = "32"

    if (user_val1==rep_val1 && user_val2==rep_val2 && user_val3==rep_val3 )
    {
	finEnigme(document.getElementById('Enisuiv').innerHTML);
    }
    return true

}
////////////////////////////////////////////////////////////////////////////////

function eni32(){
  var cherche=document.getElementById("eni3_2").value;
  var resultat="metare";

  var code_user=evt.charCode;
  var lettre_user=String.fromCharCode(code_user);

  document.getElementById("eni3_2").value=cherche+lettre_user;


  if(resultat==cherche){
    finEnigme(document.getElementById('Enisuiv').innerHTML);
  }
}

var inputeni32 = document.getElementById('eni3_2');
if (inputeni32) {
  inputrep.addEventListener('input', eni32, false);
}
//////////////////////   Fin enigme                  ///////////////////////////

function finEnigme(eniSuiv){
  chronoStop();
  document.Enigme.verif.value=document.getElementById("chronosec").value*5.55;
  if (eniSuiv == 0) {
    document.Enigme.submit();
  }
  else{
    var eni = 'enigme_' + document.Enigme.idEni.value + '_' + eniSuiv + '.php';
    document.Enigme.action = eni;
    document.Enigme.submit();
  }
}
