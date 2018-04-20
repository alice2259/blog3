<?php
  class PagesController {
    public function home() {
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
    
    public function account() {
      require_once('views/pages/account.php');
    }
    
    public function adminAccount() {
      require_once('views/pages/adminAccount.php');
    }
 }
  
?>