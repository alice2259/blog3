<?php // session_start();?>

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href='/blog3'>TIME TRAVEL</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href='?controller=posts&action=createPost'>Create Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Update Post</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="?controller=users&action=register">Register</a>
                    <a class="dropdown-item" href="#">Link</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Link</a>
                </div>
                        </li>
                    </ul>
            </nav>
        </header>

<div id="" class="container-fluid text-left"> 
    <?php
    if(!empty($_SESSION)){
       echo "Hello " . $_SESSION['firstName'] . " . What would you like to do today?"; 
    } 

    if (empty($_SESSION)){
      echo "NO INFORMATION ENTERED.<br>Please go back and try again.";
    }
    ?>
</div> 
