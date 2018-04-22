<?php // session_start(); ?>

    
    <!-- TITLE  -->
    
<div class="jumbotron p-3 p-md-5">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Create a Post</h1>
        <p>Fill in the following form to upload a new post:</p>
    </div>
</div>
    
<div class="container">
   
    <div class="img container-fluid jumbotron text-white rounded bg-dark py-5">

        <form class="form" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">

                    <!-- POST TITLE -->
                    <div class="col-sm-8">
                    <input type="text" class="form-control py-3" name="title" placeholder="Title">
                    </div>

                    <!-- CREATION DATE -->
                    <div class="col">
                        <input type="date" class="form-control py-2" name="datePublished">
                    </div>
                </div>

                <!-- POST SUB-TITLE -->
                <div class="form-group pt-3">
                    <label for="subTitle"></label>
                    <input type="text" class="form-control" id="subTitle" name="imageCaption" placeholder="Sub-title">
                </div>

                <!-- POST CONTENT INPUT -->
                <div class="form-group pt-2">
                    <label for="exampleFormControlTextarea1"></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="content" placeholder="Enter Blog content here..." rows="20"></textarea>
                </div>

                <!-- AUTHOR  (incase we can't do it from a session) -->
                <div class="form-group col-sm-3 py-3">
                    <label for="author"></label>
                    <select class="form-control" name="userID" id="author">
                            <option>SELECT AUTHOR</option>
                            <option value="2">Alice</option>
                            <option value="3">Faye</option>
                            <option value="1">Jenna</option>
                            <option value="4"> Lucy</option>
                        </select>
                </div>

                <!-- UPLOAD IMAGE -->
                <div class="form-group col-sm-3">
                    <P>Upload an image</p>
                    <input  type="hidden" 
                            name="MAX_FILE_SIZE" 
                            value="10000000" />

                    <input type="file" name="headerImage" value="send" required />
                </div>    


                <!-- SUBMIT POST - BUTTON -->
                <div>    
                <input role="button" class="btn btn-default" type="submit" value="Upload Post">
                </div>
            </div>
        </form> 
    </div>
</div>
