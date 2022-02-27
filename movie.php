<!--we come here by click on any movie in home page to see that movie information-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/movie.css" />

    <title>Movie Ditale</title>
</head>

<body>
<nav class="nav-bar">
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About Us</a>
        <a href="index.php">Home</a>
        <a href="admin/login.php">Admin</a>

    </nav>
    <?php
        $serverName = 'ec2-35-153-35-94.compute-1.amazonaws.com';
        $username = 'iywqwsxoolrmkf';
        $password = 'cd6c47bc3cdc92497eead23bc4c30b6c232506492e8c7906c6c4b89ef3bbbf2d';
        $dbname = 'd1o29fjjrvct7c';
    
//connect to DB and get the movie_id from URL by GET variable
    $conn = mysqli_connect($serverName, $username, $password, $dbname);
    if (!$conn) {
        die('connection failed: ' . mysqli_connect_error());
    }
    $id = $_GET['movie_id'];
    //get the movie with that id
    $sql = "select * from movie where movie_id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    ?>
    <!--display movie information in HTML elements -->

    <div class="countainer">
        <div class="first">
            <img src=<?php echo $row['image']; ?>>

        </div>

        <div class="second">
            <div><span>Movie Name:</span>
                <p><?php echo $row['movie_name']; ?></p>
            </div><br>
            <div><span>Director: </span>
                <p><?php echo $row['director']; ?></p>
            </div><br>
            <div><span>Actors: </span>
                <p><?php 
                $id=$row['movie_id'];
                    $sql1="select DISTINCT category.category_name from category NATURAL JOIN moviecategory WHERE moviecategory.movie_id=".$id.""; 
                    $categoryName=mysqli_query($conn,$sql1);
                     while($r=mysqli_fetch_assoc($categoryName)){
                         
                         
                         echo $r['category_name'].' ';
 
                     }
                ?></p>
            </div><br>
            <div><span>Description: </span>
                <p><?php echo $row['description']; ?></p>
            </div><br>
            <div><span>Year: </span>
                <p><?php echo $row['year']; ?></p>
            </div>
            <a id="go-to-download-page" href="download.php?movie_id=<?php echo $row['movie_id']?>">Download Movie</a>
        </div>
    </div>


</body>

</html>