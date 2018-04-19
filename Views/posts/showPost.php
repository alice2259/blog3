<?php session_start();?>

<!--post header image-->
<div class="header container-fluid";>
     <br>
    <?php 
    $file = 'Views/images/' . $post->headerImage;
    if(file_exists($file)){
    $img = "<img src='$file'/>";
    echo $img;
    }
    else
    {
    echo "<img src='Views/images/default/noImage.jpg' width='150' />";
    }
    ?>

</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2><?php echo strtoupper($post->title); ?></h2>
      <h5>published: <?php echo $post->datePublished; ?></h5>
      <br>
      <p><?php echo $post->content; ?></p>
      <br>
      <div class="titleImg" style="height:200px;">Image</div>
    </div>
  </div>
  
  <div class="rightcolumn">
    <div class="card">
      <div class="authorImg" style="height:100px; width:100px;">Image</div>
      <br>
      <h4><p>AUTHOR:</p></h4>
    <div class="card">
      <h5>Other Posts by this author:</h5>
      <div class="authorPostsImg">Image</div><br>
      <div class="authorPostsImg">Image</div><br>
      <div class="authorPostsImg">Image</div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

   