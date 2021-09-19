<?php

session_start();
require_once "config.php";

if(isset($_POST['firstname']) && isset($_POST['lastname'])  && isset($_POST['dateofbirth'])  && isset($_POST['phonenumber']) 
        && isset($_POST['division'])  && isset($_POST['district'])  && isset($_POST['postoffice']) 
        && isset($_POST['upazilla'])  && isset($_POST['nid']) && isset($_POST['postcode']) 
        && isset($_POST['unnion']) && isset($_POST['password'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dateofbirth = $_POST['dateofbirth'];
    $phonenumber = $_POST['phonenumber'];
    $division = $_POST['division'];
    $district = $_POST['district'];
    $postoffice = $_POST['postoffice'];
    $upazilla = $_POST['upazilla'];
    $nid = $_POST['nid'];
    $postcode = $_POST['postcode'];
    $unnion = $_POST['unnion'];
    $password = $_POST['password'];

    $query = "INSERT INTO applicant (firstname, lastname, dateofbirth, phonenumber, division, district, postoffice, upazilla, nid, postcode, unnion, password) VALUES('$firstname', '$lastname', '$dateofbirth', '$phonenumber', '$division', '$district', '$postoffice', '$upazilla', '$nid', '$postcode', '$unnion', '$password')";
    
    $ret = mysqli_query($conn, $query);

    $_SESSION['message'] = "Registration Successfull";
        
    header('location: logIn.php');

}

else {
    $_SESSION['message'] = "Fill up the fields correctly";
    header('location: signUp.php');
}


?>