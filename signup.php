<?php

session_start();
require_once "./config.php";

$msg = "";
$success = false;



if (isset($_POST['email']) && $_POST['email'] != "") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $sports = mysqli_real_escape_string($conn, $_POST['sports']);
    $local = mysqli_real_escape_string($conn, $_POST['local']);

    $_POST['email'] = "";
    $_POST['password'] = "";
    unset($_POST['email']);

    $sql = "select * from users where email='$email'";

    $res = mysqli_num_rows(mysqli_query($conn, $sql));
    if ($res > 0) {
        $msg = "Email already exists!!";
    } else if ($password != $cpassword) {
        $msg = "Both Password didn't match";
    } else {
        $sql = "insert into users (name, email, password, fav_sports, age, locality) values ('$name', '$email', '$password', '$sports', '$age', '$local')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $msg = "You are signed up successfully&nbsp;<a id='nothing' href='./login.php'>Login now</a>";
            $success = true;
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="ui.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
    <title>SPORTS CORNER</title>
    <link rel="stylesheet" href="stylefooter.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Montserrat:wght@100&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">



    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php require_once "./nav.php"; ?>
    <div class="container">
        <div class="cover">
            <div class="front">
                <img src="images/frontImg.jpg" alt="">
                <div class="text">
                    <span class="text-1">Every new friend is a <br> new adventure</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
            <div class="back">
                <img class="backImg" src="images/backImg.jpg" alt="">
                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get started</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="signup-form">
                    <div class="title">Signup</div>
                    <form action="./signup.php" method="post">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Enter your name" name="name" required>
                            </div>

                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" placeholder="Enter your email" name="email" required>
                            </div>

                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Enter your age" name="age" required>
                            </div>

                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Enter your Sports" name="sports" required>
                            </div>

                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Enter your Area" name="local" required>
                            </div>

                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Enter your password" name="password" required>
                            </div>

                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Confirm your password" name="cpassword" required>
                            </div>

                            <div class="button input-box">
                                <input type="submit" value="Sign-Up">
                            </div>
                            <div class="text sign-up-text">Already have an account? <a class="nav-link" href="login.php"><label for="flip">Login now</label></a>
                            </div>
                        </div>
                        <?php
                        if ($msg != "") {
                            if ($success) {
                                echo   '<p class="mt-1 alert alert-success">' . $msg . '</p>';
                            } else {
                                echo   '<p class="mt-1 alert alert-danger">' . $msg . '</p>';
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>