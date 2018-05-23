<?php

/**
 *
 */
class PagesController
{
  public function home() {
    loadview('theme/header');
    loadview('pages/home');
    loadview('theme/footer');
  }
}
 ?>
