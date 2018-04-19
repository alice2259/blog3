<?php session_start(); ?>

<h1>CREATE A POST</h1>
<p>Fill in the following form to upload a new post:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    
    <h2>Create New Post:</h2>
    <p>
        <input class="" type="text" name="title" required autofocus>
        <label>Title</label>
    </p>
    <p>
        <input class="" type="text" name="content" required>
        <label>Content</label>
    </p>
    <p>
        <input class="" type="int" name="userID" required>
        <label>User ID</label>
    </p>
    <p>
        <input class="" type="date" name="datePublished" required>
    </p>    
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="w3-btn w3-pink" required />
  <p>
      <input class="w3-input" type="text" name="imageCaption" required>
      <label>Image caption</label>      
  </p>
  <p>
    <input class="w3-btn w3-pink" type="submit" value="Upload">
  </p>
  
</form>