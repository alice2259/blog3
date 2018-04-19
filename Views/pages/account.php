<?php // session_start();?>

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
