<?php 
include("connection.php");
@include("session.php");


@session_start();



?>

<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Prime Packers & Movers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Prime Packers and Movers" />
	<meta name="keywords" content="prime,packers,movers,transportation" />

	

	<link href="fonts/mainfont.css" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->

<style type="text/css">



</style>


</head>
<body>

<div class="container">
				<div class="row">
					<div class="banner-info">
						
						<div class="banner-text text-center">
							
							<?php 
							$Username=$_SESSION['Username'];

							$result=mysqli_query($con,"select * from user where uUsername='$Username';");




							$data = mysqli_fetch_assoc($result);


							?>



											<div class="form-group row">
<form action="update_complete.php" method="post">

												<table  class="table">

													<tr class="">
														<th>Name</th>
														<td><input type="text" class="form-control text-center" name="name" value="<?php  echo $data['uName']?>" required></td>
													</tr>

													<tr >
														<th class="black">Address</th>
														<td><input type="text" class="form-control text-center" name="address" value="<?php  echo $data['uAddress']?>" required> </td>
													</tr>

													

													<tr >
														<th class="black">Email</th>
														<td><input type="email" class="form-control text-center" name="email" value="<?php  echo $data['uEmail']?>" required> </td>
													</tr>

													<tr >
														<th class="black">Phone</th>
														<td><input type="text" class="form-control text-center" name="phone" value="<?php  echo $data['phone']?>" required> </td>
													</tr>

													
													


												</table> 

												<input type="submit" value="Modify" class="btn btn-block btn-info">
												</form>
											</div>

											<div>
												<a href="details.php"><button class="btn btn-block btn-info">Click to go back to details page</button></a>
											</div>




									


	<br><hr class="btn-info">



	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>


	
</body>
</html>

