<html>
    <head>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <script src="script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Contact</title>
            <body>
                <h1 id="shopname">The bodybuilder's shop</h1>
                <hr>
                <img src="photos/Constellation.jpg" width="2000" height=300  alt=""> 
                <hr>
                <ul>
                    <li> <a href="HomePage.php"> </i> Home</a> </li>
                    <li>  <a href="Contact.php"> Contact</a></li>
                    <li> <a href="About.php">About</li>
                    <li><a class="active" href="SignUp.php">Sign-up</a></li>
                    <li> <a class="active" href="Login.php">Login</a></li>
                    <li> <a href="Product.php"> Product</a> 
                    </li>
                </ul>
                    <br><br>
                    <div class="form">
                        <form action="results.php" method="get">
                            <label for="fname">First Name :</label><br>
                            <input id="fn" type="text" placeholder="First Name" name="fname"><br>
                            <label for="lname">Last Name :</label><br>
                            <input type="text" placeholder="Last Name" name="lname"><br>
                            <label for="lname">Email :</label><br>
                            <input id="mail" type="text" placeholder="Email" name="email"><br>
                            <label for="lname">Phone :</label><br>
                            <input type="text" placeholder="Phone number" name="phone"><br>
                            <br>
                            <label for="text">Message:</label><br>
                            <input type="text" placeholder="Message" name="message">
                            <button type="submit" onclick= "checkErrors()">Send</button>
                            <a s href="Contact.php"> <i aria-hidden="true">
                            <button type="button" class="cancelbtn">Cancel</button></a>
                            
                        </form>
                        <script>
                            function checkErrors(){
                                let firstName = document.getElementById("fn").value;
                                let mail = document.getElementById("mail").value;
                                let count = mail.split("@").length-1;
                                if(firstName.length < 5 || firstName.length > 20){
                                    alert("first name Error.\n is must have between 5 and 20 chars. actually have "+firstName.length);
                                }
                                else if(count !=1){
                                    window.alert("Mail Error. have "+count+" symbols of '@'");
                                } 
                            }
                        </script>
          
                    </div>  
          </body>
        </head>

</html>