<?php
//require_once ('Models/post.php');

class Comment extends Post {
//    public $postID;
//    public $title;
//    public $userID;
//    public $datePublished;
//    public $headerImage;
//    public $imageCaption;
//    public $content;
//    public $profilePic;
//    public $firstName;
//    public $surname;
      public $commenterName;
      public $comment;
      public $date;
      public $blogPostID;


    public function __construct($postID, $title, $userID, $datePublished, $headerImage, $imageCaption, $content, $profilePic, $firstName, $surname, $commenterName, $comment, $date, $blogPostID) {
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
      $this->commenterName  = $commenterName;
      $this->comment        = $comment;
      $this->date           = $date; 
      $this->blogPostID     = $blogPostID;
    }
    
    public static function showComments($id) {
      $list = [];
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT post.*, userTable.firstName, userTable.surname, userTable.profilePic, comment.commenterName, comment.comment, comment.date, comment.blogPostID FROM post '
              . 'INNER JOIN comment ON post.postID=comment.blogPostID '
              . 'INNER JOIN userTable ON post.userID=userTable.userID WHERE post.postID = :id ORDER BY comment.date DESC;');
      $req->execute(array('id' => $id));
      
      foreach($req->fetchAll() as $comment) {
      $list[] = new Comment ($comment['postID'], $comment['title'], $comment['userID'], $comment['datePublished'], $comment['headerImage'], $comment['imageCaption'], $comment['content'], $comment['profilePic'], $comment['firstName'], $comment['surname'], $comment['commenterName'], $comment['comment'], $comment['date'], $comment['blogPostID']);
      }
      return $list;
    }
    
    public static function insertComment() {
        $db = Db::getInstance();
        $req = $db->prepare("INSERT INTO comment(commenterName, comment, date, blogPostID VALUES(:commenterName, :comment, :date, :blogPostID)");
        $req->bindParam(':commenterName', $firstName);
        $req->bindParam(':comment', $surname);
        $req->bindParam(':date', $date);
        $req->bindParam(':blogPostID', $blogPostID);

        if(isset($_POST['commenterName'])&& $_POST['commenterName']!=""){
            $filteredComment = filter_input(INPUT_POST,'commenterName', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        if(isset($_POST['comment'])&& $_POST['comment']!=""){
            $filteredContent = filter_input(INPUT_POST,'comment', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        $commenterName = $filteredCommenterName;
        $comment = $filteredComment;
        $date = date('Y-m-d H:i:s');
        $blogPostID = $_GET['id'];
        $req->execute();
    }
    
}