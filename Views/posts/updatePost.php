<div class="jumbotron p-3 p-md-5">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Update Post</h1>
        <p>You are updating entry: <i><b style="font-size: 20px;">"<?php echo $post->title;?>"</b></i>
            <br>
        Last published: <?php echo $formatDate = date( 'dS F, Y', strtotime($post->datePublished));?></p>
    </div>
</div>
    
<div class="container">
   
    <div class="img container-fluid jumbotron text-white rounded bg-dark py-5">

        <form class="form" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">

                    <!-- POST TITLE -->
                    <div class="col-sm-8">
                    <label>Title</label>
                    <input type="text" class="form-control py-3" name="title" value="<?=$post->title;?>">
                    </div>

                    <!-- PUBLISHED DATE -->
                    <div class="col">
                        <label>Date Published</label>
                        <input type="date" class="form-control py-2" name="datePublished" value="<?=$post->datePublished;?>">
                    </div>
                </div>

                <!-- POST SUB-TITLE -->
                <div class="form-group pt-3">
                    <label for="subTitle">Sub-title</label>
                    <input type="text" class="form-control" id="subTitle" name="imageCaption" value="<?=$post->imageCaption;?>">
                </div>

                <!-- POST CONTENT INPUT -->
                <div class="form-group pt-2">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="20"><?=$post->content;?>"</textarea>
                </div>
<!--
                 AUTHOR  (incase we can't do it from a session) 
                <div class="form-group col-sm-3 py-3">
                    <label for="author"></label>
                    <select class="form-control" name="userID" id="author">
                            <option>SELECT AUTHOR</option>
                            <option value="2">Alice</option>
                            <option value="3">Faye</option>
                            <option value="1">Jenna</option>
                            <option value="4"> Lucy</option>
                        </select>
                </div>-->

                <!-- UPLOAD IMAGE -->
                <br>
                <p>Current Title Image</p>
                <div class="form-group col-sm-4 bg-light rounded p-2" style="color: #000;">
                    
                    <input  type="hidden" 
                            name="MAX_FILE_SIZE" 
                            value="10000000" />
                    
        <?php 
        $file = 'Views/images/' . $post->headerImage;
            if(file_exists($file)){
                $img = "<img src='$file'/>";
                echo $img;
            } else {
                echo "<img src='Views/images/default/noImage.jpg' width='150' />"; } ?>

                    <br>
                    <p> Upload new file? </p>
                    <input type="file" name="headerImage" value="send" />
                </div>    


                <!-- SUBMIT POST - BUTTON -->
                <div>    
                <input role="button" class="btn btn-default" type="submit" value="Update Post">
                </div>
            </div>
        </form> 
    </div>
</div>

