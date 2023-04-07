<html>
<body>
    <link  rel="stylesheet" href="style.css">
    <h1>The bodybuilder's shop</h1>
    <center><br>
    <p>Your Message was sended <br>Thank You! </p><br>
    First Name- <?php echo $_GET["fname"]; ?><br>
    Last Name- <?php echo $_GET["lname"]; ?><br>
    E-mail- <?php echo $_GET["email"]; ?><br>
    Phone- <?php echo $_GET["phone"]; ?><br>
    Your Message-[ <?php echo $_GET["message"]; ?>
        ,sent from <?php echo $_GET["fname"]; ?>] <br>
    <img  style="width: 400; height: 200;"  src="photos/message.png" alt="">
    </center>
</body>
</html>