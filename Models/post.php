<?php
  class Post {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $postID;
    public $title;
    public $userID;
    public $datePublished;
    public $headerImage;
    public $imageCaption;
    public $content;
    public $profilePic;
    public $firstName;
    public $surname;

    public function __construct($postID, $title, $userID, $datePublished, $headerImage, $imageCaption, $content, $profilePic, $firstName, $surname) {
      $this->postID         = $postID;
      $this->title          = $title;
      $this->userID         = $userID;
      $this->datePublished  = $datePublished;
      $this->headerImage    = $headerImage;
      $this->imageCaption   = $imageCaption;
      $this->content        = $content;
      $this->profilePic     = $profilePic;
      $this->firstName      = $firstName;
      $this->surname        = $surname;
      
      // This just takes the weird 2018-04-22 date type My SQL gives us and assigns it back in a a nice date format
//      $formatDate = date( 'dS F, Y', strtotime($this->datePublished));
//      $this->datePublished  = $formatDate;
    }

    // DISPLAY ALL POSTS
    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT post.*, userTable.firstName, userTable.surname, userTable.profilePic FROM post 
                        INNER JOIN userTable ON post.userID=userTable.userID ORDER BY post.datePublished DESC;');

      foreach($req->fetchAll() as $post) {
      $list[] = new Post($post['postID'], $post['title'], $post['userID'], $post['datePublished'], $post['headerImage'], $post['imageCaption'], $post['content'], $post['profilePic'], $post['firstName'], $post['surname']);
      }
      return $list;
    }

    // DISPLAY SPECIFIC POST BY USER ID
    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT post.*, userTable.firstName, userTable.surname, userTable.profilePic FROM post 
                            INNER JOIN userTable ON post.userID=userTable.userID WHERE postID = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['postID'], $post['title'], $post['userID'], $post['datePublished'], $post['headerImage'], $post['imageCaption'], $post['content'], $post['profilePic'], $post['firstName'], $post['surname']);
    }
  
    // SEARCH ALL POSTS VIA AN INPUT KEYWORD ///  THIS NEEDS UPDATING BECAUSE OF THE 3 NEW USER INPUTSSS!!!
    public static function search() {
      $list = [];
      $db = Db::getInstance();
      
        if(isset($_POST['search'])){
            $input = $_POST['search'];
            
            $sql = "SELECT DISTINCT post.postID, post.title, userTable.userID, post.datePublished, post.headerImage, post.imageCaption, post.content, userTable.profilePic, userTable.firstName, userTable.surname FROM post "
            . "INNER JOIN userTable ON post.userID=userTable.userID "  
            . "INNER JOIN post_Tag ON post.postID=post_Tag.postID "
            . "INNER JOIN tag ON post_Tag.tagID=tag.tagID "
            . "WHERE post.title LIKE '%".$input."%' "
            . "UNION "
            . "SELECT DISTINCT post.postID, post.title, userTable.userID, post.datePublished, post.headerImage, post.imageCaption, post.content, userTable.profilePic, userTable.firstName, userTable.surname FROM post "

            . "INNER JOIN userTable ON post.userID=userTable.userID "  
            . "INNER JOIN post_Tag ON post.postID=post_Tag.postID " 
            . "INNER JOIN tag ON post_Tag.tagID=tag.tagID " 
            . "WHERE userTable.firstName LIKE '%".$input."%' "
            . "UNION " 
            . "SELECT DISTINCT post.postID, post.title, userTable.userID, post.datePublished, post.headerImage, post.imageCaption, post.content, userTable.profilePic, userTable.firstName, userTable.surname FROM post "
            . "INNER JOIN userTable ON post.userID=userTable.userID "  
            . "INNER JOIN post_Tag ON post.postID=post_Tag.postID "
            . "INNER JOIN tag ON post_Tag.tagID=tag.tagID "
            . "WHERE userTable.surname LIKE '%".$input."%'";
        } else {
            echo "No posts to display";
        }
        
        $req = $db->query($sql);
        
        foreach($req->fetchAll() as $post) {

        $list[] = new Post($post['postID'], $post['title'],$post['userID'], $post['datePublished'], $post['headerImage'], $post['imageCaption'], $post['content'], $post['profilePic'], $post['firstName'], $post['surname']);

        }

        return $list;
        }
 
    public static function update() {
        $db = Db::getInstance();
        $req = $db->prepare("UPDATE post SET title=:title, datePublished=:datePublished, content=:content, headerImage=:headerImage, imageCaption=:imageCaption WHERE post.postID=:id");
        $req->bindParam(':id', $postID);
        $req->bindParam(':title', $title);
        $req->bindParam(':content', $content);
        $req->bindParam(':datePublished', $datePublished);
        $req->bindParam(':headerImage', $headerImage);
        $req->bindParam(':imageCaption', $imageCaption);

        if(isset($_POST['title'])&& $_POST['title']!=""){
            $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['content'])&& $_POST['content']!=""){
            $filteredContent = filter_input(INPUT_POST,'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['datePublished'])&& $_POST['datePublished']!=""){
            $filteredDatePublished = filter_input(INPUT_POST,'datePublished', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['imageCaption'])&& $_POST['imageCaption']!=""){
            $filteredImageCaption = filter_input(INPUT_POST,'imageCaption', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $title = $filteredTitle;
        $datePublished = $filteredDatePublished;
        $content = $filteredContent;
        $headerImage = ($_FILES['headerImage']['name']);
        $imageCaption = $filteredImageCaption;
        $req->execute();


        if (!empty($_FILES[self::InputKey]['headerImage'])) {
		Post::uploadFile($headerImage);
	}
    }
    
     // CREATE A NEW POST & INSERT INTO DATABASE
    public static function create() {
        $db = Db::getInstance();
        $req = $db->prepare("INSERT INTO post(title, userID, content, datePublished, headerImage, imageCaption) VALUES (:title, :userID, :content, :datePublished, :headerImage, :imageCaption)");
        $req->bindParam(':title', $title);
        $req->bindParam(':userID', $userID);
        $req->bindParam(':content', $content);
        $req->bindParam(':datePublished', $datePublished);
        $req->bindParam(':headerImage', $headerImage);
        $req->bindParam(':imageCaption', $imageCaption);

        if(isset($_POST['title'])&& $_POST['title']!=""){
            $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
//            if(isset($_SESSION['userID'])&& $_POST['userID']!=""){
//                $filteredUserID = filter_input(INPUT_POST,'userID', FILTER_SANITIZE_SPECIAL_CHARS);
//            }
        if(isset($_POST['content'])&& $_POST['content']!=""){
            $filteredContent = filter_input(INPUT_POST,'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['datePublished'])&& $_POST['datePublished']!=""){
            $filteredDatePublished = filter_input(INPUT_POST,'datePublished', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['imageCaption'])&& $_POST['imageCaption']!=""){
            $filteredImageCaption = filter_input(INPUT_POST,'imageCaption', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $title = $filteredTitle;
        $userID = $_POST['userID'];
//            $userID = $_SESSION["userID"];
        $content = $filteredContent;
        $datePublished = $filteredDatePublished;
        $headerImage = ($_FILES['headerImage']['name']);
        $imageCaption = $filteredImageCaption;
        $req->execute();

//            echo var_dump($headerImage);  SO CONFUSED BECAUSE VARD_DUMP SAYS IT IS A STRING
            
            Post::uploadFile($headerImage);
        }
    
        // UPLOAD A FILE TO BOTH dB & OUR DIRECTORY
        const AllowedTypes = ['image/jpeg', 'image/jpg'];
        const InputKey = 'headerImage';

    public static function uploadFile(string $headerImage) {
        if (empty($_FILES[self::InputKey])) {
            trigger_error("File Missing!");
        }
        if ($_FILES[self::InputKey]['error'] >0) {
            trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
        }
        if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
        }
        
        $tempFile= $_FILES[self::InputKey]['tmp_name'];
        $path = "/Applications/XAMPP/xamppfiles/htdocs/blog3/Views/images";
	$destinationFile = $path . $headerImage;
        
        if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
        if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}

    // REMOVE A POST BY ID
    public static function remove($postID) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $postID = intval($postID);
      $req = $db->prepare('delete FROM post WHERE postID = :postID');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('postID' => $postID));
    }    
    
    // DISPLAY LAST 7 POSTS
    public static function populateHomepageHeader() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT post.*, userTable.firstName, userTable.surname, userTable.profilePic FROM post 
                        INNER JOIN userTable ON post.userID=userTable.userID ORDER BY post.datePublished DESC LIMIT 1;');

      foreach($req->fetchAll() as $post) {
      $list[] = new Post($post['postID'], $post['title'], $post['userID'], $post['datePublished'], $post['headerImage'], $post['imageCaption'], $post['content'], $post['profilePic'], $post['firstName'], $post['surname']);
      }
      return $list;
    }
    
    
}