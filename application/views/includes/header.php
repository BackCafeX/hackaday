<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
session_start();

<!DOCTYPE html>
<html lang="en">
<head>
	<title>KnowLate 2 learn</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
     <style>
			.me-text-white{
				color: #ffffff;
				text-shadow:1px 1px 0 #444;
			}
            html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
			a:visited {
				color: #ffffff;
			}
    </style>
</head>
<body style="background-color:#f5ffff">

<!-- Navbar -->
<div class="w3-top" style="background-color:#0099cc">
 <div class="w3-bar w3-left-align w3-large" style="background-color:#0099cc; color:#ffffff;" >
	
  
  <button href="<?php echo base_url()?>/index.php/home" style="background-color:#0086b3; text-shadow:1px 1px 0 #444"
	class="w3-bar-item w3-button w3-padding-large "><i class="fa fa-home w3-margin-right"></i>Home</button>
  <button class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-l2 w3-right" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></button>
  <button class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right" title="Notifications"><i class="fa fa-bell"></i></button>    
  <button class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right" title="News"><i class="fa fa-globe"></i></button>   
  <button class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right" title="Account Settings"><i class="glyphicon glyphicon-off"></i></button>  
  
 </div>

</div>
