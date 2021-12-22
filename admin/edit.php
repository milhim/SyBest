
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
$sql = "select * from movie where movie_id='$id'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
    margin: 0;
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
      Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    font-size: 18px;
  }
  body {
    background-color:#aca7ac8e ;
    
  }

.countainer{
  display: flex;
  justify-content: space-between;
  width:60%;
  margin:  auto;
  margin-top: 70px;
  background-color: #d2c5b59c;
  box-shadow: 7px 7px 10px #675A64;
}
form{
  width: 80%;
  margin: 30px ;
  text-align: center;
}
form div{
  margin: 20px;
}
form div input{
  margin-left:20px ;
}
.first label{
  display: inline-block;
  width: 30%;
}
form div label{
  margin-right:20px ;
}

    </style>
    <title>Edit</title>
</head>
<body>
    
<div class="countainer">
        <form action="edit-process.php?movie_id=<?php echo $row["movie_id"]; ?>" method="post">
            <div class="first">
                <div> <label for="name">Movie Name : </label> <input value="<?php echo $row['movie_name']; ?>"   id="name" type="text" name="movie_name"></div>
                <label for="actors">Actors : </label>
                <div>
                    <textarea name="actors" id="actors" cols="10" rows="5" ><?php echo $row['actors'];?></textarea> 
                </div>
                <div> <label for="director">Director : </label> <input value="<?php echo $row['director']; ?>" id="director" type="text" name="director"></div>
                <div><label for="year">Year : </label> <input value=<?php echo $row['year']; ?> id="year" type="number"  name="year"></div>  
         </div>    
            <div><input type="submit" value="Edit Student"></div>
         
        </form>
       

    </div>
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