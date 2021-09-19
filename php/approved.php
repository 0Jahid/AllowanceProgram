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
    <title>Approve</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/styles/style.css">
</head>

<body class="secondaryBody">
    <header class="reg">
        <div class="projectTitle">
            <a href="index.php"><span><i class="fa fa-home"></i></span> Home</a>
        </div>
        <div class="logIn">
            <a href="pending.php"><button title="Log Out">Pending <i class="fa fa-spinner fa-spin"></i></button></a>
            <a href="Logout.php"><button title="Log Out">LogOut <span><i class="fa fa-sign-out"></i></span></button></a>
        </div>
    </header>

    <main class="pendingMain">
        <div class="pendingContainer">


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">National ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">
                            <center>Address</center>
                        </th>
                        <th scope="col">Pending Request</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include("config.php");

                    $query = "SELECT * FROM `applicant` WHERE active=1";

                    $ret = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($ret, MYSQLI_ASSOC)) { ?>
                        <?php
                        echo "<tr>" .
                            "<th scope='row'>{$row['nid']}</th>" .
                            "<td>{$row['firstname']}</td>" .
                            "<td>{$row['lastname']}</td>" .
                            "<td>{$row['dateofbirth']}</td>" .
                            "<td>{$row['phonenumber']}</td>" .
                            "<td>{$row['unnion']}, {$row['postoffice']}, {$row['upazilla']}, {$row['district']}, {$row['division']},   {$row['postcode']}";
                        ?>
                        <td>
                            <button type="submit" class="btn btn-success btn-sm mr-2" disabled>Approved <i class="fa fa-check"></i></button>

                            <form style="display:inline;" action="declineuser.php" method=GET>
                                <input type=text name="nid" value="<?php echo "{$row['nid']}" ?>" hidden></input>
                                <button type="submit" class="btn btn-danger btn-sm">Delete <i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>