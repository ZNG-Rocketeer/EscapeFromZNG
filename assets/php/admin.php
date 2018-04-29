<?php if ($_SESSION['zngid']!= 12 && $_SESSION['zngid']!= 13){
  echo "<script type=\"text/javascript\">
  document.location.href=\"../\"
  </script>";
}else {
  //echo $_SESSION['zngid'];
}
 ?>
