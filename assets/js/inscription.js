function verif_inscription()
{
  var genre_M = document.sign.genre[0].checked;
  var genre_Mme = document.sign.genre[1].checked;
  var nom_inscription = document.sign.nom.value;
  var prenom_inscription = document.sign.prenom.value;
  var date_naissance_inscription = document.sign.date_naiss.value;
  var pseudo_inscription = document.sign.login.value;
  var mail_inscription = document.sign.mail.value;
  var mdp_inscription = document.sign.zngpass.value;
  var mdp_conf_inscription = document.sign.zngpass2.value;

  var fs1 = document.getElementById('rec1');
  var fs2 = document.getElementById('rec2');
  var fs3 = document.getElementById('rec3');

  if((genre_M==true || genre_Mme==true) && nom_inscription!="" && prenom_inscription!="" && date_naissance_inscription!=""){
    fs1.style.backgroundColor="green";
  }
  else{
    fs1.style.backgroundColor="red";
  }

  if(pseudo_inscription!="" &&  mail_inscription!="" && verifMail(mail_inscription)){
    fs2.style.backgroundColor="green";
  }
  else{
    fs2.style.backgroundColor="red";
  }

  if(mdp_inscription!="" && mdp_conf_inscription!="" && mdp_inscription==mdp_conf_inscription){
    fs3.style.backgroundColor="green";
  }
  else{

    fs3.style.backgroundColor="red";
  }

  if (mdp_inscription!=mdp_conf_inscriptionue) {
    document.getElementById('mdp_diff').innerHTML="Les mots de passes sont différents";
  }

}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
