<?php 
include('db.php');

if(isset($_POST['submit']))
{
		if ($_POST["firstname"]=="") 
		{
		echo "<script>alert('First Name is required')</script>";
		}
		elseif ($_POST["lastname"]=="") 
		{
		echo  "<script>alert('Last Name is required')</script>";
		} 
		elseif ($_POST["company"]=="") 
		{
		echo  "<script>alert('Company Name is required')</script>";
		} 
		elseif ($_POST["designation"]=="") 
		{
		echo  "<script>alert('Designation is required')</script>";
		} 
		elseif ($_POST["email"]=="") 
		{
		echo "<script>alert('Email is required')</script>";
		} 
		elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
		{
		echo "<script>alert('Invalid email format')</script>"; 
		}
		elseif ($_POST["password"]=="") 
		{
		echo  "<script>alert('password is required')</script>";
		} 
		elseif(strlen(trim($_POST["password"])) < 6)
		{
		echo "password atleast six charactors";
		}
		elseif ($_POST["cpassword"]=="") 
		{
		echo  "<script>alert('conform-password is required')</script>";
		} 
		elseif($_POST["password"]!=$_POST["cpassword"])
		{
		echo "<script>alert('password not match')</script>";
		}
		else {
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$company=$_POST['company'];
			$designation=$_POST['designation'];
			$email=$_POST['email'];
			$password=md5($_POST['password']);
			
			$query= "insert into member(firstname,lastname,company,designation,email,password) values('$firstname','$lastname','$company','$designation','$email','$password')";
			if(mysqli_query($conn,$query))
			{
				
				echo"<script>alert('New Records inserted successfully')</script>";
			}
				

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
									<fieldset>
										<legend class="text-primary";>
											<?php echo"SignUp";?>
										</legend>
										<form action="sqlsignup.php" method="post">
											<p class="text-muted"><?php echo"Enter your personal details below:";?></p>
												<div class="form-group">
													<input type="text" name="firstname" class="form-control" placeholder="First Name" id="fn" value="">
													
														
												</div>
												
												<div class="form-group">
													<input type="text" name="lastname" class="form-control" placeholder="Last Name" id="ln" value="">
													
												</div>
												
												<div class="form-group">
													<input type="text" name="company" class="form-control" placeholder="Company" id="company" value="">
													<span name="companyErr"></span>
												</div>
												
												<div class="form-group">
													<input type="text" name="designation" class="form-control" placeholder="Designation" id="designstion" value="">
													<span name="designationErr"></span>
												</div>
												
												
													<p class="text-muted"><?php echo"Enter your account details below:";?></p>
													
														<div class="form-group" style="border: 1px solid #E3E3E3;">
															<i class="fa fa-envelope text-primary"> </i>
																<input style="width:88%;border:none;" type="text" name="email" class="form-control pull-right" placeholder="Email" id="email" value=""/>
																<span name= "emailErr"></span>																
														
														</div>
														
														<div class="form-group" style="border: 1px solid #E3E3E3;">
															<i class="fa fa-lock text-primary"> </i>
																<input style="width:88%;border:none;" type="password" name="password" class="form-control pull-right" placeholder="Password" id="email" value=""/>
																<span name="passwordErr"></span>	
														
														</div>
														
														<div class="form-group" style="border: 1px solid #E3E3E3;">
															<i class="fa fa-lock text-primary"> </i>
																<input style="width:88%;border:none;" type="password" name="cpassword" class="form-control pull-right" placeholder="Conform Password" id="email" value=""/>
																<span name="cpasswordErr"></span>	
														
														</div>
														
															<div>
																<p class="text-muted"><?php echo"Already have an account?";?>
																	<a href="sqlsignup.php"><?php echo"LOGIN HERE";?></a>					
																</p>
																	
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