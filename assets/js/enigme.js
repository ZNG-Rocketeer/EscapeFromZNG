
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
    setTimeout(document.location.href='enigme_2_1.php',10000);
  }
}

////////////////////////////////////////////////////////////////////////////////
var inputMot = document.getElementById('mot');
if (inputMot) {
inputMot.addEventListener('input', MotADeviner, false);
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

  var code_user=evt.charCode;
  var lettre_user=String.fromCharCode(code_user);

  evt.preventDefault();
  if(lettre_user > 'a' && lettre_user < 'z')
  document.getElementById("rep").value=cherche+lettre_user;

  if(resultat==cherche){
    document.location.href='enigme_3_1.php';
  }
}

////////////////////////////////////////////////////////////////////////////////
var inputrep = document.getElementById('rep');
if (inputrep) {
  inputrep.addEventListener('input', reponse, false);
}
////////////////////////////////////////////////////////////////////////////////
