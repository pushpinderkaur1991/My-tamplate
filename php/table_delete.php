<?php 


include('db.php');

	$error= "";
	$success = "";
	
	if(!isset($_GET["id"])){
			header('table.php'); 
		}else{
			$id = $_GET["id"];
		}
			$query= "SELECT * from title where title_id=".$id;
			$result = mysqli_query($conn,$query);
			$data = mysqli_fetch_array($result);

			
					$sql = "DELETE FROM title where title_id=$id";
					{
							if (mysqli_query($conn, $sql)) {
							$error ="Record deleted successfully";
									} 
						else {
							$error= "Error deleted record ";
							}
					}	
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>	BOOTSTRAP</title>
    <link href="boot/css/bootstrap.min.css"  type="text/css" rel="stylesheet">
	<link href="boot/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="boot/css/bs1.css"  type="text/css" rel="stylesheet">
	<style>
	.errorMsg{color:red;}
	.sucessMsg{color:green;}
	</style>
	
</head>

<body>

	<div class="container" style="padding:auto;">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
				
				</div>	<div>
						<?php if($error!=""){?>
							<div class="col-md-12">
								<h4 class="errorMsg"><?php echo $error;?></h4>
							</div>
						<?php }?>
						<?php if($success!=""){?>
							<div class="col-md-12">
								<h4 class="sucessMsg"><?php echo $success;?></h4>
							</div>
						<?php }?>
						</div>
				<form method="POST">
					<div class="row">
						<div class="col-md-12 ">
							
						</div>				
					</div>
				</form>
						
							
					
					
		</div>
	</div>
</div>
</html>