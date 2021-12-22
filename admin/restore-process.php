<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sybest';

$conn = mysqli_connect($serverName, $username, $password, $dbname);
if (!$conn) {
    die('connection failed: ' . mysqli_connect_error());
}
$id=$_GET['movie_id'];
$sql = "update  movie set is_deleted=0 where movie_id='$id'";
mysqli_query($conn, $sql);

if ( !mysqli_query ($conn ,$sql ) ) { die ( 'ERROR: '.mysqli_error($conn) ) ; }
else
echo 'Restore Movie Done';
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restore...</title>

</head>
<body>
<a href="list_movies.php" style=" display: block;
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
