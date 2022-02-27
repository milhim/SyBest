<?php
      $serverName = 'ec2-35-153-35-94.compute-1.amazonaws.com';
      $username = 'iywqwsxoolrmkf';
      $password = 'cd6c47bc3cdc92497eead23bc4c30b6c232506492e8c7906c6c4b89ef3bbbf2d';
      $dbname = 'd1o29fjjrvct7c';
  
    $id=$_GET['movie_id'];


    $conn = mysqli_connect($serverName, $username, $password, $dbname);
    if (!$conn) {
        die('connection failed: ' . mysqli_connect_error());
    }
    mysqli_select_db($conn,'sybest');
        $name=$_POST['movie_name'];
        $actors=$_POST['actors'];
        $director=$_POST['director'];
        $year=$_POST['year'];
        $ieditQuery = "update movie 
                       set movie_name='$name',actors='$actors',year='$year',director='$director'
                        where movie_id='$id'";
                        
        if ( !mysqli_query ($conn ,$ieditQuery ) ) { die ( 'ERROR: '.mysqli_error($conn) ) ; }
        else{
            echo 'Update movies Information Done!';
        }
            mysqli_close($conn);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update ...</title>
    </head>
    <body>   
         <a href="list_movies.php"  style=" display: block;
    background-color: #006600;
    text-align: center;
    color: #E4F5D4;
    padding: 10px;
    text-decoration: none;
    margin: 20px auto;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    width: 100px;">Home</a>

    </body>
    </html>
