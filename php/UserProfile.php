<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User Profile</title>
    <link rel="stylesheet" href="vendors/styles/style.css">
</head>

<body class="secondaryBody">
    <header class="reg">
        <div class="projectTitle">
            <a href="index.php">Allowance Program</a>
        </div>
        <div class="logIn">
            <a href="logIn.php"><button title="Log Out">Log Out <i class="fa fa-sign-out"></i></button></a>
        </div>
        </div>
    </header>

    <main class="secondaryMain">
        <form class="signup showDataForm">
            <h2> <?php session_start();
                    $nid = $_SESSION['login_user'];
                    $query = "SELECT * FROM `applicant` WHERE active=0";
                    $ret = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($ret)) {

                        $fname = $row['firstname'];
                        $lname = $row['lastname'];
                        $dob = $row['dateofbirth'];
                        $phone =  $row['phonenumber'];
                        $un =   $row['unnion'];
                        $po =  $row['postoffice'];
                        $uz =   $row['upazilla'];
                        $dist =  $row['district'];
                        $divi =  $row['division'];
                        $pc =    $row['postcode'];
                    }
                    ?>
                <h1>Profile</h1>
            </h2>
            <TABLE>
                <TR>
                    <TD>Name: </TD>
                    <TD><?php echo $fname . " " . $lname; ?></TD>

                </TR>
                <TR>
                    <TD>Date of Birth : </TD>
                    <TD><?php echo $dob; ?></TD>
                </TR>
                <TR>
                    <TD>Phone: </TD>
                    <TD><?php echo $phone; ?></TD>
                </TR>
                <TR>
                    <TD>Unnion: </TD>
                    <TD><?php echo $un; ?></TD>
                </TR>
                </TR>
                <TR>
                    <TD>Post office : </TD>
                    <TD><?php echo $po; ?></TD>
                </TR>
                <TR>
                    <TD>Upozilla: </TD>
                    <TD><?php echo $uz; ?></TD>
                </TR>
                <TR>
                    <TD>District: </TD>
                    <TD><?php echo $dist; ?></TD>
                </TR>
                <TR>
                    <TD>Division: </TD>
                    <TD><?php echo $divi; ?></TD>
                </TR>
                </TR>
                <TR>
                    <TD>Postal Code : </TD>
                    <TD><?php echo $pc; ?></TD>
                </TR>
                <TR>
                    <TD>Program : </TD>
                    <TD><?php echo "Program name"; ?></TD>
                </TR>
                <TR>
                    <TD>Withdrawable : </TD>
                    <TD><?php echo "TK"; ?></TD>
                </TR>
            </TABLE>
            <div class="paymentGateway">
                <button type="button">Payment option <i class="fa fa-shopping-cart"></i></button>
            </div>
        </form>
    </main>
</body>

</html>