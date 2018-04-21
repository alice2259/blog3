    <!-- TITLE  -->
    
    <div class="jumbotron p-0 p-md-5">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">All Blog Posts</h1>
        </div>
    </div>

  
    <?php foreach ($posts as $post) { ?>
    
<div class="container">
  <div class="row">
    <div class="in-line block">
      <a href='?controller=posts&action=showPost&id=<?php echo $post->postID ?>'>
        <?php $file = 'Views/images/' . $post->headerImage;
            if(file_exists($file)){
                $img = "<img class=\"rounded imageBox\" style=\"horizontal-align:middle;\" src='$file'/>";
                echo $img;
            } else {
                echo "<img src='Views/images/default/noImage.jpg' class=\"rounded imageBox\" width='100%'>"; } ?>
          <br>
          <?php echo $post->title ?></p>
        </div>
      </a>
    </div>
  </div>

     <?php } ?>  
</div>
<!--     
<div class="container">
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div> -->