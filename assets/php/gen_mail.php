<?php
$body = "<style>.mdp{text-align:center;background-color:grey;}</style>
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
 ?>
