<?php

require 'PushBullet.class.php';

try {
  #### AUTHENTICATION ####
  $p = new PushBullet('o.7v1MG8SFna4N6Yj7k5sVXiCghTassws6');


} catch (PushBulletException $e) {
  // Exception handling
  die($e->getMessage());
}

?>
