<div class="jumbotron p-0 p-md-5">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Search Results</h1>
        </div>
    </div>


   <table class="table table-striped">
    
            <?php foreach ($searchPosts as $post) { ?>
    
<!--    <div class="searchResultBox"> -->
<tr class="row searchResultBox">
        
    <td class="col-md-4">
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
    </div>
        
        
        </td>
   
 </tr>
   
        <?php } ?>

         
</table>