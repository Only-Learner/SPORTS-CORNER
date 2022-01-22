<?php

// session_start();

require_once "./loginchecking.php";

require_once "./config.php";

$sql = "select * from users";

$res = mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | Sports-Corner</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/price-range.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="stylesheet" href="stylefooter.css">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<!--/head-->

<body>
	<?php require_once "./nav.php"; ?> <section id="slider">
		<!--slider-->

		<!--/slider-->

		<section>
			<div class="container" style="margin-top: 100px;">
				<h2 class="title text-center">Find Others</h2>
				<div class="row">


					<?php while ($data = mysqli_fetch_assoc($res)) { ?>
						<div class="col-md-4">
							<div class="features_items">
								<!--features_items-->


								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img style="width: 40%; margin-bottom: 10px;" src="images/user.png" alt="" />
											<h2><?php echo $data['fav_sports']; ?></h2>
											<h3><?php echo $data['name']; ?></h3>
											<p style="font-weight: 600;">Age: <?php echo $data['age']; ?></p>
											<p style="font-weight: 600;">Area: <?php echo $data['locality']; ?></p>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $data['fav_sports']; ?></h2>
											</div>
										</div>
									</div>

								</div>

							</div>

						</div>
					<?php } ?>
				</div>
			</div>
		</section>

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
				<div class="col">
					<img class="footer-logo" src="logo.png" alt="logo">

				</div>
				<hr>
				<div class="hr-text">
					SPORTS CORNER &#169 2021- All Rights Reserved With Us
				</div>
			</div>
		</footer>

		<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script> -->


		<script src="js/jquery.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="js/jquery.scrollUp.min.js"></script>
		<script src="js/price-range.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/main.js"></script>
</body>

</html>