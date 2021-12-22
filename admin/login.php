<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        nav{
    background-color:#8F8B8F ;
    opacity: 0.6;
    width: 100%;
    height: 45px;
    direction: rtl;
    pad: 15px;
    transition: ease-in-out .3s;

}
        nav a{
    display: inline-block;
    padding: 5px 20px;
    margin:8px 20px;
    text-decoration: none;
    color:#131D1F ;
    font-family: 'Courier New', Courier, monospace;
    font-weight: bold;
    transition: ease-in-out .3s;
}
nav a:hover{
    background-color:#A31630 ;
    border-radius: 5px;
    transition: ease-in-out .3s;
}
nav:hover{
    opacity: 1;
    transition: ease-in-out .3s;

}
.countiner{
    width: 30%;
    margin: 100px auto;
    background-color: #8fb1bb9d;
    border: 1px solid #131D1F;
    border-radius: 5px;
    box-shadow: 5px 5px 5px #8fb1bb9d;
}
.countiner form {
    padding: 30px;
    margin: auto;
}
.countiner form div input,label{
    margin: 20px;
}
#submit{
    margin-left: 120px;
    padding: 5px;
    cursor: pointer;
}
    </style>
    <title>Login</title>
</head>
<body>
<nav class="nav-bar">
        <a href="../contact.php">Contact Us</a>
        <a href="../about.php">About Us</a>
        <a href="../index.php">Home</a>
    </nav>
    <div class="countiner">
        <form action="login-process.php" method="POST">

        <div>
            <label for="name">User Name : </label><input type="text" id="name" name="name">
        </div>

        <div>
            <label for="password">User Name : </label><input type="password" id="password" name="password">
        </div>

        <input type="submit" id="submit" value="Login">
        </form>

    </div>
    
</body>
</html>