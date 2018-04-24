<!DOCTYPE html>
<html>
    <?php session_start();?>
    <head>
        <!--link to stylesheets -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link rel="stylesheet" href="views/css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Lato:300|Comfortaa:700|Rajdhani" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    </head>
    
    <body>
        <!-- NAV BAR (nested in Header) -->
      <header>
          
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <a class="navbar-brand" href="/blog3" style="font:30px 'Amatic SC', cursive; font-weight:700;">The Time Traveller's Life</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="?controller=posts&action=showAll">All Expeditions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?controller=pages&action=aboutUs">Time Bandits</a>
            </li>
          </ul>
            <form class="form-inline my-2 my-lg-0" action='?controller=posts&action=searchPost' method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn btn-light btn-sm p-2" type="submit"><img style="height: 20px; width: 20px;" src="Views/images/default/magnif.png"></button>
            </form>
        </div>
          </nav>
<!--        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #8DA1B9;">
          <a class="navbar-brand" style="font: 19px 'Amatic', sans-serif; color:#fff" href='/blog3'>A TIME TRAVELLER'S LIFE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href='?controller=posts&action=showAll'>Show All Posts</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="?controller=pages&action=aboutUs">About Us</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0" action='?controller=posts&action=searchPost' method="POST">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                      <button class="btn btn-light btn-sm p-2" type="submit"><img style="height: 20px; width: 20px;" src="Views/images/default/magnif.png"></button>
                  </form>
                </div>
            </nav>-->
        </header>
        
        <?php require_once('routes.php'); ?>
       
        <!-- FOOTER -->
        
    <footer>
        <div class="footer">    
<!-- SOCIAL BOX ------------------------------------->
        <div class="container-fluid text-center w3-container w3-padding-16 w3-center w3-opacity w3-xlarge">
            <a href="pages/error.php"><i class="fa fa-facebook-official w3-hover-opacity"></i> </a>
            <a href="pages/error.php"><i class="fa fa-instagram w3-hover-opacity"></i></a>
            <a href="pages/error.php"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
            <a href="pages/error.php"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
            <a href="pages/error.php"><i class="fa fa-twitter w3-hover-opacity"></i></a>        
            <a href="pages/error.php"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
        </div>
<!-- CLOSE SOCIAL BOX -------------------------------->
        <div id="wrapper" class="row justify-content-center"
<!-- LEFT LOWER BOX ---------------------------------->
        <div class="col-sm-4 f1">
            <ul>
                <img src="Views/images/logo.png" alt="logo" style="width:100px;height:75px;" />    
                <br>
                <li><a href="#">Subscribe</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
        </div>
<!-- MIDDLE LOWER BOX -------------------------------->
        <div class="col-sm-4 f2">
            <ul>
                <li><a href="?controller=users&action=login">Staff Login</a></li>
<!--                <li><a href="?controller=users&action=register">Register</a></li>
                <li><a href="?controller=users&action=logout">Logout</a></li>-->
            </ul>
        </div>
<!-- RIGHT LOWER BOX ---------------------------------->
    <!--<div class="form-control">-->    
        <div class="col-sm-4 f3 row">

            <h3>Contact us</h3>
            <p style="font-size:14px;">Drop us a message and we promise to get back to you within a day!</p>
            <p style="font-size:12px;"><span class="glyphicon glyphicon-map-marker"></span>  Head Office, Leeds, UK </p>
            <p style="font-size:12px;"><span class="glyphicon glyphicon-phone"></span>  0113 456 78910 <!--</p> <p>--> <span class="glyphicon glyphicon-envelope"></span>  timetrips@gmail.com</p>

            <form> 
            <!--Email-->
                <div class="row form-group">
                    <input class="form-control" id="enteremail" name="enteremail" placeholder="Email..." type="text" required>
                </div>

            <!--Message-->
                <textarea class="form-control" id="message" name="message" placeholder="Message..." rows="4"></textarea>
                <br>    
            <!-- SEND - Why arn't you on the right [Sorted! JB]-->
                <div class="row form-group pull-right">
                    <button class="btn btn-default" type="submit">Send</button>
                </div>
            </form>
        </div>   
        </div>
              
<!-- MAP ------------------------------------------------>          
                <!-- centering the map - align="" class="w3-center" style="text-align: center" do not work -->  
                <div id="map" style="height:125px; width:100%;" ></div>           
                <script >
                    var map;
                    function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: 53.8008, lng: -1.5491},
                        zoom: 13
                        });
                    }
                </script> <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrsthx6SjytN7X5hfwab5sINCwjwIATLg&callback=initMap" sync defer></script>
<!-- CLOSE MAP ------------------------------------------->         
<!-- COPYRIGHT ----    ----------------------------------->                
                <div class="row w3-container" color="#8da1b9"> 
                    <!--align-content: left align-items: left; align-self: left-->
                    <p>Copyright &COPY; <?= date('Y'); ?></p>
                </div>
<!-- CLOSE COPYRIGHT ------------------------------------->            
            </div>
        </footer>
            

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="Views\javascript\navbar.js"</script>
    </body>
</html>