<?php

session_start();


require_once "./config.php";

$msg = "";

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
  header("Location: index.php");
  die;
}

if (isset($_POST['email']) && $_POST['email'] != "") {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $_POST['email'] = "";
  $_POST['password'] = "";
  unset($_POST['email']);

  $sql = "select * from users where email='$email' and password='$password'";

  $res = mysqli_num_rows(mysqli_query($conn, $sql));
  if ($res == 1) {
    $_SESSION['loggedIn'] = 1;
    header("Location: index.php");
    die;
  } else {
    $msg = "User doesn't exist!!";
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


  <link rel="stylesheet" href="style.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php require_once "./nav.php"; ?>

  <div class="container">
    <!-- <input type="checkbox" id="flip"> -->
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
          <span class="text-2">Let's Play</span>
        </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <div class="login-form">
          <div class="title">Login to Sports Corner</div>
          <form action="./login.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your any email" name="email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>

              <div class="button input-box">
                <input type="submit" value="Sign-In">
              </div>
              <div class="text sign-up-text">Don't have an account? <a class="nav-link" href="signup.php"><label for="flip">Signup now</label></a></div>
            </div>
            <?php
            if ($msg != "") {
              echo   '<p class="mt-1 alert alert-danger">' . $msg . '</p>';
            }
            ?>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  if (isset($_GET['q'])) {
    if ($_GET['q'] == 1) {
      echo '<script>alert("Please Login to Continute..");</script>';
    }
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>