<?php

class DB {
    
    private static $instance = NULL;

    //Singleton Design Pattern
    public static function getInstance() {
        $dbuser = 'admin';
        $dsn = 'mysql:host=localhost;dbname=blog';
        $dbpass = 'password2';

      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO($dsn, $dbuser, $dbpass, $pdo_options);
      }
      return self::$instance;
    }
}
