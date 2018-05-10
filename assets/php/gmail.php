<?php
class zngMail{

  public function mail_mdp($mail,$user,$pass){
    $message_html = "<style>.mdp{text-align:center;background-color:grey;}</style>
    <table width='600' cellpadding='0' cellspacing='0' align='center'>
    <thead>
    <tr>
    <td width=\"600\">
    <h2>Bonjour ".$user['pseudo']."</h2>
    <p>A l'intention de ".$user['genre'].". ".$user['nom']." ".$user['prenom']."</p>
    </td></tr>
    </thead>
    <tbody>
    <tr><td>
    <p>Voici ton nouveau mot de passe change le dès que possible c'est important</p>
    </td>
    </tr>
    <tr>
    <td class='mdp'>
    ".$pass."
    </td>
    </tr>
    </tbody>
    </table>
    ";


    $message_txt = "Bonjour ".$user['pseudo'].$passage_ligne;
    $message_txt .= "A l'intention de ".$user['genre'].". ".$user['nom']." ".$user['prenom'].$passage_ligne;
    $message_txt .= "Voici ton nouveau mot de passe change le dès que possible c'est important".$passage_ligne;
    $message_txt .= $pass.$passage_ligne;
    send_mail($mail,"ZNG Mot de passe oublié",$message_txt,$message_html);
  }

  public function mail_sign($mail,$user){
    $message_html = "<style>.mdp{text-align:center;background-color:grey;}</style>
    <table width='600' cellpadding='0' cellspacing='0' align='center'>
    <thead>
    <tr>
    <td width=\"600\">
    <h2>Bonjour ".$user['pseudo']."</h2>
    <p>Bienvenue sur notre site ".$user['genre'].". ".$user['nom']." ".$user['prenom']."</p>
    </td></tr>
    </thead>
    <tbody>
    <tr><td>
    <p>Vous pouvez vous désormais jouer sur <a href=\"https://zngairone.tk\">EscapeFromZNG</a></p>
    </td>
    </tr>
    <tr>
    </tr>
    </tbody>
    </table>
    ";


    $message_txt = "Bonjour ".$user['pseudo']."\n";
    $message_txt .= "Bienvenue sur notre site ".$user['genre'].". ".$user['nom']." ".$user['prenom']."\n";
    $message_txt .= "Vous pouvez vous désormais jouer sur https://zngairone.tk\n";

    send_mail($mail,"ZNG Inscription",$message_txt,$message_html);
  }

  private function send_mail($mail,$sujet,$message_txt,$message_html){


    require_once ("Mail.php");
    require_once ("Mail/mime.php");

    $from = "ZNG Contact <zng.contact@gmail.com>";
    $to = $mail;
    $subject = $sujet;

    $host = "smtp.gmail.com";
    $port = "587";
    $username = "zng.contact@gmail.com";
    $password = "zanga_c_a_h";

    $headers['From'] = $from;
    $headers['To'] = $to;
    $headers['Subject'] = $subject;
    $headers['Content-Type'] = 'text/html; charset=UTF-8';
    $headers['Content-Transfer-Encoding']= '8bit';

    $mime = new Mail_mime;
    $mime->setTXTBody($message_txt);
    $mime->setHTMLBody($message_html);

    $mimeparams=array();
    $mimeparams['text_encoding']='8bit';
    $mimeparams['text_charset']='UTF-8';
    $mimeparams['html_charset']='UTF-8';
    $mimeparams['head_charset']='UTF-8';
    //$mimeparams['debug'] = 'True'; //Uncomment this if you want to view Debug information

    $body = $mime->get($mimeparams);
    $headers = $mime->headers($headers);

    $smtpinfo['host'] = $host;
    $smtpinfo['port'] = $port;
    $smtpinfo['auth'] = true;
    $smtpinfo['username'] = $username;
    $smtpinfo['password'] = $password;
    //$smtpinfo['debug'] = 'True'; //Uncomment this if you want to view Debug information

    $mail=& Mail::factory('smtp', $smtpinfo);
    $mail->send($to, $headers, $body);

  }
  
}

?>
