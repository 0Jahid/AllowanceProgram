<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $id = mysqli_real_escape_string($conn, $_POST['id']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE id = '$id' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         $_SESSION['login_user'] = $id;
         $_SESSION['isadmin'] = 'True';
         header("location: adminPanel.php");
      }else {
          $_SESSION['message'] = "Invalid Login";
          header("location: adminLogin.php");
      }
   }
?>