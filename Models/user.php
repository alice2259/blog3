<?php
  class User {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $firstName;
    public $surname;
    public $email;
    public $password;
    public $profilePic;
    public $permissionsID;

    public function __construct($firstName, $surname, $email, $password, $profilePic, $permissionsID) {
      $this->firstName      = $firstName;
      $this->surname        = $surname;
      $this->email          = $email;
      $this->password       = $password;
      $this->profilePic     = $profilePic;
      $this->permissionsID  = $permissionsID;
    }
    
    public static function checkPassword()  {
        if (isset($_POST['confirmPassword']))   {
            if ($_POST['password']==$_POST['confirmPassword']) {
                User::insertUser();
            }
            else {
                echo '<p style="text-align: center">Oops your passwords don\'t match!</p>';
            }
        }
    }

    public static function insertUser() {
    $db = Db::getInstance();
    $req = $db->prepare("INSERT INTO userTable(firstName, surname, email, password, permissionsID) VALUES(:firstName, :surname, :email, :password, :permissionsID)");
    $req->bindParam(':firstName', $firstName);
    $req->bindParam(':surname', $surname);
    $req->bindParam(':email', $email);
    $req->bindParam(':password', $password);
    $req->bindParam(':permissionsID', $permissionsID);

// filter $_POST
    if(isset($_POST)) {
        $filteredPost = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
    }
    $firstName = $filteredPost['firstName'];
    $surname = $filteredPost['surname'];
    $email = $filteredPost['email'];
    $password = $filteredPost['password'];
    $permissionsID = $filteredPost['permissionsID'];
    
    $req->execute();
    echo '<p style="text-align: center">Great! '.$firstName.' has been registered</p>';
    }
    
    
    public static function login() {
        if (!empty($_POST)) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $db = Db::getInstance();
            $req = $db->prepare("SELECT * FROM userTable WHERE email='$email' AND password='$password'");
            $req->execute();
            $user = $req->fetch();

            if($user){
                $loggedInUser = new User($user['firstName'], $user['surname'], $user['email'], $user['password'], $user['profilePic'], $user['permissionsID'] );

    //      return new User($user['userID'], $user['firstName'], $user['surname'], $user['email'], $user['password'], $user['profilePic'], $user['permissionsID'] );
                $_SESSION["firstName"] = $loggedInUser->firstName;
                $_SESSION["surname"] = $loggedInUser->surname;
                $_SESSION["email"] = $loggedInUser->email;
                $_SESSION["password"] = $loggedInUser->password;
                $_SESSION["profilePic"] = $loggedInUser->profilePic;
                $_SESSION["permissionsID"] = $loggedInUser->permissionsID;

                user::checkPermissionsSession($_SESSION);
                return $loggedInUser;
            }
        }
        else  {
            throw new Exception('NOT LOGGED IN');
        }
    }
            
    public static function checkPermissionsSession($loggedInUser) {
            if ($loggedInUser['permissionsID']==2) {
            require_once 'Views/pages/adminAccount.php';
        }
        else if ($loggedInUser['permissionsID']==1)    {
            require_once 'Views/pages/account.php';
        }
    }
}



