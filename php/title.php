<?php 
session_start();

if(isset ($_SESSION["submit"]))
	header('location:title_login.php'); 
    include('db.php');
	
	$error="";
	$success = "";
	if(!isset ($_SESSION["userid"])){
		    header('location:title_login.php'); 
				}else{
					$id = $_SESSION['userid'];
				}
			
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
						
					$query= "INSERT INTO title(title,description,userid) VALUES('" . $_POST["title"] . "', '" . $_POST["description"] . "','".$id."')";
						
						if(mysqli_query($conn,$query))
							{
								$success = "DATA SUCESSFULLY INSERTED";
							}
							else
							{
								$error="data already exist";
							}
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
	<link href="boot/css/bs1.css"  type="text/css" rel="stylesheet">
	<style>
	.errorMsg{color:red;}
	.sucessMsg{color:green;}
	</style>
	
</head>

<body>
</body>
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
								<input style="width:80%;height:50px;" type="text" placeholder="TITLE" name="title" value="" />
							</div>	
					</div><br>
					<div class="row">
						<div class="col-md-3"></div>
							<div class="col-md-6">
								<textarea style="width:80%;height:50px;" name="description" placeholder="DESCRIPTION"></textarea>
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
</div>
</body>
</html>