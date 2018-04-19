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

    public static function insertUser() {
    $db = Db::getInstance();
    $req = $db->prepare("INSERT INTO userTable(firstName, surname, email, password, permissionsID) VALUES(:firstName, :surname, :email, :password, :permissionsID)");
    $req->bindParam(':firstName', $firstName);
    $req->bindParam(':surname', $surname);
    $req->bindParam(':email', $email);
    $req->bindParam(':password', $password);
    $req->bindParam(':permissionsID', $permissionsID);

// set parameters and execute
    if(isset($_POST['firstName'])&& $_POST['firstName']!=""){
        $filteredFirstName = filter_input(INPUT_POST,'firstName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['surname'])&& $_POST['surname']!=""){
        $filteredSurname = filter_input(INPUT_POST,'surname', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['email'])&& $_POST['email']!=""){
        $filteredEmail = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['password'])&& $_POST['password']!=""){
        $filteredPassword = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
//    if(isset($_POST['permissionsID'])&& $_POST['permissionsID']!=""){
//        $permissionsID = $_POST['permissionsID'];
    
   
$firstName = $filteredFirstName;
$surname = $filteredSurname;
$email = $filteredEmail;
$password = $filteredPassword;
$permissionsID = $_POST['permissionsID'];

$req->execute();
    }
    
public function login() {
    if (!empty($_POST)) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $db = Db::getInstance();
//        $email = ($email);
//        $password = ($password);
        $req = $db->prepare("SELECT * FROM userTable WHERE email='$email' AND password='$password'");
        $req->execute();
        $user = $req->fetch();
        
        if($user){
            $loggedInUser = new User($user['firstName'], $user['surname'], $user['email'], $user['password'], $user['profilePic'], $user['permissionsID'] );
 
//            return new User($user['userID'], $user['firstName'], $user['surname'], $user['email'], $user['password'], $user['profilePic'], $user['permissionsID'] );
//         $_SESSION["userID"] = $loggedInUser['userID'];
         $_SESSION["firstName"] = $loggedInUser->firstName;
         $_SESSION["surname"] = $loggedInUser->surname;
         $_SESSION["email"] = $loggedInUser->email;
         $_SESSION["password"] = $loggedInUser->password;
         $_SESSION["profilePic"] = $loggedInUser->profilePic;
         $_SESSION["permissionsID"] = $loggedInUser->permissionsID;
         
                    return $loggedInUser;
         }
        else  {
            //replace with a more meaningful exception
            throw new Exception('NOT LOGGED IN');
            }
    }
}
  }

