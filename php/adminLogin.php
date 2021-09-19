
<?php
    session_start();

    if(isset($_SESSION['login_user'])){
        if($_SESSION['isadmin'] == 'True'){
            header('location: adminPanel.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allowance Program | Admin logIn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/styles/style.css">
</head>

<body class="secondaryBody">
    <header class="reg">
        <div class="projectTitle">
            <a href="index.php"></a>
        </div>
        <div class="authentication">
            <div class="signUp">
                <a href="signUp.php"><button title="Sign up">Sign Up</button></a>
            </div>
            <div class="logIn">
                <a href="logIn.php"><button title="Log in">Log in</button></a>
            </div>
        </div>
    </header>
    <main class="secondaryMain">
        <form class="signup" action="handleadminlogin.php" method="POST">
            <div class="formHeading">
                <h1>Admin Log In</h1>
            </div>
            <div class="formBody">
                <div class="allFields">
                    <div class="fields">
                        <span><i class="fa fa-id-badge"></i></span>
                        <input type="number" placeholder="Enter ID Number" name="id" required>
                    </div>
                    <div class="fields">
                        <span><i class="fa fa-key"></i></span>
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                </div>
            </div>
            <div class="submitDiv">
                <button type="submit">Log in <i class="fa fa-sign-in"></i></button>
            </div>
        </form>
    </main>
</body>

</html>