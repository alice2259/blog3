<style>
   table {border-collapse:collapse; table-layout:fixed; width:310px;}
   table td {width:400px; word-wrap:break-word;}
   </style>

    <div class="container">
        <header class="blog-header py-3"></header>
    
    <!-- POST TITLE  -->
    
    <div class="jumbotron p-3 p-md-5">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic"><?php echo strtoupper($post->title); ?></h1>
        </div>
    </div>
 
    <!-- POST HEADER IMAGE -->
   
    <div class="img container-fluid jumbotron text-white rounded py-5 header-image" style="background-image: url(<?php 
        $file = 'Views/images/' . $post->headerImage;
            if(file_exists($file)){
                $img = $file;
                echo $img;
            } else {
                echo 'Views/images/default/noImage.jpg'; } ?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    </div> 

    <main role="main" class="container">  
        <div class="row">
            <div class="col-md-8 blog-main">
                <div class="blog-post">
                          
                        <!-- CAPTION AND DATE PUBLLISHED -->
                        
                    <h2 class="blog-post-title"><?php echo ($post->imageCaption); ?></h2>
                    <br>
                     <p class="blog-post-meta">Date published: <?php echo $formatDate = date( 'dS F, Y', strtotime($post->datePublished));?></p>
                     <hr class='line'>
                     <br>
           
                        <!-- POST CONTENT -->

                    <p><?php echo $post->content; ?></p>
                </div>
                
                    
                
        <!-- NAV TO TAKE TO FORWARD/BACK ONE POST -->

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
            </div>
            
            
            
        
            
            <!-- BLOG AUTHOR INFO - SIDE BAR -->

        <aside class="col p-0 blog-sidebar text-center">
          <div class="p-3 mb-3 bg-light rounded">
            <div class="">
              <?php 
                $profileFile = 'Views/images/' . $post->profilePic;
                    if(file_exists($profileFile)){
                $profileImg = "<img class=\"img authorImage\" src='$profileFile'/>";
                echo $profileImg;
                    } else {
                echo "<img class=\"img authorImage\" src='Views/images/default/noImage.jpg' width='150' />"; } ?>
            </div>
            <br>
            
            <h6 class="font-italic">Author:</h6>
            <h4><b><?php echo($post->firstName) . " " . ($post->surname) ?></b> </h4>
            <hr class='line'>
            </div>
            
            <!-- THINK WILL CHNGE THIS TO OTHER POSTS BY SAME AUTHOR -->

            <div class="p-3">
                <h4 class="font-italic" style="text-align: left;">Other Posts by:
                    <br>
                <?php echo($post->firstName) . " " . ($post->surname) ?></h4>
            </div>
            <div style="background-color: #aaa; height: 100px; width: 100%; padding: 20px;"></div><br>
            <div style="background-color: #aaa; height: 100px; width: 100%; padding: 20px;"></div><br>
            <div style="background-color: #aaa; height: 100px; width: 100%; padding: 20px;"></div><br>
            
            
            <!-- SOCIAL MEDIA -->

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->
      
      
      <!-- COMMENTS TABLE -->
            
        <div style='width:75%; display:table;  margin:0 auto;'>         
    <table class="table table-striped justify-content-center">
    
      <?php foreach ($comments as $comment) { ?>
    
        <!--    TABLE ROW FOREACH SEARCH RESULT RETURNED -->
        <tr class="row" style="margin:0 auto;">
          <td class="ml-3" style="width:100px; padding-top:50px;"> 
            <div> 
                <img class='commentImage' src='Views/images/astro.png'>
            </div>
          </td>
          <td class="col mr-5 ml-3">
              <br> 
              <h5><b><?php echo $comment->commenterName;?></b></h5>
              <span style="font-size:12px;"><?php echo $commentDate = date( 'dS F, Y - h:ia', strtotime($comment->date)); ?></span>  
              <hr class="line">
              <p style="font-size:14px;"><?php echo $comment->comment; ?></p>
              <br>                  
          </td>
        </tr>
      <?php } ?>   <!-- END OF THE FOREACH LOOP -->
    </table>
           
      <!-- INSERT COMMENT FORM -->       
      
    <div>
        <p>Add Comment</p>
      <form class="form justify-content-center" action="" method="POST">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              <input type="text" class="form-control py-3" name="commenterName" placeholder="Name">
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control py-3" name="comment" placeholder="Comment">
            </div> 
              <input type="button" value="Submit" action="submit">
          
      </div>  
      
        </div>        
    </div>
      

    </main><!-- /.container -->
   </div>