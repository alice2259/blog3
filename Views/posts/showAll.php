  
    <div class="jumbotron p-0 p-md-5">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">All Blog Posts</h1>
        </div>
    </div>
 
<div class="container-fluid">
  <div class="row justify-content-center">  
    <?php foreach ($posts as $post) { ?>
   

    <div class="text-center gallery rounded col-3 px-2 py-1 m-4">
        <p class="galleryDate mb-0" style="text-align: right;"><?php echo $post->datePublished ?></p>
      <a href='?controller=posts&action=showPost&id=<?php echo $post->postID ?>'>
        <?php $file = 'Views/images/' . $post->headerImage;
            if(file_exists($file)){
                $img = "<img class=\"imageBox mb-2\" style=\"horizontal-align:middle;\" src='$file'/>";
                echo $img;
            } else {
                echo "<img src='Views/images/default/noImage.jpg' class=\"imageBox\" width='100%'>"; } ?>
          <b class="galleryCaption"><?php echo $post->title ?></b>
          <br>
        <div class="row flex-auto ml-0">
       
<!--HIDDEN BUTTONS DEPENDANT ON USER ACCESS-->
            <?php
              if(isset($_SESSION["firstName"])) { 
                  if($_SESSION['permissionsID']==1) {
              ?> <div class="col-lg-2 ml-0 my-2"><a class="btn btn-secondary btn-sm" href="?controller=posts&action=updatePost" role="button">Update</a></div>
              <?php   } else { ?>
              <div class="ml-1 my-2"><a class="btn btn-secondary btn-sm text-white" href="?controller=posts&action=deletePost" role="button">Delete</a></div>
              <div class="ml-1 my-2"><a class="btn btn-secondary btn-sm text-white" href="?controller=posts&action=updatePost" role="button">Update</a></div>
              <?php } } ?>
              
        </div>
      </div>
    </a>
 

     <?php } ?> <!-- end of for each-->
    </div>
  </div>
</div>

