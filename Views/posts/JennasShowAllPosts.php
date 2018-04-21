<!DOCTYPE html>
    <!-- TITLE  -->
    

    
    <div class="jumbotron p-0 p-md-5">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">All Blog Posts</h1>
        </div>
    </div>

<div class="img container jumbotron text-white rounded bg-dark py-5">  
    
    <?php foreach ($posts as $post) { ?>
    
        <div class="row">
          <div class="col-md-4 px-5">
            <div class="d-inline-block">
              <a href='?controller=posts&action=showPost&id=<?php echo $post->postID ?>'>
                
                  <?php $file = 'Views/images/' . $post->headerImage;
                    if(file_exists($file)){
                        $img = "<img class=\"rounded d-inline-block\" src='$file'/>";
                        echo $img;
                    } else {
                        echo "<img src='Views/images/default/noImage.jpg' class=\"rounded\" width='100%'>"; } ?>
                
                    <div class="caption">
                        <p><?php echo $post->title ?></p>
                    </div>
              </a>
            </div>
          </div>
        </div>
    
    <?php } ?>  
</div>
