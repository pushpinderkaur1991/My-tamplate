<?php 
session_start();
if(isset ($_SESSION["email"], $_SESSION['password'])){
	header('location:fb_comment.php'); 
}


include('db.php');
				
	$error="";
	$success = "";
	
    
	if(isset($_POST['submit']))
		{
			$email = $_POST['email'];
			$password=	$_POST['password'];
			
			
			
			if($_POST['email']=="")
				{
					$error="Email is required";
				}	
				else if($_POST['password']=="")
				{
					$error="password is required";
				}	
				else 
					{
					$result= mysqli_query($conn,"SELECT id,email,password from member WHERE email= '".$email."' and password='".md5($password)."'"); 
							
								$row  = mysqli_fetch_array($result);
								if($row>0) {
									$_SESSION["userid"] = $row['id'];
									
									
									header('location:fb.php');
								} else {
									$error = "Invalid Username or Password!";
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

<body class="bglogin1">

	<div class="container">
		<div class="row">
			<div class="col-md-offset-6 col-md-4">
				<img alt="logo" src="boot/img/logo.png" width="128" height="80">
			</div>
		</div>	
        <div class="card card-container">
			
            
				<img id="profile-img" class="profile-img-card" src="boot/img/login-img.png"/>
					<p id="profile-name" class="profile-name-card"></p>
						
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
						
							
						<form class="form-signin" action="" method="post">
						
							<span id="reauth-email" class="reauth-email"></span>
								<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address">
								<span name="emailErr"></span>
								<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
								<span name="passwordErr"></span>
								
							<div id="remember" class="checkbox">
								<label class="white-text">
									<input  type="checkbox" value="remember-me"><?php echo" Remember me";?>
								</label>
							</div>
							
							
								<input class="btn btn-primary" style="width:320px; height:40px;" type="submit" name="submit" id="sign-btn" value="signin">
									</form>
									<a href="#" class="forgot-password">
										<?php echo"Forgot the password?";?>
									</a>
        </div>
    </div>
</body>
</html>