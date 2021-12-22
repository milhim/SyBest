<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css" type="text/css" />
    <title>SyBest</title>
</head>

<body>
    <!--create navbar-->
    <nav class="nav-bar">
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About Us</a>
        <a href="index.php">Home</a>
        <a href="admin/login.php">Admin</a>

    </nav>

    <h1 class="site-head"><span id="one">Sy</span><span id="two">Be</span><span id="three">st</span></h1>
    <!--create marquee element-->
    <marquee class="slide">Watch new movies for free - download all movies you want - Browse best movies</marquee>
    <!--create time section-->
    <div id="time"></div>

    <!--animation between site photos-->

    <div class="slider">

    </div>

    <div class="print-cat">
        <!--button to print the page-->
        <button id="print" onclick="printHome()">Print</button>
        <!--button to show category-->
        <button onclick="cat()">Category Details</button>

    </div>


    <?php
    //connect to database
    $serverName = 'ec2-184-73-252-221.compute-1.amazonaws.com';
    $username = 'xqvyhqrtduoprb';
    $password = '69a5470bb48f59912413ea43d7b9cea5d006184f376a6493a08844352c921f60';
    $dbname = 'd9omjpci28j5sp';

    $conn = mysqli_connect($serverName, $username, $password, $dbname);
    if (!$conn) {
        die('connection failed: ' . mysqli_connect_error());
    }
    //create sql qyery and execute it
    $sql = 'select * from movie';
    $result = mysqli_query($conn, $sql);
    //if the result have any row go to the loop
    if (mysqli_num_rows($result) > 0) {
        //get every row and every time put it in $row variable
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <!--get the image and movie name from $row variable and put it in html element-->
           
            <a class="countiner" href="movie.php?movie_id=<?php echo $row['movie_id'] ?>">
                <div class="sub">
                    <img src=<?php echo $row['image']; ?>>
                    <div class="text">
                        <p>
                            <?php echo   $row['movie_name']; ?>
                        </p>
                    </div>
                </div>
            </a>

    <?php
    //end og if and while loop and close connection with database
        }
    }
    mysqli_close($conn);
    ?>





    <script src="js/main.js"></script>
</body>

</html>
