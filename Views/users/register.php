  <div class="container">
        <header class="blog-header py-3"></header>
    
    <!-- TITLE  -->
    
    <div class="jumbotron p-3 p-md-5">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic"> Register New Blog Member </h1>
        </div>
    </div>
   
    <div class="justify-content-center container-fluid text-white rounded bg-dark mb-3">
    
<form class="form" action="" method="POST">   
        <div id="login" class="container-fluid col-8 p-5">
            <h5> Please input new staff information below: </h5>
            <div class="pull-center text-center" >   <!-- contact details responsive? --> 
            <fieldset> 
                <legend class="form-group text-center"></legend>
                <input class="form-control" id="firstname" name="firstName" placeholder="First Name" type="text" autofocus required>
                    <br>
                    <input class="form-control" id="lastname" name="surname" placeholder="Surname" type="text" required>
                    <br>
                    <input class="form-control" id="email" name="email" placeholder="Email address" type="email" required>
                    <br>
                    <input class="form-control" id="password" name="password" placeholder="Password" type="password" required>
                    <br>
                    <input class="form-control" id="password" name="confirmPassword" placeholder="Confirm password" type="password" required>
                    <br>
                    <input type="radio" name="permissionsID" value="1"> Blogger 
                    <br>
                    <input type="radio" name="permissionsID" value="2"> Admin 
                    <br>
                    <div class="form-group row m-3">
                        <button class="btn btn-default m-1" type="submit">Submit</button>
                    <br><br>
                    <button class="btn btn-default m-1" type="reset">Reset</button>  <!--either refresh the page or redirect to my account page-->
                </div>
            </div>
        </div> 
    </form>
      </div>
  </div>     
    
