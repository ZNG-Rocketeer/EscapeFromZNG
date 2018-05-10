<?php if ($_SESSION['zngid']!= 12 && $_SESSION['zngid']!= 13 && $_SESSION['zngid']!= 14){
  echo "<script type=\"text/javascript\">
  document.location.href=\"../\"
  </script>";
}else {
  //echo $_SESSION['zngid'];
}
 ?>
