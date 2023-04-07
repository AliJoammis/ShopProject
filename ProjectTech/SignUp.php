<html>
    <head>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Sign-up</title>
        <body>
            <h1 id="shopname">The bodybuilder's shop</h1>
            <hr>
            <img src="photos/build.jpeg" width="2000" height=300 alt="Test">
            <ul>
            <li> <a href="HomePage.php"> </i> Home</a> </li>
                <li>  <a href="Contact.php"> Contact</a></li>
                <li> <a href="About.php">About</li>
                <li><a class="active" href="SignUp.php">Sign-up</a></li>
                <li> <a class="active" href="Login.php">Login</a></li>
                <li> <a href="Product.php"> Product</a> 
                </li>
               </ul>
                    <br><br><br>
                    <div class="imgcontainer">
                        <img class="avatar" src="photos/img_avatar2.png"  alt="Avatar" class="avatar">
                      </div>
                    <h2 style="text-align: center;">Sign-up Form</h2>

                    <div class="form" >
                    <form>
                        <label  for="fname">User Name :</label><br>
                        <input type="text" placeholder="Enter User Name" name="user" required><br>
                        <label for="fname">First Name :</label><br>
                        <input type="text" placeholder="Enter First Name" name="fname" required><br>
                        <label for="lname">Last Name :</label><br>
                        <input type="text" placeholder="Enter Last Name" name="lname" required> <br>
                        <label for="lname">Phone :</label><br>
                        <input type="text" name="phone" placeholder=" Enter Phone number" required><br>
                        <label for="email">Email :</label><br>
                        <input type="text" placeholder="Enter Email" name="email" required><br>
                        <label  for="psw"><b>Password</label><br>
                        <input type="password"placeholder="Enter Password" name="Password"required ><br>
                        <label for="lname">Confirm Password </label><br>
                        <input type="password"placeholder="Enter Password" name="Password" required><br>
                        <button type="submit">Confirm</button>
                        <br>
                        <label for="tac">
                        <p>
                            <a href="welcome.php">Read our Terms and Conditions</a>
                          </p>
                            <input id="tac" type="checkbox" name="terms-and-conditions" />
                            I agree to the Terms and Conditions
                          </label>
                        <a style="color:blue;" href="Login.php"> <i class="fa fa-user-plus" aria-hidden="true"></i></i> Registered</a>
                    </form>
                </div>
                    <br>
                    <div class="form" style="background-color:#f1f1f1">
                        <button  type="button" class="cancelbtn" href="SignUp.php">Cancel</button>
                      </div>  
        </body>
    </head>
</html>