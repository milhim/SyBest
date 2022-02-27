<?php
    $serverName = 'ec2-35-153-35-94.compute-1.amazonaws.com';
    $username = 'iywqwsxoolrmkf';
    $password = 'cd6c47bc3cdc92497eead23bc4c30b6c232506492e8c7906c6c4b89ef3bbbf2d';
    $dbname = 'd1o29fjjrvct7c';

$conn = mysqli_connect($serverName, $username, $password, $dbname);
if (!$conn) {
    die('connection failed: ' . mysqli_connect_error());
}
$id=$_GET['movie_id'];
$sql = "update  movie set is_deleted=1 where movie_id='$id'";
mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete...</title>

</head>
<body>
    <?php
if ( !mysqli_query ($conn ,$sql ) ) { die ( 'ERROR: '.mysqli_error($conn) ) ; }
else
echo '<p style="background-color: #006600;
text-align: center;
color: #E4F5D4;
padding: 10px;
margin: 40px auto;
border-radius: 5px;
font-size: 22px;
font-widght:bold;
">Delete Movie Done</p>';
mysqli_close($conn);

?>
<a href="list_movies.php" style=" display: block;
    background-color: #666600;
    text-align: center;
    color: #E4F5D4;
    padding: 10px;
    text-decoration: none;
    margin: 20px auto;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    width: 100px;">Back Home</a>


</body>
</html>
