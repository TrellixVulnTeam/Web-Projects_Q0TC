<?php 
include('connection.php');

@include('session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EzHealth</title>
	<meta name="description" content="Shehroze Aamer,Abbas Afzal">




	
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body class="bg-info" style="color:black" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			
			<div class="container">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">
						</div>
						<div class="banner-text text-center">


							<?php 
							if(count($_POST)>0){
								$pass1=md5($_POST['pass1']);
								$pass2=md5($_POST['pass2']);
								$new_pass=$_POST['new_pass'];
							$Username=$_SESSION['username'];

	$result=mysqli_query($con,"select * from doctors where username='$Username';");




							$data = mysqli_fetch_assoc($result);

							$pass=($data['password']);

								if($pass1===$pass2 && $pass1===$pass){
									$user = $_SESSION['username'];
									$new_pass=md5($new_pass);
									$query="UPDATE `patients` SET `password`='$new_pass' where `username`='$user';";


									$runner=mysqli_query($con,$query);


									if($runner){
										echo "<div class='btn btn-block alert-success'>Password Changed</div>";
									}
									else{
										echo "<div class='btn btn-block alert-danger'>Error Please try again</div>";
										echo "<a href='patient_account_details.php'>'<div class='btn btn-block alert-info'>Click here to go back</div></a>";


									}

								
								
							}
							else{
									echo "<div class='btn btn-block alert-danger'>Error Please try again</div>";

									echo "<a href='patient_account_details.php'>'<div class='btn btn-block alert-info'>Click here to go back</div></a>";

							}
							



}

							?>




						</div>


						<div class="overlay-detail text-center">
							<a href="#"><i class="fa fa-angle-up"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>
