<?php

  class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
      $this->username = $username;
      $this->password = $password;
    }

    public function getUsername() {
      return($this->username);
    }

    public function getPassword() {
      return($this->password);
    }

    private function encryptPassword($password) {
      $options = [
        'cost' => 12,
      ];
      return(password_hash($password, PASSWORD_BCRYPT, $options));
    }

    public function changePassword($password) {
      $hashedPassword = $this->encryptPassword($password);
      $this->password = $hashedPassword;
    }

    /**
    * Check if given password is correct for this user
    * @param string $password
    * @return boolean
    */

    public function checkIfPasswordIfCorrect($password) {
      if (password_verify($password, $this->password) === true) {
        return(true);
      }

      else {
        return(false);
      }
    }
  }


?>
