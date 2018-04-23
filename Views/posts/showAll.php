  
    <div class="jumbotron p-0 p-md-5">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">All Blog Posts</h1>
        </div>
    </div>

<!-- START OF FOREACH LOOP -->

<div class="container-fluid">
  <div class="row justify-content-center">  
    <?php foreach ($posts as $post) { ?>
      
<a href="?controller=posts&action=showPost&id=<?php echo $post->postID ?>">

      <div class="hoverBox text-center gallery rounded col-3 py-1 m-4" style="background-image: url(<?php 
        $file = 'Views/images/' . $post->headerImage;
            if(file_exists($file)){
                $img = $file;
                echo $img;
            } else {
                echo 'Views/images/default/noImage.jpg'; } ?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;"> 
        <div class="col date"><?php echo $formatDate = date( 'dS F, Y', strtotime($post->datePublished));?></p> </div>
        
 <!-- GALLERY IMAGE TITLES -->
 
    <div class="title col"><?php echo $post->title ?></b></div>
        <div class="overlay"></div>
        <br> </a>
    <div class="row flex-auto ml-0">
         
<!--HIDDEN BUTTONS DEPENDANT ON USER ACCESS--> 

    <div class="secret row">
            <?php
              if(isset($_SESSION["firstName"])) { 
                  if($_SESSION['permissionsID']==1) {
              ?> <div class="col-lg-2 ml-0 my-2"><a class="btn btn-secondary btn-sm text-white" href="?controller=posts&action=updatePost&id=<?php echo $post->postID ?>" role="button">Update</a></div>
              <?php   } else { ?>
            
              <button type="button" class="btn btn-primary btn-sm ml-1 my-2" data-toggle="modal" data-target="#deleteModal">Delete</button>
              <div class="ml-1 my-2"><a class="btn btn-secondary btn-sm text-white" href="?controller=posts&action=updatePost&id=<?php echo $post->postID ?>" role="button">Update</a></div>
              <?php } } ?>
    </div>

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

     <?php } ?> <!-- END OF FOR EACH BRACKET -->
    
    </div>
  </div>
</div>

