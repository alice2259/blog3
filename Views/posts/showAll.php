<?php session_start();?>

  <div class="container">
        <header class="blog-header py-3"></header>
    
    <!-- TITLE  -->
    
    <div class="jumbotron p-3 p-md-5">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic"> All Posts </h1>
        </div>
    </div>
   
    <div class="img container-fluid jumbotron text-white rounded bg-dark py-5">


<?php foreach($posts as $post) { ?>
  <p>
  <h4><?php echo $post->title; ?></h4>
    <a href='?controller=posts&action=showPost&id=<?php echo $post->postID; ?>'>See content</a>
    <br>
    Date published: <?php echo $post->datePublished; ?>
  </p>
<?php } ?> 
  
    </div>
  </div>