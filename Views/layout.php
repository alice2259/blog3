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
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Lato:300|Comfortaa:700|Rajdhani|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
     
    </head>
    
    <body>
        <!-- NAV BAR (nested in Header) -->
      <header>
          
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <a class="navbar-brand" href="/blog3">The Time Traveller's Life</a>
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
      <div class="social">SOCIAL MEDIA ICONS</div>
      <div id="wrapper" class="row justify-content-center">
                
          <div class="col-sm-4 f1" style="background-color: #FAC9B8; font-size: 16px;">
                <ul>
                    <li>Get our latest posts straight to your inbox!</li>
                    <li>subscriber box</li>
                    <li>button</li>
                </ul>
            </div>
          
          <div class="col-sm-4 f2" style="background-color: #EDF5FF">
                <ul>
                    <li><a href='?controller=users&action=login'>Staff Login</a></li>
                    <li><a href='?controller=users&action=logout'>Logout</a></li>
                </ul>
            </div>
          
            <div class="col-sm-4 f3" style="background-color: #EDF5FF">
                <img class="authorImage" src="LOGO IMAGE HERE">
                </ul>
            </div>
          </div>
        </div>
</footer>
        

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="Views\javascript\navbar.js"</script>
    </body>
</html>