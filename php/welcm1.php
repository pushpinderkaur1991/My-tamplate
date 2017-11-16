<?php
session_start();

$id = 0;
include('db.php');
if(!isset ($_SESSION["user_id"])){
	header('location:login_session1.php'); 
}else{
	$id = $_SESSION['user_id'];
}

$query = "SELECT * from member where id = ".$id;
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_array($result);	
				
			
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="boot/css/bootstrap.min.css"  type="text/css" rel="stylesheet">
</head>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 hidden-xs"></div>
				<div class="col-md-5" style="margin-top:150px;margin-left:340px;">
					<form style="border:3px solid;padding:auto;">
						<h4 style="" class="text-muted text-center"><?php echo $data["email"];?></h4><hr>
					
						<h4 style="" class="text-muted text-center"><?php echo $data["firstname"];?></h4><hr>
						<h4 style="" class="text-muted text-center"><?php echo $data["lastname"];?></h4><hr>
						<h4 class="text-muted text-center"><?php echo $data["company"];?></h4><hr>
						<h4 class="text-muted text-center"><?php echo $data["designation"];?></h4>
					</form>			
				</div>
		</div>		
</div>	
				
	</body>
</html>


