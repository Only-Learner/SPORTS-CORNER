<?php

require_once "./loginchecking.php";

require_once "./config.php";

if (isset($_POST['sell_submit'])) {


    $item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
    $item_price = mysqli_real_escape_string($conn, $_POST['item_price']);
    $item_genre = mysqli_real_escape_string($conn, $_POST['item_genre']);

    if (isset($_FILES['image'])) {

        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];


        if ($file_size > 2097152) {
            $errors[] = 'File size must be excately 2 MB';
        }

        $upload_name = rand(1000, 9999) . $file_name;

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "products/" . $upload_name);

            $sql = "insert into items (item_name, price, genre, img_link) values ('$item_name', '$item_price', '$item_genre', '$upload_name')";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                echo "<h3>Success, Product added</h3>";
            }
        } else {
            print_r($errors);
        }
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ui.css">
    <link rel="stylesheet" href="sellBook_reviews.css">
    <link rel="stylesheet" href="stylefooter.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="fonts.css">



    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">






</head>

<body>
    <?php require_once "./nav.php"; ?>
    <style>
        .success,
        .error {
            color: white;
            padding: 5px;
            margin: 5px 0 15px 0;
        }

        .success {
            background: green;
        }

        .error {
            background: red;
        }
          div.container-fluid a img{
       height: 40px;
    }
    </style>

    <div class="container mt-3">

        <article class="book-card mb-8 my-4">

            <div class="card-body">


                <h2 style="font-size: 25px;" class="heading2">Add Equipment information</h2>
                <div class="cont">
                    <form enctype="multipart/form-data" id="book-form" class="row" action="./sell.php" method="post">

                        <div class="col-md-6 my-2">
                            <label for="inputTitle" class="form-label"><strong>Product Name :</strong></label>
                            <input required type="text" name="item_name" class="form-control bg-secondary bg-opacity-10" id="title" placeholder="Type here">
                        </div>

                        <div class="col-md-6 my-2">
                            <label for="inputTitle" class="form-label"><strong>Which sport :</strong></label>
                            <input required type="text" name="item_genre" class="form-control bg-secondary bg-opacity-10" id="title" placeholder="Type here">
                        </div>



                        <div class="col-md-6 my-2">
                            <p><label for="inputPrice" class="form-label"><strong>Price(&#8377;) :</strong></label>
                                <input required type="text" name="item_price" class="form-control bg-secondary bg-opacity-10" id="Price">
                        </div>

                        <div class="col-12 d-flex flex-column flex-md-row justify-content-md-between my-2">
                            <div class="d-grid gap-2 col-md-6">
                                <p><label for="imageFile"><strong> Upload the recent product image : </strong></label>
                                    <input name="image" type="file" id="FileInput" accept="image/*" required />
                                </p>
                            </div><br>
                            <div class="d-grid gap-2 col-md-2">
                                <button type="submit" name="sell_submit" class="btn btn-outline-primary" id="submit" value="Submit"><strong>Submit</strong></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </article>





        <br>


    </div>



    <br>
    <footer>
        <div class="rows">
            <div class="col">
                <div class="social-icons">
                    <h3>Follow Us<div class="underline"><span></span></div>
                    </h3>
                    <a href="https://facebook.com" id="one"><i class="fab fa-facebook-f "></i></a>
                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <!-- <img class="footer-logo" src="logo.png" alt="logo"> -->

        </div>
        <hr>
        <div class="hr-text">
            SPORTS CORNER @ 2022-'30 - All Rights Reserved
        </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>


<script src="script.js"></script>
<script src="appes7.js"></script>
<!-- <script src="stylefooter.css"></script> -->

</html>