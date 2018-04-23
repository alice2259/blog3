<?php // session_start();?>

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
                          
                        <!-- CAPTION AND DATEE PUBLLISHED -->
                        
                    <h2 class="blog-post-title"><?php echo ($post->imageCaption); ?></h2>
                    <br>
                     <p class="blog-post-meta">Date published: <?php echo $formatDate = date( 'dS F, Y', strtotime($post->datePublished));?></p>
                     <hr>
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

        <aside class="col ml-5 p-0 blog-sidebar text-center">
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
            </div>
            
            <!-- THINK WILL CHNGE THIS TO OTHER POSTS BY SAME AUTHOR -->

            <div class="p-3">
                <h4 class="font-italic ">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
          </div>
            
            <!-- SOCIAL MEDIA -->

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->
   </div>