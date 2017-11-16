<?php

$fnErr = $lnErr = $companyErr = $designationErr = $emailErr= $password =$cpassword="";


	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		//print_r($_POST);
		if ($_POST["fn"]=="") 
		{
			echo "First Name is required";
		}else 
		{
			echo  $_POST["fn"];
		}
		
		
	
		
		if ($_POST["ln"]=="") 
			{
			echo  "Last Name is required";
			} 
				else 
				{
					echo $ln= $_POST["ln"];
				}
				
				
				if ($_POST["company"]=="") 
				{
				echo  "company name is required";
				} 
				else 
				{
					echo $_POST["company"];
				}
				
				if ($_POST["designation"]=="") 
			{
				echo  "designation is required";
			} 
				else 
				{
					echo  $_POST["designation"];
				}
				
				
				if ($_POST["email"]=="") 
			{
				echo "email is required";
			} 
				else if(!filter_var("email", FILTER_VALIDATE_EMAIL)) 
					{
					   echo "Invalid email format"; 
					}
			
				else 
				{
					echo  $_POST["email"];
				}
				
				
				
				
				
				if ($_POST["password"]=="") 
			{
			echo  "password is required";
			} 
			elseif(strlen(trim($_POST["password"])) < 6)
			{
				echo "password atleast six charactors";
			}
				else 
				{
					echo  $_POST["password"];
				}
				
				
				
				if ($_POST["cpassword"]=="") 
			{
			echo  "password is required";
			} 
			 elseif($_POST["password"]!=$_POST["cpassword"])
			 {
				 echo "password not match";
			 }
				else 
				{
					echo  $_POST["cpassword"];
				}
				
			
			
			function test_input($data) 
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
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
										<form action="sign.php" method="post">
											<p class="text-muted"><?php echo"Enter your personal details below:";?></p>
												<div class="form-group">
													<input type="text" name="fn" class="form-control" placeholder="First Name" id="fn" value="">
													
														
												</div>
												
												<div class="form-group">
													<input type="text" name="ln" class="form-control" placeholder="Last Name" id="ln" value="">
													
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
																	<a href="login.php"><?php echo"Log-in";?></a>					
																</p>
																	
																		<button class="btn btn-primary" id="sign-btn">
																			<?php echo"Submit";?> <i class="fa fa-arrow-circle-right"></i>
																		</button>
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