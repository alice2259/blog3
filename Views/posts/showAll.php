    <!-- TITLE  -->
    
    <div class="jumbotron p-0 p-md-5">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">All Blog Posts</h1>
        </div>
    </div>

<div class="container-fluid">
  <div class="row justify-content-center">  
    <?php foreach ($posts as $post) { ?>
   

    <div class="text-center gallery rounded col-3 px-2 py-3 m-4">
      <a href='?controller=posts&action=showPost&id=<?php echo $post->postID ?>'>
        <?php $file = 'Views/images/' . $post->headerImage;
            if(file_exists($file)){
                $img = "<img class=\"imageBox mb-2\" style=\"horizontal-align:middle;\" src='$file'/>";
                echo $img;
            } else {
                echo "<img src='Views/images/default/noImage.jpg' class=\"imageBox\" width='100%'>"; } ?>
          <b class="galleryCaption"><?php echo $post->title ?></b>
          <br>
          <p class="galleryDate mb-0" style="text-align: right;"><?php echo $post->datePublished ?></p>
        </div>
      </a>
 

     <?php } ?> 
           </div>
  </div>
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