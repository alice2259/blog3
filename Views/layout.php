<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link rel="stylesheet" href="Views/css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="styles/CSS.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<!-- NAV BAR --------------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href='/blog3'>TIMETRIPS.COM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href='?controller=posts&action=showAll'>Blogs</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<!--                            only visable to staff members once logged in?-->
<!--                            <a class="dropdown-item" href="?controller=users&action=register">Register</a>
                                <a class="dropdown-item" href="#">Log In</a>
                                <a class="dropdown-item" href="#">My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log Out</a>-->
                            </div>
                        </li>  
                    </ul>
                    
                    <!--SEARCH-->
                    <form class="form-inline my-2 my-lg-0" action='?controller=posts&action=searchPost' method="POST">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-success my-2 my-sm-0" style="float: left" type="submit">Search</button>
                    </form>
                    
                </div>
            </nav>
        </header>
<!-- CLOSE NAV BAR --------------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <?php require_once ('C:\xampp\htdocs\blog3\routes.php'); ?>
<!-- FOOTER  ------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <footer>
            <div class="footer">    
<!-- SOCIAL BOX ------------------------------------------------------------------------------------------------------------------------------------------ -->
                <div class="container-fluid text-center w3-container w3-padding-16 w3-center w3-opacity w3-xlarge">
                    <a href="pages/error.php"><i class="fa fa-facebook-official w3-hover-opacity"></i> </a>
                    <a href="pages/error.php"><i class="fa fa-instagram w3-hover-opacity"></i></a>
                    <a href="pages/error.php"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
                    <a href="pages/error.php"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
                    <a href="pages/error.php"><i class="fa fa-twitter w3-hover-opacity"></i></a>        
                    <a href="pages/error.php"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
                </div>
<!-- CLOSE SOCIAL BOX ------------------------------------------------------------------------------------------------------------------------------------------ -->
                <div id="wrapper" class="row justify-content-center"
<!-- LEFT LOWER BOX ------------------------------------------------------------------------------------------------------------------------------------------ -->
                <div class="col-sm-4 f1">
                    <ul>
<!--                    <li><img src="images/logo.png" alt="logo" style="width:75px;height:50px;" /></li>   -->
                        <img src="images/logo.png" alt="logo" style="width:75px;height:50px;" />    
                        <br>
                        <li><a href="#">Subscribe</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
<!-- MIDDLE LOWER BOX ----------------------------------------------------------------------------------------------------------------------------------------- -->
                <div class="col-sm-4 f2">
                    <ul>
                        <li><a href="?controller=users&action=login">Staff Login</a></li>
                        <li><a href="?controller=users&action=register">Register</a></li>
                        <li><a href="?controller=users&action=logout">Logout</a></li>
                    </ul>
                </div>
<!-- RIGHT LOWER BOX ------------------------------------------------------------------------------------------------------------------------------------------ -->
            <!--<div class="form-control">-->    
                <div class="col-sm-4 f3 row">
                    
                    <h3>Contact us</h3>
                    <p>Drop us a message and we promise to get back to you within a day!</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span>  Head Office, Leeds, UK </p>
                    <p><span class="glyphicon glyphicon-phone"></span>  0113 456 78910 <!--</p> <p>--> <span class="glyphicon glyphicon-envelope"></span>  timetrips@gmail.com</p>
                    
                    <form> 
                    <!--Email-->
                        <div class="row form-group">
                            <input class="form-control" id="enteremail" name="enteremail" placeholder="Email..." type="text" required>
                        </div>
                        
                    <!--Message-->
                        <textarea class="form-control" id="message" name="message" placeholder="Message..." rows="4"></textarea>
                        
                    <!-- SEND - Why arn't you on the right-->
                        <div class="row form-group">
                            <button class="btn btn-default pull-right" style="float: right" type="submit">Send</button>
                        </div>
                    </form>
                </div>   
            
<!--    <div id="contact" class="container-fluid bg-lower">
        <h4 class="text-left">CONTACT US</h4>
        
        <div class="row">
            <div class="col-sm-5">
                <p>Drop us a message and we promise to get back to you within a day!</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Leeds, UK </p><br>
                <p><span class="glyphicon glyphicon-phone"></span> 0113 456 78910 </p><br>
                <p><span class="glyphicon glyphicon-envelope"></span> timetrips@gmail.com</p> 
            </div>
            
            <div class="col-sm-7">    
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Email..." type="text" required>
                    </div>
                    
                </div>
            
                <textarea class="form-control" id="message" name="message" placeholder="Message..." rows="5"></textarea><br>
                
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div> 
            </div>
        </div>
    </div>  -->
                        
                        
                        
                    
                </div>
              
<!-- MAP ------------------------------------------------------------------------------------------------------------------------------------------ -->          
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
<!-- CLOSE MAP ------------------------------------------------------------------------------------------------------------------------------------------ -->         
<!-- COPYRIGHT ------------------------------------------------------------------------------------------------------------------------------------------ -->                
                <div class="row w3-container" color="#8da1b9"> 
                    <!--align-content: left align-items: left; align-self: left-->
                    <p>Copyright &COPY; <?= date('Y'); ?></p>
                </div>
<!-- CLOSE COPYRIGHT ------------------------------------------------------------------------------------------------------------------------------------ -->            
            </div>
        </footer>
        

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>