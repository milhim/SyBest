<!--get user information and send it to insert-process.php to insert it in database-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/download.css" />

    <title>Download</title>
</head>

<body>
    <nav class="nav-bar">
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About Us</a>
        <a href="index.php">Home</a>
        <a href="admin/login.php">Admin</a>

    </nav>
  
    <div class="countainer">
        <form action="insert-process.php" method="post">
            <div class="first">
                <div> <label for="name">Your Name : </label> <input required onchange="this.value=this.value.toUpperCase();" id="name" type="text" name="name"></div>
                <div> <label for="email">Email : </label> <input required id="email" type="email" name="email"></div>
                <div><label for="password">PassWord : </label> <input required id="password" type="password" name="password"></div>
            </div>
            <div><label for="gender">Male</label> <input required id="gender" type="radio" name="gender" value="male">
                <label for="gender">Female</label> <input required id="gender" type="radio" name="gender" value="female">
            </div>


            <div> <label for="relation">Married</label> <input required id="relation" type="radio" name="is_married" value=1>
                <label for="relation">Single</label> <input required id="relation" type="radio" name="is_married" value=0>
            </div>


            <div><label for="birthday">Your Birthday : </label> <input required id="birthday" type="date" name="birthday"></div>
            <div><label for="kids">Number Of UYour Kids : </label> <input  id="kids" type="number" name="kids_num"></div>


         
            <div><input type="submit"></div>
         
        </form>
       

    </div>


    

</body>

</html>