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

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM post ORDER BY post.datePublished DESC;');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['postID'], $post['title'], $post['userID'], $post['datePublished'], $post['headerImage'], $post['imageCaption'], $post['content']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM post WHERE userID = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['postID'], $post['title'], $post['userID'], $post['datePublished'], $post['headerImage'], $post['imageCaption'], $post['content']);
    }
  
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
        
    }
  
  
  
  

