<?php
require_once ('Controllers/posts_controller.php');

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
      public $commentDate;


    public function __construct($postID, $title, $userID, $datePublished, $headerImage, $imageCaption, $content, $profilePic, $firstName, $surname, $commenterName, $comment, $commentDate) {
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
      $this->commentDate    = $commentDate;      
    }
    
     public static function showComments() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT comment.commenterName, comment.comment, comment.date FROM comment '
              . 'INNER JOIN post ON comment.postID=post.postID WHERE post.postID = :id ORDER BY post.datePublished DESC;');

      foreach($req->fetchAll() as $comment) {
      $list[] = new Post($comment['postID'], $comment['title'], $comment['userID'], $comment['datePublished'], $comment['headerImage'], $comment['imageCaption'], $comment['content'], $comment['profilePic'], $comment['firstName'], $comment['surname'], $comment['commenterName'], $comment['comment'], $comment['commentDate']);
      }
      return $list;
    }
}