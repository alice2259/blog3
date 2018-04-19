    <form class="form" action="" method="POST">   
        <div id="login" class="container-fluid">
            <div class="pull-center text-center row col-sm-6 col-sm-offset-3" >   <!-- contact details responsive? --> 
            <fieldset> 
                <legend class="form-group text-center">Register</legend>
                <input class="form-control" id="firstname" name="firstName" placeholder="First Name" type="text" autofocus required>
                    <br>
                    <input class="form-control" id="lastname" name="surname" placeholder="Surname" type="text" required>
                    <br>
                    <input class="form-control" id="email" name="email" placeholder="Email address" type="email" required>
                    <br>
                    <input class="form-control" id="password" name="password" placeholder="Password" type="password" required>
                    <br>
<!--                    <input class="form-control" id="password" name="confirmpassword" placeholder="Confirm password" type="password" required>
                    <br>-->
                    <input type="radio" name="permissionsID" value="1"> Blogger 
                    <br>
                    <input type="radio" name="permissionsID" value="2"> Admin 
                    <br>
<!--            </fieldset>    
            <fieldset> 
-->                <div class="form-group">
                    <button class="btn btn-default" type="submit">Submit</button>  <!--either refresh the page or redirect to my account page-->
                    <br><br>
                    <button class="btn btn-default" type="reset">Reset</button>  <!--either refresh the page or redirect to my account page-->
                </div>
<!--            </fieldset>  -->
             
            <h6 class="text-center"> Already registered? <a href="?controller=pages&action=login"> Click here. </a></h6>   
            <h6 class="text-center"> Terms & Conditions <a href="#"> Click here. </a></h6>
<!--            <h6 class="text-center"> Click to subscribe <input type="radio" name="T&C" value="Subscribe"></h6>-->



            </div>
        </div> 
    </form>

