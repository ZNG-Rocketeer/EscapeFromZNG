<?php

require 'PushBullet.class.php';

try {
  #### AUTHENTICATION ####
  $p = new PushBullet('o.Bfhld4iloT1uPjJm2yqdOwCC4WSGdGlQ');


} catch (PushBulletException $e) {
  // Exception handling
  die($e->getMessage());
}

?>
