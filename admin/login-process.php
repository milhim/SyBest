<?php 
     $serverName = 'ec2-35-153-35-94.compute-1.amazonaws.com';
     $username = 'iywqwsxoolrmkf';
     $password = 'cd6c47bc3cdc92497eead23bc4c30b6c232506492e8c7906c6c4b89ef3bbbf2d';
     $dbname = 'd1o29fjjrvct7c';
 
  
      $conn = mysqli_connect($serverName, $username, $password, $dbname);
      if (!$conn) {
          die('connection failed: ' . mysqli_connect_error());
      }
      mysqli_select_db($conn,'sybest');
            $name=$_POST['name'];
            $pw=$_POST['password'];

          $sql = "select * from admin";
                          
          if ( !$result=mysqli_query ($conn ,$sql ) ) { die ( 'ERROR: '.mysqli_error($conn) ) ; }
          else{
              $row=mysqli_fetch_assoc($result);
              if(($name==$row['name']) and ($pw==$row['password'])){
                echo '<script>window.location="list_movies.php";</script>';
              }
              else{
                echo '<p style="background-color:red;padding:10px;font-size:20px">Wrong username or password</p>';

              }
          }
              mysqli_close($conn);
?>