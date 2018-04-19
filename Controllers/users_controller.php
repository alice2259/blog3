<?php
session_start();
  class UsersController {
    public function register() {
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/users/register.php');
      }
      else { 
            User::insertUser();
            require_once('views/pages/account.php');
      }
    }
    
    public function login() {
      // we expect a url of form ?controller=products&action=login
      // if it's a GET request display a blank form for the user to login
        if (!empty($_SESSION)){
                    require_once('views/pages/account.php');
            } else {
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    require_once('views/pages/login.php'); }
                else {
                    User::login();
                    require_once('views/pages/account.php'); }
            } 

           }
           
     public function logout() {
//         session_start();
         session_destroy();
     }
        }
  
 