<?php
  class PagesController {
    public function home() {
      $first_name = 'Alice';
      $last_name  = 'Creasey';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
    
    public function account() {
      require_once('views/pages/account.php');
    }
    
 }
  
?>