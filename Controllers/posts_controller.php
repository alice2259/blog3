<?php
  class PostsController {
    public function showAll() {
      // we store all the posts in a variable
      $posts = Post::all();
      require_once('views/posts/showAll.php');
    }

    public function showPost() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $post = Post::find($_GET['id']);
      require_once('views/posts/showPost.php');
    }

    public function searchPost() {
      
      $searchPosts = Post::search();
      require_once('views/posts/searchPost.php');
    }
    
    public function createPost() {
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/posts/create.php');
      }
      else { 
            Post::create();
             
            $posts = Post::all();
            require_once('views/posts/showAll.php');
      }
      
    }
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['postID']))
        return call('pages', 'error');

        // we use the given id to get the correct product
        $post = Post::find($_GET['postID']);
      
        require_once('views/posts/show.php');
        }
      else
          { 
            $id = $_GET['postID'];
            Post::update($postID);
                        
            $posts = Post::all();
            require_once('views/posts/readAll.php');
      }
      
    }
    public function delete() {
            Post::remove($_GET['postID']);
            
            $posts = Post::all();
            require_once('views/posts/readAll.php');
      }
    }
  
