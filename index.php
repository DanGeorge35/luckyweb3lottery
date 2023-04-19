<!DOCTYPE html>
<html lang="eng">

<head>	

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">


	<!-- Jquery & Javascript -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/popper.min.js"></script>           
	<script src="assets/js/wave.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="humanized_time_span.js"></script>
	<?php //include('config2.php'); ?>

	<!-- Owl Theme Default CSS --> 
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">


	<!-- Owl Carousel CSS --> 
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">


	<!-- Animate CSS --> 
	<link rel="stylesheet" href="assets/css/animate.css">	         



	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">	      



	<!-- w3css -->
	<link href="assets/css/w3.css" rel="stylesheet">



	<!-- w3css -->
	<link href="assets/icons.css" rel="stylesheet">


	<!-- Favicon WebIcon -->
	<link rel="icon" type="image/png" href="images/icon.png">
	<link rel="shortcut icon" href="images/icon.png">


	<!-- Color -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#ed1c24">
	<meta name="theme-color" content="#ed1c24">

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>

		<?php include('css_index.php');?>	


<script src="assets/js/wow.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>    


<body id='body' style="overflow: hidden;position: fixed;height: 100vh;left: 0;right: 0;top: 0;bottom: 0;">


	


	<div class="w3-display-container noSelect " id="app_opener" style="top:0;left:0;right:0;bottom:0;height: 100vh;position: fixed;z-index: 0;background-color: #7645d9;">
		<div class="w3-display-middle w3-opacity-25 text-center" >
			<div >
				<img src="favicon.ico" style="height:80px;margin-left: -10px;" class="animated infinite fadeOut  ">

				<div class="w3-medium standard_font font-bold text-warning w3-opacity">	<br>	Loading...</div>
			</div><br>	    						
		</div>
	</div>


	<div  id="main_screen" class="noSelect" style="z-index: 1;">
		<?php include('main_header.php');?>	
		<?php include('back_header.php');?>

		<div  id="screen" class="noSelect" style="z-index: 1;"  >	
		</div>
 

	</div>



 

<script type="text/javascript">
	function elem(did) {
		return document.getElementById(did);
	}

	$(document).ready(function(){
		elem('app_opener').style.display="none";
		elem('main_header').style.display="block";

 
	});
 

</script>




</html>