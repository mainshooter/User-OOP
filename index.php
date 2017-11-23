<?php

  require_once 'Supervisor.class.php';
  require_once 'NormalUser.class.php';
  $Thomas = new Supervisor('thomas', 'legend32');
  $Thomas->doStuff();

  $Anna = new NormalUser('Anna', 'whatevah96');
  $Anna->doStuff();


?>
