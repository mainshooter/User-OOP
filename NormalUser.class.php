<?php
  require_once 'User.class.php';
  class NormalUser extends User {
    public function doNormalUserStuff() {
      echo "NORMAL";
    }
  }


?>
