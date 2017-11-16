<?php
session_start();

$id = 0;
include('db.php');

if(!isset ($_SESSION["userid"])){
	header('location:fb_login.php'); 
}else{
unset($_SESSION['userid']);
session_destroy();
header('Location:fb_login.php');
exit;
}
?>              

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="boot/css/bootstrap.min.css"  type="text/css" rel="stylesheet">
	<link href="boot/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	 
		
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-md-4 hidden-xs"></div>
		
		</div>	
<script src="boot/js/jquery.min.js"></script>
<script src="boot/js/bootstrap.min.js"></script>

</body>
</html>


