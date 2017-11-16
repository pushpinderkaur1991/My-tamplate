<?php

$email = "";
if(isset($_COOKIE['emailcookie']))
{
  //$email = isset($_COOKIE['emailcookie']); 
  $email = "";
  
if($_COOKIE['emailcookie']==md5($_POST['email']))
{
	
	echo "<script type='text/javascript'>alert('Email already exist ')</script>";
}
}
else
		{
	if($_POST){
		if(isset($_POST['remember'])){
			setcookie('emailcookie', md5($_POST['email']), time() + (86400 * 30), "/");
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
	
</head>

<body class="bglogin">

	<div class="container">
		<div class="row">
			<div class="col-md-offset-6 col-md-4">
				<img alt="logo" src="boot/img/logo.png" width="128" height="80">
			</div>
		</div>	
        <div class="card card-container">
			
            
				<img id="profile-img" class="profile-img-card" src="boot/img/login-img.png"/>
					<p id="profile-name" class="profile-name-card"></p>
						
						<form class="form-signin" action="cookie1.php" method="post">
						
							<span id="reauth-email" class="reauth-email"></span>
								<input type="email" value="<?php echo $email?>" id="emailid" name="email" class="form-control" placeholder="Email address" required autofocus>
								<span name="emailErr"></span>
								
								<input type="password" id="passwordid" name="password" class="form-control" placeholder="Password" required>
								<span name="passwordErr"></span>
								
							<div id="remember" class="checkbox">
								<label class="white-text">
									<input  type="checkbox" name="remember" value="1" ><?php echo" Remember me";?>
								</label>
							</div>
							
					<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="login"><?php echo"Sign in";?></button>
						</form>
									
								<a href="#" class="forgot-password">
									<?php echo"Forgot the password?";?>
								</a>
        </div>
    </div>

	
<script src="boot/js/jquery.min.js"></script>
<script src="boot/js/bootstrap.min.js"></script>
<script src="boot/js/jquery.bxslider.min.js"></script>

	
	

</body>
</html>



