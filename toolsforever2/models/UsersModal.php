<?php

/**
*
*/
class UsersModal
{
  public function login($username, $password) {

    if(isset($username, $password)) {
      var_dump('koe');
      $dbConnection = getDbConnection();
      $stmt = $dbConnection->prepare('SELECT achternaam FROM medewerker WHERE gebruikersnaam = :username AND wachtwoord = :password');
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':password', $password);
      $stmt->execute();
      $login = $stmt->fetchAll();
      return $login;
    }
    else {
      var_dump('kip');
      return 'wrong username/password supplied!';
    }
  }
}


?>
