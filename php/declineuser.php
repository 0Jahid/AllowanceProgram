
<?php
    include("config.php");
    session_start();
   
    if($_SESSION['isadmin'] == 'True') {
        if($_SERVER["REQUEST_METHOD"] == "GET") {
            
            $nid = $_GET['nid'];
            
            $sql = "DELETE FROM `applicant` WHERE `applicant`.`nid` = $nid";
            $result = mysqli_query($conn,$sql);
            
            header('location: pending.php');
        }
    }   
    else{
        header('location: adminLogin.php');
    }
?>