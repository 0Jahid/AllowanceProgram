<?php session_start();
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/styles/style.css">
</head>

<body class="secondaryBody">
    <header class="reg">
        <div class="projectTitle">
            <a href="index.php"><b><i class="fa fa-home"></i> Home</b></a>
        </div>

    </header>
    
    <main class="secondaryMain">
    
        <form class="signup" action="userlogin.php" method="POST">
            <div class="formHeading">
            <?php if(isset($_SESSION['message'])): ?>
                <h1>
            <?php echo $_SESSION['message']; ?>
                </h1>
            <?php endif; ?>
            <?php unset($_SESSION['message']); ?>
                <h1>Log In</h1>
            </div>
            <div class="formBody">
                <div class="captions">
                    <div class="filedsLabel">Enter Nid Number</div>
                    <div class="filedsLabel">Enter Password</div>
                </div>
                <div class="allFields">
                    <div class="fields">
                        <span><i class="fa fa-vcard"></i></span>
                        <input type="text" placeholder="NID Number" name="nid" required>
                    </div>
                    <div class="fields">
                        <span><i class="fa fa-keyboard-o"></i></span>
                        <input type="password" placeholder="Password" name="password" required>
                    </div>

                </div>
            </div>
            <div class="new_remind">
                <div class="remember">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="newAccount">
                    Don't have an account? <a href="signUp.php">Create Now</a>
                </div>
            </div>
            <div class="submitDiv">
                <button type="submit">Log in <i class="fa fa-sign-in"></i></button>
            </div>
        </form>
    </main>
</body>

</html>