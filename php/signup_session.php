<?php 

session_start();
include('db.php');
				
	$error="";
	$success = "";
					
						
			if(!isset ($_SESSION["user_id"])){
			header('location:login_sign.php'); 
		}else{
			$id = $_SESSION['user_id'];
		}
			$query= "SELECT* from member where id=".$id;
			$result = mysqli_query($conn,$query);
			$data = mysqli_fetch_array($result);
		
				
		
		if(isset($_POST['submit']))
		{
				
			
			if($_POST['firstname']=="")
				{
					$error="FirstName is required";
				}
				else if (!preg_match("/^[a-zA-Z ]*$/",$_POST['firstname']))  
				{
						$error ="firstname is not valid";
				}
				else if($_POST['lastname']=="")
					{
						$error="Last Name is required";
					}
					
					else if($_POST['company']=="")
					{
						$error="Company is required";
					}else if($_POST["designation"]=="") 
					{
						$error="Designation is required";
					}
					
						
						 
					else	
						{
							$sql = "UPDATE member SET firstname='".$_POST['firstname']."', lastname='".$_POST['lastname']."',company='".$_POST['company']."',designation='".$_POST['designation']."' WHERE id=$id";
							
							if (mysqli_query($conn, $sql)) {
								$error ="Record updated successfully";
									} 
									else {
										$error= "Error updating record ";
									}
									// show updated records again after updated
							$query= "SELECT* from member where id=".$id;
							$result = mysqli_query($conn,$query);
							$data = mysqli_fetch_array($result);
						}
		}
				function test_input($data) 
					{
						$data = trim($data);
						$data = stripslashes($data);
						$data = htmlspecialchars($data);
						return $data;
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
								<div class="form-form col-md-7" style="background-color:white;">
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
										<legend class="text-primary";>
											<?php echo"SignUp";?>
										</legend>
										<form action="" method="post">
											<p class="text-muted"><?php echo"Enter your personal details below:";?></p>
												<div class="form-group">
													<input type="text" name="firstname"    class="form-control" placeholder="First Name" id="fn" value="<?php echo $data["firstname"];?>">
													
												</div>
												
												<div class="form-group">
													<input type="text" name="lastname"  class="form-control" placeholder="Last Name" id="ln" value="<?php echo $data["lastname"];?>">
													
												</div>
												
												<div class="form-group">
													<input type="text" name="company"  class="form-control" placeholder="Company" id="company" value="<?php echo $data["company"];?>">
													
												</div>
												
												<div class="form-group">
													<input type="text" name="designation"   class="form-control" placeholder="Designation" id="designstion" value="<?php echo $data["designation"];?>">
													
												</div>
													<div>
													
														<input class="btn btn-primary" type="submit" name="submit" id="sign-btn" value="save">
																	
													</div>
											</form>				
									</fieldset>
									
								</div>
							</div>	
				</div>
		</div>			
	</div>


</body>
</html>