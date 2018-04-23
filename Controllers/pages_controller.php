<?php
  class PagesController {
    public function home() {
      require_once('Views/pages/home.php');
    }

    public function error() {
      require_once('Views/pages/error.php');
    }
    
    public function account() {
      require_once('Views/pages/account.php');
    }
    
    public function adminAccount() {
      require_once('Views/pages/adminAccount.php');
    }
 }
  
?>