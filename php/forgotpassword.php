<?php 

session_start();
include('db.php');
				
	$error="";
	$success = "";
		
if($_GET['id'])
{
	$id=$_GET['id'];
}
		
			if(!isset ($_SESSION["user_id"])){
			header(''); 
		}else{
			$id = $_SESSION['user_id'];
		}
			//$query= "SELECT* from member where id=".$id;
			//$result = mysqli_query($conn,$query);
			//$data = mysqli_fetch_array($result);
		
		if(isset($_POST['submit']))
		{
			if($_POST['password']=="")
				{
					$error="password is required";
				}
				else if(strlen(trim($_POST["password"])) < 6)
						{
						  $error="password atleast six charactors";
						}
						else if($_POST["password"]!=$_POST["cpassword"])
						{
							$error="password should not match";
						}
				
					else	
						{
							$sql = "UPDATE member SET password='".md5($_POST['password'])."' WHERE id=$id";
							
							if (mysqli_query($conn, $sql)) {
								$error ="Record updated successfully";
									} 
									else {
										$error= "Error updating record ";
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
	<link href="boot/css/jquery.bxslider.min.css" type="text/css" rel="stylesheet">
	
	<link href="boot/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="boot/css/bs1.css"  type="text/css" rel="stylesheet">
	<style>
	.errorMsg{color:red;}
	.sucessMsg{color:green;}
	</style>
	
</head>
<body style="background-color:#F5F5F5;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 hidden-xs">
			</div>
				<div class="col-md-3" style="margin-left:40px;">
				<img alt="logo" src="boot/img/logo.png" width="160" height="120">
				</div>
			
				<div class="container">
					<div class="col-md-3 hidden-xs">
					</div>
							<div class="col-md-9 pull-right">
								<div class="form-form col-md-7" style="background-color:white;padding:20px;">
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
								
									<fieldset>
										<legend class="text-primary" style="font-size:15px;";>
											<?php echo"Forgot Password";?>
										</legend>
										<form action="" method="post">
											<p class="text-muted" style="font-size:14px;"><?php echo"Enter your New Password below:";?></p>
												<div class="form-group">
												
													<input type="password" name="password" class="form-control" placeholder="new password"  value="">
													
												</div>
												
												<div class="form-group">
												<input type="password" name="cpassword" class="form-control" placeholder="conform password"  value="">
												</div>
													<div>
													
														<input style="width:90px;height:40px;margin-left:140px;" class="btn btn-primary" type="submit" name="submit" id="sign-btn" value="save">
																	
													</div>
											</form>				
									</fieldset>
									
								</div>
							</div>	
				</div>
		</div>			
	</div><br><br><br><br>
	<div><p class="text-muted" style="font-size:11px;margin-left:550px;">© 2017 EASYLEADZ. All rights reserved<p></div>
</body>
</html>