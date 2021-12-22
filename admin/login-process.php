<?php 
      $serverName = 'localhost';
      $username = 'root';
      $password = '';
      $dbname = 'sybest';
  
  
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