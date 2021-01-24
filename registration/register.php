<?php

require_once 'includes/constants.php'
class Mysql {
  $private $conn;

  function _construct() {
    $this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_USER) or die("There was a problem connecting to the database")
  }

  function verify_Username_and_Pass($un, $pwd) {

   $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_USER) or die("There was a problem connecting to the database")

   $query = "SELECT *
   FROM profiles
   WHERE username = ? AND password = ?
   LIMIT 1";

   if($stmt = $this->conn->prepare($query)) {
     $stmt->bind_param('ss', $un, $pwd);
     $stmt->execute();

     if($stmt->fetch()) {
       $stmt->close();
       return true;
     }
   }
  }
}

 ?>
