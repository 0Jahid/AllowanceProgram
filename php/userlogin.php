<?php
include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $nid = mysqli_real_escape_string($conn, $_POST['nid']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);

   $sql = "SELECT nid FROM applicant WHERE nid = '$nid' and password = '$password' and active = 1";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

   $count = mysqli_num_rows($result);


   if ($count == 1) {
      $_SESSION['login_user'] = $nid;

      header("location: Userprofile.php");
   } else {
      $_SESSION['message'] = "Invalid Login";
      header("location: logIn.php");
   }
}
