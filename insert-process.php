<?php
    $serverName = 'ec2-35-153-35-94.compute-1.amazonaws.com';
    $username = 'iywqwsxoolrmkf';
    $password = 'cd6c47bc3cdc92497eead23bc4c30b6c232506492e8c7906c6c4b89ef3bbbf2d';
    $dbname = 'd1o29fjjrvct7c';

$conn = mysqli_connect($serverName, $username, $password, $dbname);
if (!$conn) {
    die('connection failed: ' . mysqli_connect_error());
}
mysqli_select_db($conn, 'sybest');
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$is_married = $_POST['is_married'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$kids = $_POST['kids_num'];
$insertQuery = "insert into users(name,gender,birthday,is_married,kids_num,email,password) values('$name','$gender','$birthday','$is_married','$kids','$email','$pass')";
if (!mysqli_query($conn, $insertQuery)) {
    die('ERROR: ' . mysqli_error($conn));
} else
    echo '<p style="background-color: #006600;
text-align: center;
color: #E4F5D4;
padding: 10px;
margin: 40px auto;
border-radius: 5px;
font-size: 22px;
font-widght:bold;
">You entered all information and you can download the movie now.</p>';
mysqli_close($conn);
?>