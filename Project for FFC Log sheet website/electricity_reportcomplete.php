<?php
@include('session.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="Application History" content="">
	<meta name="Shehroze" content="">


	<title>FFc</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">



	<!-- Custom styles for this template -->
	<link href="css/logsheets.css" rel="stylesheet">




</head>

<body >





	
	<div class="container-fluid">
		<?php 
		$Electricity=$_POST['Electricity'];
		$by=$_POST['by'];
		$to=$_POST['to'];
		$date_set=$_POST['date_set'];
		$time_from=$_POST['time_from'];
		$time_to=$_POST['time_to'];
		$original_date=$_POST['original_date'];
		$user=$_POST['user'];
		$original_time=$_POST['original_time'];
		$comments="";
		$pending=1;








		$query="INSERT INTO `electricity_reports`(`State`, `Username`, `reported_by`, 
		`reported_to`, `original_time_from`, `time_from`, `time_to`, `original_date`, `date`, `comments`, `pending`) VALUES 
		('$Electricity','$user','$by','$to','$original_time','$time_from','$time_to','$original_date','$date_set','$comments','$pending')";
		$runner=mysqli_query($con,$query);


		if($runner){
			echo "<div class='btn btn-block alert-success'>Record Successfully Inserted</div>";
		}
		else{
			echo "<div class='btn btn-block alert-danger'>Error While Inserting Record</div>";


		}




		?>




	</div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
