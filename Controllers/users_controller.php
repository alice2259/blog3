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
      // we expect a url of form ?controller=user&action=login
      // if the session is not empty, take the logged in user to the account page
        if (!empty($_SESSION)){
                    require_once('views/pages/account.php');
            // else display a blank form for the user to login, run User::login function
            } else {
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    require_once('views/pages/login.php'); }
                else {
                    User::login();
                    } 
            }
    }
    
              
     public function logout() {
//         session_start();
         session_destroy();
     }
        }
  
 