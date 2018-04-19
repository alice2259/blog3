<?php session_start();?>

<p>Search Results</p>

<?php foreach($searchPosts as $post) { ?>
  <p>
    <h4><?php echo $post->title; ?></h4>
    <a href='?controller=posts&action=showPost&id=<?php echo $post->postID; ?>'>See content</a>
  </p>
<?php } ?>