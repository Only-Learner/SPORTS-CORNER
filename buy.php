<?php

// session_start();

require_once "./loginchecking.php";

require_once "./config.php";

$sql = "select * from items";

$res = mysqli_query($conn, $sql);

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
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
</head>

<body>
  <?php require_once "./nav.php"; ?>

  <style>
    .products-container {
      margin-top: 120px !important;
      padding: 15px;
    }

    .product-card {
      display: flex;
      align-items: center;
      flex-direction: column;
      margin: 10px 0;
      background: #efefef;
      padding: 10px 0;
    }

    .product-name {
      font-family: sans-serif;
      font-size: 25px;
    }

    .product-card img {
      max-width: 100%;
    }

    .product-image-container {
      width: 80%;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 350px;
    }
  </style>


  <div class="products-container container">
    <div class="row">
      <?php while ($data = mysqli_fetch_assoc($res)) { ?>
        <div class="col-md-6">
          <div class="product-card">
            <div class="product-image-container"><img src="./products/<?php echo $data['img_link']; ?>" alt=""></div>

            <h2 class="product-name mt-2">
              <?php echo $data['item_name']; ?>
            </h2>
            <h3 class="mt-2 product-price">
              &#8377; <?php echo $data['price']; ?>
            </h3>
            <a href="./productdetails.php?item=<?php echo $data['id']; ?>" class="btn btn-success mt-1">Buy Now</a>
          </div>
        </div>
      <?php  } ?>



    </div>

  </div>










  <br>
  <footer>
    <div class="rows">

      <div class="col">
        <div class="social-icons">
          <h3 id="follow">Follow Us<div class="underline"><span></span></div>
          </h3>
          <a target="_blank" href="https://www.facebook.com/Sports-Corner-105223115401476" id="one"><i class="fab fa-facebook-f "></i></a>
          <a target="_blank" href="https://twitter.com/Only_Learners"><i class="fab fa-twitter"></i></a>
          <a target="_blank" href="https://www.instagram.com/sportscorneronlylearners/"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <!-- <div class="col">
        <img class="footer-logo" src="logo.png" alt="logo">

      </div> -->
      <hr>
      <div class="hr-text">
        SPORTS CORNER &#169 2021- All Rights Reserved With Us
      </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>



  <script src="home.css"></script>
  <script src="Home.js"></script>
  <script src="Trending.js"></script>
</body>

</html>