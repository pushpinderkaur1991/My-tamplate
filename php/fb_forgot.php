<?php 

session_start();
include('db.php');
				
	$error="";
	$success = "";
					
			if(!isset ($_SESSION["user_id"])){
			header(''); 
		}else{
			$id = $_SESSION['user_id'];
		}
			$query= "SELECT email from member where id=".$id;
			$result = mysqli_query($conn,$query);
			$data = mysqli_fetch_array($result);
	
		if(isset($_POST['submit']))
		{
			if($_POST['email']=="")
				{
					$error="Email is required";
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
									
								
									<fieldset>
										<legend class="text-primary"; style="font-size:15px;">
											<?php echo"Reset Password";?>
										</legend>
										<form action="" method="post">
											<p class="text-muted" style="font-size:14px;"><?php echo"Please Enter your Email:";?></p>
												<div class="form-group">
												
													<input type="text" name="email" class="form-control" placeholder="email"  value="">
													<?php if($error!=""){?>
														<div class="col-md-12">
															<h6 class="errorMsg"><?php echo $error;?></h6>
														</div>
													<?php }?>
													<?php if($success!=""){?>
														<div class="col-md-12">
															<h6 class="sucessMsg"><?php echo $success;?></h6>
														</div>
													<?php }?>
												</div>
													<div>
														<button style="width:90px;height:40px;margin-left:140px;font-size:13px;" class="btn btn-primary"><a href="forgotpassword.php?id=<?php echo $data['id'];?>" style="color:black;text-decoration:none;">RESET</a></button>
													</div>
													<hr>
													<div style="margin-left:100px;font-size:14px;">Login?<a href="fb_login.php" style="text-decoration:none;font-size:14px;">Login To Account</a></div>
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