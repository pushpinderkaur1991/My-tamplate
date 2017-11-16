<?php 


include('db.php');
	$error="";
	$success = "";
	
	// get id from url
	if(!isset($_GET["id"])){
			header(''); 
		}else{
			$id = $_GET["id"];
		}
			$query= "SELECT* from title where title_id=".$id;
			$result = mysqli_query($conn,$query);
			$data = mysqli_fetch_array($result);	
	
		if(isset($_POST['submit']))
			{
				if($_POST['title']=="")
				{
					$error="TITLE is required";
				}
				else if($_POST['description']=="")
					{
						$error="DESCRIPTION is required";
					}
					
					else{
						
						$sql = "UPDATE title SET title.title='".$_POST['title']."',title.description='".$_POST['description']."' where title_id=$id";
												
								if (mysqli_query($conn, $sql)) {
								$error ="Record updated successfully";
										} 
							else {
								$error= "Error updating record ";
								}
									$query= "SELECT* from title where title_id=".$id;
									$result = mysqli_query($conn,$query);
									$data = mysqli_fetch_array($result);
								
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
	<div class="container" style="border-color:black;border-style:solid; padding:auto;">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-1 hidden-xs"></div>
						<div class="col-md-10 text-center text-muted" >
							<h2> Action points on how to use Artificial Intelligence for B2B lead generation</h2>
						</div>
				</div>	
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
				<form method="POST">
					<div class="row">
						<div class="col-md-3"></div>
							<div class="col-md-6">
								<input style="width:80%;height:50px;" type="text" placeholder="TITLE" name="title" value="<?php echo $data["title"] ?>" />
							</div>	
					</div><br>
					<div class="row">
						<div class="col-md-3"></div>
							<div class="col-md-6">
								<textarea style="width:80%;height:50px;" name="description" placeholder="DESCRIPTION"><?php echo $data["description"];?></textarea>
							</div>
						</div>
						<br>
					<div class="row">
						<div class="col-md-12 ">
							<input class="btn btn-primary" style="width:320px; height:40px;margin-left:350px;" type="submit" name="submit" id="sign-btn" value="CLICK HERE">
						</div>				
					</div>
				</form>
						
							
					
					
		</div>
	</div>
</body>
</html>