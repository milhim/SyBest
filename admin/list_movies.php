<?php
  
  $serverName = 'ec2-35-153-35-94.compute-1.amazonaws.com';
  $username = 'iywqwsxoolrmkf';
  $password = 'cd6c47bc3cdc92497eead23bc4c30b6c232506492e8c7906c6c4b89ef3bbbf2d';
  $dbname = 'd1o29fjjrvct7c';


  $conn = mysqli_connect($serverName, $username, $password, $dbname);
  if (!$conn) {
      die('connection failed: ' . mysqli_connect_error());
  }

  $sql = 'select * from movie';
  $result = mysqli_query($conn, $sql);
 
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/admin-index.css" />
    <title>Admin</title>
</head>
  
<body>

<nav class="nav-bar">
        <a href="../contact.php">Contact Us</a>
        <a href="../about.php">About Us</a>
        <a href="../index.php">Home</a>
    </nav>

    <section>
        <h1>Movies Data</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Movie Name</th>
                <th>Category</th>
                <th>Created At</th>
                <th>Option</th>
            </tr>
            <?php   
                while($rows = mysqli_fetch_assoc($result))
                {
             ?>
            <tr>
                <td><?php echo $rows['movie_id'];?></td>
                <td><?php echo $rows['movie_name'];?></td>
                <td><?php 
                $id=$rows['movie_id'];
                    $sql1="select DISTINCT category.category_name from category NATURAL JOIN moviecategory WHERE moviecategory.movie_id=".$id.""; 
                    $categoryName=mysqli_query($conn,$sql1);
                     while($r=mysqli_fetch_assoc($categoryName)){
                         
                         
                         echo $r['category_name'].' ';
 
                     }
                ?></td>

                <td><?php echo $rows['date_create'];?></td>
                <td>
                    <?php 
                    if($rows['is_deleted']==0){
                        
                        echo '<a style="   padding: 6px;
                        text-decoration: none;
                        text-align: center;
                        font-size: 16px;
                        font-weight: bold;
                        background-color: #f52626bd;
                        border: 1px solid black;
                        border-radius: 5px;" onclick="return checkDelete(this);" href="delete-process.php?movie_id='.$rows["movie_id"].'" >Delete</a>';
                    }
                    else if($rows['is_deleted']==1){
                        echo '<a style="   padding: 6px;
                        text-decoration: none;
                        text-align: center;
                        font-size: 16px;
                        font-weight: bold;
                        background-color: #79f526bd;
                        border: 1px solid black;
                        border-radius: 5px;" href="restore-process.php?movie_id='.$rows["movie_id"].'">Restore</a>';
                    }
                    ?>
                
                <a style="   padding: 6px;
                        text-decoration: none;
                        text-align: center;
                        font-size: 16px;
                        font-weight: bold;
                        background-color: #af34f791;
                        border: 1px solid black;
                        border-radius: 5px;" href="../movie.php?movie_id=<?php echo $rows["movie_id"]; ?>">View</a>
                <a style="   padding: 6px;
                        text-decoration: none;
                        text-align: center;
                        font-size: 16px;
                        font-weight: bold;
                        background-color: #25e4e4a2;
                        border: 1px solid black;
                        border-radius: 5px;" href="edit.php?movie_id=<?php echo $rows["movie_id"]; ?>">Edit</a>

                </td>


            </tr>
            <?php
                }
                mysqli_close($conn);
             ?>
        </table>
    </section>
<script>
    function checkDelete(a){
         var t=confirm('are you sure');
         if(t){
window.location = a.getAttribute('href');
         }
         else
         {
             window.location='list_movies.php';
         }
         return t;
    }
</script>
    
</body>
  
</html>