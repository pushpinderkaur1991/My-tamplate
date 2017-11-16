<?php 
include('db.php');
	
$error="";
$success = "";
			
			if(isset($_POST['submit']))
			{
				if($_POST['image']=="")
				{
					$error="IMAGE is required";
				}
					else if($_POST['title']=="")
					{
						$error="TITLE is required";
					}
					else if($_POST['description']=="")
						{
							$error="DESCRIPTION is required";
						}
					
					else{
						$name=$_FILES["image"]["name"];
						
						//$tmp_name=$_FILES['file']['type'];
						//$location="C:\xampp\htdocs\filename\upload";
						
						//if(move_uploaded_file($tmp_name,$location,$name))
							{
						    $query= "INSERT INTO image(image_name,title,description) VALUES('".$_POST['image']."','" . $_POST["title"] . "', '" . $_POST["description"] ."')";
							}		
							if(mysqli_query($conn,$query))
								{
									$success = "DATA SUCESSFULLY INSERTED";
								}
								else
								{
									$error="error";
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
	<div class="container" style="border-color:black;border-style:solid; padding:auto;">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-1 hidden-xs"></div>
						<div class="col-md-10 text-center text-muted" >
						
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
								<input type="file" name="image" value="image" />
							</div>	
					</div><br>
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
							<input class="btn btn-primary" style="width:180px; height:40px;margin-left:400px;" type="submit" name="submit" id="sign-btn" value="SUBMIT">
						</div>				
					</div>
				</form>
		</div>
	</div>
</div>
</body>
</html>