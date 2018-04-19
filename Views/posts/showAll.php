<?php session_start();?>

<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
  <h4><?php echo $post->title; ?></h4>
    <a href='?controller=posts&action=showPost&id=<?php echo $post->postID; ?>'>See content</a>
    <br>
    Date published: <?php echo $post->datePublished; ?>
  </p>
<?php } ?> 