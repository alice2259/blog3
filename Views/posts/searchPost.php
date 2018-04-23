<style>
   table {border-collapse:collapse; table-layout:fixed; width:310px;}
   table td {width:400px; word-wrap:break-word;}
   </style>



<div class="jumbotron p-0 p-md-5">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Search Results</h1>
        </div>
    </div>


    <table class="table table-striped">
    
      <?php foreach ($searchPosts as $post) { ?>
    
        <!--    TABLE ROW FOREACH SEARCH RESULT RETURNED -->
      <tr class="row searchResultBox">
          <td style="float:left"> 
          <a href="?controller=posts&action=showPost&id=<?php echo $post->postID ?>">

            <div class="hoverBox text-center gallery rounded col-3 py-1 m-4" style="background-image: url(<?php 
                $file = 'Views/images/' . $post->headerImage;
                    if(file_exists($file)){
                        $img = $file;
                        echo $img;
                    } else {
                        echo 'Views/images/default/noImage.jpg'; } ?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;"> 
            <div class="col date"><?php echo $formatDate = date( 'dS F, Y', strtotime($post->datePublished));?></p> </div>

            <div class="title col"><?php echo $post->title ?></b></div>
            <div class="overlay"></div>
            <br> </a>
            </div>
          </td>
          <td>
              <br>
              <h4><b><?php echo $post->imageCaption;?></b></h4>
              <span style="font-size:12px;"><?php echo "Author: " . $post->firstName . " " . $post->surname;?></span>
              <hr class="line">
              <p style="font-size:12px;"><?php $smallText = substr($post->content, 0, 200);
              echo $smallText . "...";   ?></p>
              <br>
              <a href="?controller=posts&action=showPost&id=<?php echo $post->postID?>" class="readButton" role="button">READ MORE</a>             
          </td>
      </tr>
      <?php } ?>   <!-- END OF THE FOREACH LOOP -->
</table>




  </tbody>
</table>
    