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

    public function __construct($postID, $title, $userID, $datePublished, $headerImage, $imageCaption, $content) {
      $this->postID         = $postID;
      $this->title          = $title;
      $this->userID         = $userID;
      $this->datePublished  = $datePublished;
      $this->headerImage    = $headerImage;
      $this->imageCaption   = $imageCaption;
      $this->content        = $content;
    }

    // DISPLAY ALL POSTS
    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM post ORDER BY post.datePublished DESC;');

      foreach($req->fetchAll() as $post) {
      $list[] = new Post($post['postID'], $post['title'], $post['userID'], $post['datePublished'], $post['headerImage'], $post['imageCaption'], $post['content']);
      }
      return $list;
    }

    // DISPLAY SPECIFIC POST BY USER ID
    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM post WHERE postID = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['postID'], $post['title'], $post['userID'], $post['datePublished'], $post['headerImage'], $post['imageCaption'], $post['content']);
    }
  
    // SEARCH ALL POSTS VIA AN INPUT KEYWORD
    public static function search() {
      $list = [];
      $db = Db::getInstance();
      
        if(isset($_POST['search'])){
            $input = $_POST['search'];
            
            $sql = "SELECT post.postID, post.title, post.userID, post.datePublished, post.headerImage, post.imageCaption, post.content FROM post WHERE post.title LIKE '" . $input . "%';";
        } else {
            $sql = "SELECT post.postID, post.title, post.userID, post.datePublished, post.headerImage, post.imageCaption, post.content FROM post ORDER BY post.datePublished DESC;";
        }
        
        $req = $db->query($sql);
        
        foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['postID'], $post['title'], $post['userID'], $post['datePublished'], $post['headerImage'], $post['imageCaption'], $post['content']);
        }

        return $list;
        }
 
        public static function update() {
            $db = Db::getInstance();
            $req = $db->prepare("UPDATE post set title=:title, content=:content, datePublished=:datePublished, headerImage=:headerImage, imageCaption=:imageCaption where postID=:postID");
            $req->bindParam(':postID', $postID);
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
            $title = $filteredTitle;
            $content = $filteredContent;
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
//            $req->bindParam(':headerImage', $headerImage);
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
            $userID = $_SESSION["userID"];
            $content = $filteredContent;
            $datePublished = $filteredDatePublished;
//            $headerImage = $_POST['headerImage'];
            $imageCaption = $filteredImageCaption;
            $req->execute();

            //upload product image
            Post::uploadFile($title);
        }
       
        const AllowedTypes = ['image/jpeg', 'image/jpg'];
        const InputKey = 'myUploader';

        public static function uploadFile(string $imageCaption) {
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
        $path = "C:/xampp/htdocs/blog3/views/images/";
	$destinationFile = $path . $imageCaption . '.jpeg';
        
        if (!move_uploaded_file($tmpFile, $permFile)) {
            die ("Handle Error!");
        }
        if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
        if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}

public static function remove($postID) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $postID = intval($postID);
      $req = $db->prepare('delete FROM post WHERE postID = :postID');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('postID' => $postID));
  }



    }
  
  
  
  

