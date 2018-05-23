<?php

/**
 *
 */
class UsersController
{
  public function login() {
    require_once APP_PATH . '/models/UsersModal.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new UsersModal;
    $loggedin = $user->login($username, $password);

    loadview('theme/header', ['username' => $loggedin]);
    loadview('pages/home');
    loadview('theme/footer');
  }

  public function logout() {
    session_destroy();
  }
}


 ?>
