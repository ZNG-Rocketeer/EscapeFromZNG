<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IP</title>
  </head>
  <body>
    <?php $_SERVER['SERVER_ADDR']; ?>
    <?php
  $external_ip = exec('curl http://ipecho.net/plain; echo');
    echo $external_ip; ?>
  </body>
</html>
