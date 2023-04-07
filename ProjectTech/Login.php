<html>
    <head>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
         <script src="script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Login</title>
        <body>
            <h1 id="shopname">The bodybuilder's shop </h1>
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
                    <br>
                

                <div class="imgcontainer">
                    <img src="photos/img_avatar2.png" alt="Avatar" class="avatar">
                <h2 style="text-align: center;">Login Form</h2>
                <div class="form">
                <!-- <form action="welcome.php" method="get"> -->
                    <form>
                    <label for="uname"><b>Username</b></label>
                    <input  id="userName" type="text" placeholder="Enter Username" name="name" required><br>
                    <label for="psw"><b>Password</b></label>
                    <input id="password" type="password" placeholder="Enter Password" name="password" required> <br>
                    <button type="button" onclick="login()" >Login</button>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    </form>
                </div>  
                <p id="0"></p><p id="1"></p><p id="2"></p><p id="3"></p><p id="4"></p>
                <p id="5"></p><p id="6"></p><p id="7"></p><p id="8"></p><p id="9"></p>
                
                <script>
                    window.onLoad = personsArray();
                </script>

        </body>
</html>