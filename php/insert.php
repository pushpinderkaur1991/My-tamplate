<?php 
include('db.php');
		// blank input values at starting
		$error="";
		$success = "";

		$firstname="";
		$lastname="";
		$company="";
		$designation="";
		$email= "";
		$password="";
		$cpassword="";
		
		if(isset($_POST['submit']))
		{
			//  remain data in input values ,after getting an error in one or more inputs....
			$firstname=	$_POST['firstname'];
			$lastname=	$_POST['lastname'];
			$company= $_POST['company'];
			$designation=$_POST['designation'];
			$email = $_POST['email'];
			$password=	$_POST['password'];
			$cpassword=	$_POST['cpassword'];
			
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
					else if($_POST['email']=="")
					{
						$error="Email is required";
					}	
						elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
						{$error="Email is not valid";}
					
					
					else if($_POST['password']=="")
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
							
						$select= mysqli_query($conn,"SELECT email from member WHERE email= '".$email."'"); 
							if(mysqli_num_rows($select)==0)
							{

								$query= "insert into member(firstname,lastname,company,designation,email,password) values('" . $_POST["firstname"] . "', '" . $_POST["lastname"] . "', '" . $_POST["company"] . "', '" . $_POST["designation"] . "', '" . $_POST["email"] . "', '" .md5($_POST["password"]) . "')";
								if(mysqli_query($conn,$query))
									{
										$success = "DATA SUCESSFULLY INSERTED";
									}
							}
								else{
									$error="email already exist";
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
	<link href="boot/css/fb.css"  type="text/css" rel="stylesheet">
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
				<img alt="logo" src="boot/img/logo.png" width="160" height="100">
			</div>
			
	<div class="container">
		<div class="col-md-3 hidden-xs">
		</div>
	<div class="col-md-9 pull-right">
		<div class="form-form col-md-7" style="background-color:white;">
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
		
			<fieldset>
				<legend class="text-primary" style="font-size:16px;">
					<?php echo"SignUp";?>
				</legend>
				<form action="insert.php" method="post">
					<p class="text-muted" style="font-size:14px;"><?php echo"Enter your personal details below:";?></p>
						<div class="form-group">
							<input type="text" name="firstname"    class="form-control" placeholder="First Name" id="fn" value="<?php echo $firstname?>">
						</div>
						
						<div class="form-group">
							<input type="text" name="lastname"  class="form-control" placeholder="Last Name" id="ln" value="<?php echo $lastname?>">
						</div>
						
						<div class="form-group">
							<input type="text" name="company"  class="form-control" placeholder="Company" id="company" value="<?php echo $company?>">
						</div>
						
						<div class="form-group">
							<input type="text" name="designation"   class="form-control" placeholder="Designation" id="designstion" value="<?php echo $designation?>">
						</div>
						
						
							<p class="text-muted"style="font-size:14px;"><?php echo"Enter your account details below:";?></p>
							
								<div class="form-group" style="border: 1px solid #E3E3E3;">
									<i class="fa fa-envelope text-primary"> </i>
										<input style="width:88%;border:none;" type="text"  name="email" class="form-control pull-right" placeholder="Email" id="email" value="<?php echo $email?>" />
								</div>
								
								<div class="form-group" style="border: 1px solid #E3E3E3;">
									<i class="fa fa-lock text-primary"> </i>
										<input style="width:88%;border:none;" type="password" name="password" class="form-control pull-right" placeholder="Password" id="email" value=""/>
								</div>
								
								<div class="form-group" style="border: 1px solid #E3E3E3;">
									<i class="fa fa-lock text-primary"> </i>
										<input style="width:88%;border:none;" type="password" name="cpassword" class="form-control pull-right" placeholder="Conform Password" id="email" value=""/>
								</div>
								
									<div>
										<p class="text-muted" style="font-size:13px;"><?php echo"Already have an account?";?>
											<a href="fb_login.php" style="font-size:14px;" id="text"><?php echo"LOGIN HERE";?></a><br><br>		
											<a href="login_sign.php" style="font-size:15px;" id="text1"><?php echo"EDIT YOUR DETAIL HERE";?></a>
										</p>
											
										<input class="btn btn-primary" type="submit" name="submit" id="sign-btn" value="save">
									</div>
								</form>				
						</fieldset><br>
					</div>
				</div>	
			</div>
		</div>			
	</div>
</body>
</html>