  
    <div class="jumbotron p-0 p-md-5">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">All Blog Posts</h1>
        </div>
    </div>
 
<div class="container-fluid">
  <div class="row justify-content-center">  
    <?php foreach ($posts as $post) { ?>
   

    <div class="text-center gallery rounded col-3 px-2 py-1 m-4">
        <p class="galleryDate mb-0" style="font:15px 'Roboto', sans-serif; text-align: right;">
            <?php echo $formatDate = date( 'dS F, Y', strtotime($post->datePublished));?></p>
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
      </a>   
<!--HIDDEN BUTTONS DEPENDANT ON USER ACCESS-->
            <?php
              if(isset($_SESSION["firstName"])) { 
                  if($_SESSION['permissionsID']==1) {
              ?> <div class="col-lg-2 ml-0 my-2"><a class="btn btn-secondary btn-sm text-white" href="?controller=posts&action=updatePost&id=<?php echo $post->postID ?>" role="button">Update</a></div>
              <?php   } else { ?>
            
              <button type="button" class="btn btn-primary btn-sm ml-1 my-2" data-toggle="modal" data-target="#deleteModal">Delete</button>
              <div class="ml-1 my-2"><a class="btn btn-secondary btn-sm text-white" href="?controller=posts&action=updatePost&id=<?php echo $post->postID ?>" role="button">Update</a></div>
              <?php } } ?>
              

     <!-- DELETE MODAL TO CHECK USER DEFINITELY WANT TO DELETE -->         
              
              <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Caution: Delete Post?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete the post <b><h6>"<?php echo $post->title ?>"?</h6></b></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="location.href='?controller=posts&action=deletePost&id=<?php echo $post->postID ?>'">Yes, delete</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </a>
 

     <?php } ?> <!-- end of foreach-->
    </div>
  </div>
</div>

