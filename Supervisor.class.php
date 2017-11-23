<?php

  require_once 'User.class.php';

  class Supervisor extends User {
    public function doSuperviserStuff() {
      echo "SUPER";
    }
  }


?>
