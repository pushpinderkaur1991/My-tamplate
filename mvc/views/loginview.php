
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>	BOOTSTRAP</title>
    <link href="views/boot/css/bootstrap.min.css"  type="text/css" rel="stylesheet">
	<link href="views/boot/css/jquery.bxslider.min.css" type="text/css" rel="stylesheet">
	
	<link href="views/boot/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="views/boot/css/bs1.css"  type="text/css" rel="stylesheet">
</head>

<body style="background-color:#F4F4F4;">

	<div class="container">
		<div class="row">
			
		</div>	
        <div class="card card-container" style="background-color:#5B5B5B; box-shadow:0px 0px 30px #5B5B5B">
			<img id="profile-img" class="profile-img-card" src="views/boot/img/login-img.png"/>
				<p id="profile-name" class="profile-name-card"></p>
					
					<?php if($success!=""){?>
						<div class="col-md-12">
							<h6 style="color:green;"><?php echo $success;?></h6>
						</div>
					<?php }?>
					<?php if($error!=""){?>
						<div class="col-md-12">
							<h6 style="color:red;"><?php echo $error;?></h6>
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
				
					<input class="btn btn-primary" style="width:320px; height:40px;" type="submit" name="submit" id="sign-btn" value="LOGIN">
				</form>
						
				<a href=""  class="forgot-password" style="text-decoration:none;">
					<?php echo"Forgot the password?";?></a>
			<br>
				<a href="registration.php" class="forgot-password" style="text-decoration:none;">
					<?php echo"SIGNUP NOW";?>
				</a>
        </div>
    </div>
	 
</body>
</html>