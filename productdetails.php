<?php
require_once "./loginchecking.php";
require_once "config.php";

if (isset($_GET['item'])) {
	$icode = mysqli_real_escape_string($conn, $_GET['item']);
	$sql = "select * from items where id='$icode'";
	$res = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($res);
	if (!$data) {
		echo "404 not found";
		die;
	}
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Product Details | Sports-Corner</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<!--/head-->

<body>
	<?php require_once "./nav.php"; ?>
	<style>

	</style>
	<section>
		<div class="container" style="margin-top: 140px;">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6">
					<div class="product-details">
						<!--product-details-->
						<div class="view-product">
							<img style="object-fit: cover; width: 80%;" src="./products/<?php echo $data['img_link']; ?>" alt="" />
						</div>
						<div class="product-information" style="display: flex; align-items: center;
							flex-direction: column; justify-content: center;">
							<!--/product-information-->
							<img src="images/product-details/new.jpg" class="newarrival" alt="" />
							<h1><?php echo $data['item_name']; ?></h1>



							<span>INR &#8377;<?php echo $data['price']; ?></span>

							<button type="button" class="btn btn-fefault cart">
								<i class="fa fa-shopping-cart"></i>
								Buy Now
							</button>

							<p><b>Availability:</b> In Stock</p>
							<p><b>Condition:</b> New</p>



						</div>
					</div>
					<!--/product-details-->



				</div>
			</div>
		</div>
	</section>


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



	<script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/main.js"></script>
</body>

</html>