
<!-- Edit Php -->
<?php 
    if($this->session->s_id == ""){
		redirect("Auth", "refresh");
    }
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

	<!-- Head section -->
	<head>
		<title>KnowLate 2 learn</title>
		
		<!-- Add meta -->
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=1.0">
		
		<!-- Include link -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		
		<!-- Include script -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<!-- Script -->
		<script>
			$('#myModal').on('shown.bs.modal', function () {
				$('#myInput').trigger('focus')
			})
		</script>
		
		<!-- Style -->
		<style>
			html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
			.me-text-white{
				color: #ffffff;
				text-shadow:1px 1px 0 #444;
			}
			a:visited {
				color: #ffffff;
			}
		</style>
	</head>
	
<!-- Body section -->
<body style="background-color:#f6ffff">

	<!-- Navbar -->
	<div class="w3-top" style="background-color:#0099cc">
		<div class="w3-bar w3-left-align w3-large" style="background-color:#0099cc; color:#ffffff;" >
		
			<!-- Home -->
			<button href="<?php echo base_url()?>/index.php/home" style="background-color:#0086b3; text-shadow:1px 1px 0 #444" class="w3-bar-item w3-button w3-padding-large "><i class="fa fa-home w3-margin-right"></i>Home</button>
			
			<!-- Sign Out -->
			<button onclick="window.location.href='<?php echo base_url();?>index.php/Auth/logout'" class="w3-bar-item w3-button w3-padding-large w3-hover-white w3-right" title="Sign out">
			<i class="fa fa-sign-out"> </i></button> 
			
			<!-- Notifications -->
			<button class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right" title="Notifications"><i class="fa fa-bell"></i></button> 

			<!-- News -->			
			<button class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right" title="News"><i class="fa fa-globe"></i></button>  
		</div>
		
		<!-- End navbar -->
	</div>
