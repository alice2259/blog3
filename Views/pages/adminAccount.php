<div class="jumbotron p-0 p-md-5">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic"><?php echo "Welcome " . $_SESSION['firstName'] . ".<br><h3>This is the Admin Page</h3>";?></h1>
        </div>
    </div>
    
    <div class="container">
        
        
         <a class="btn btn-secondary btn-lg" href="?controller=posts&action=createPost" role="button">Create Post</a>
         <a class="btn btn-secondary btn-lg" href="?controller=users&action=register" role="button">Register a new blogger</a>
         <button type="button" class="btn btn-secondary btn-lg">Large button</button>
         <div class=" jumbotron text-white rounded bg-light py-5">   
        </div>    
    
      
         
    </div>
   
