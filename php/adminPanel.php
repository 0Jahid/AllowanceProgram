<?php
session_start();

if (isset($_SESSION['login_user'])) {
    if ($_SESSION['isadmin'] != 'True') {
        header('location: adminLogin.php');
    }
} else {
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/styles/style.css">
    <title>Admin Panel</title>
</head>

<body class="secondaryBody">
    <header class="reg">
        <div class="projectTitle">
            <a href="index.php"><span><i class="fa fa-home"></i></span> Home</a>
        </div>
        <div class="logIn">
            <a href="approved.php"><button title="Log Out">Approved </button></a>
            <a href="pending.php"><button title="Log Out">Pending <i class="fa fa-spinner fa-spin"></i></button></a>
            <a href="Logout.php"><button title="Log Out">LogOut <i class="fa fa-sign-out"></i></button></a>
        </div>
    </header>
    <main class="secondaryMain">
        <div class="showDataContainer">
            <form class="signup showDataForm">
                <div class="boxHead">
                    <h4 class="title">All Details</h4>
                </div>
                <div id="showData">

                    <h4></h4>
                </div>
            </form>
            <div class="infoBtns">
                <button><i class="fa fa-trash"></i> Delete</button>
                <button><i class="fa fa-edit"></i> Edit</button>
                <button><i class="fa fa-table"></i> Show Data</button>
            </div>
        </div>
        <!-- Line Area Start -->
        <div class="chartContainer">
            <div class="graphFullBody">
                <div class="box">
                    <div class="boxHead">
                        <h4 class="title">Line Area</h4>
                    </div>
                    <div class="boxBody">
                        <div class="example-chartjs">
                            <canvas id="example-chartjs-lineArea"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infoBtns">
                <button><i class="fa fa-edit"></i> Edit</button>
                <button><i class="fa fa-user-plus"></i> Update</button>
            </div>
        </div>
        <!-- Line Area End -->
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="vendors/JS/Chart.min.js"></script>
    <script src="vendors/JS/chartjs.active.js"></script>
</body>

</html>