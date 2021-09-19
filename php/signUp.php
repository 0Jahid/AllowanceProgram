<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/styles/style.css">
</head>

<body class="secondaryBody">
    <header class="reg">
        <div class="projectTitle">
            <a href="index.php"> Allowance Program </a>
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
    <?php if (isset($_SESSION['message'])) : ?>
        <?php echo $_SESSION['message']; ?>
    <?php endif; ?>
    <?php unset($_SESSION['message']); ?>
    <main class="secondaryMain">

        <form class="signup" action="register.php" method="POST">
            <div class="formHeading">
                <h1>Sign Up Form</h1>
            </div>
            <div class="formBody">
                <div class="captions">
                    <div class="filedsLabel"> First Name</div>
                    <div class="filedsLabel"> Last Name</div>
                    <div class="filedsLabel">Select Birth of date</div>
                    <div class="filedsLabel"> NID number</div>
                    <div class="filedsLabel"> Phone number</div>
                    <!----------------- address ---------------------->
                    <div class="filedsLabel"> Division name</div>
                    <div class="filedsLabel"> District name</div>
                    <div class="filedsLabel"> Post Office</div>
                    <div class="filedsLabel"> Upozilla Name</div>
                    <div class="filedsLabel"> Postal Code</div>
                    <div class="filedsLabel"> Union Name</div>
                    <div class="filedsLabel">Password</div>
                    <div class="filedsLabel">Select Allowance Type</div>

                </div>
                <div class="allFields">
                    <div class="fields">
                        <span><i class="fa fa-user"></i></span>
                        <input type="text" placeholder="Enter first name" name="firstname" required>
                    </div>
                    <div class="fields">
                        <span><i class="fa fa-user"></i></span>
                        <input type="text" placeholder="Enter last name" name="lastname">
                    </div>
                    <div class="fields">
                        <span><i class="fa fa-calendar"></i></span>
                        <input type="date" name="dateofbirth" required>
                    </div>
                    <div class="fields">
                        <span><i class="fa fa-id-card"></i></span>
                        <input type="number" placeholder="Enter NID number" name="nid" required>
                    </div>
                    <div class="fields">
                        <span><i class="fa fa-phone"></i></span>
                        <input type="number" placeholder="Enter phone number" name="phonenumber" required>
                    </div>
                    <!------------------------ address ----------------------->
                    <div class="fields">
                        <span><i class="fa fa-map"></i></span>
                        <input type="text" placeholder="Enter division name" name="division">
                    </div>
                    <div class="fields">
                        <span><i class="fa fa-address-book"></i></span>
                        <input type="text" placeholder="Enter district name" name="district">
                    </div>
                    <div class="fields">
                        <span><i class="fa fa-envelope-open"></i></span>
                        <input type="text" placeholder="Enter post office" name="postoffice">
                    </div>
                    <div class="fields">
                        <span><i class="fa fa-vcard"></i></span>
                        <input type="text" placeholder="Enter upozilla name" name="upazilla">
                    </div>
                    <div class="fields">
                        <span><i class="fa fa-bank"></i></span>
                        <input type="text" placeholder="Enter postal code" name="postcode">
                    </div>
                    <div class="fields">
                        <span><i class="fa fa-map-o"></i></span>
                        <input type="text" placeholder="Enter union name" name="unnion">
                    </div>
                    <div class="fields">
                        <span><i class="fa fa-key"></i></span>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <div class="options">
                        <input type="checkbox" name="oldage" value="oldage"><label for="Oldage">Old age</label>
                        <input type="checkbox" name="disability" value="disability"><label for="Disability">Disability</label>
                        <input type="checkbox" name="widowed" value="widowed"><label for="Widowed">Widowed</label>
                    </div>
                </div>
            </div>
            <div class="submitDiv">
                <button type="submit">Sign up <i class="fa fa-sign-in"></i></button>
            </div>
        </form>
    </main>
</body>

</html>