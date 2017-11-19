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
	<link href="views/boot/css/fb.css"  type="text/css" rel="stylesheet">
	<!--<style>
	.errorMsg{color:red;}
	.sucessMsg{color:green;}
	</style>-->
</head>


<body style="background-color:#F5F5F5;">
<div class="container">
	<div class="row">
		<div class="col-md-4 hidden-xs">
		</div>
			
			
	<div class="container">
		<div class="col-md-3 hidden-xs">
		</div>
	<div class="col-md-9 pull-right">
		<div class="form-form col-md-7" style="background-color:white;">
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
		
			<fieldset>
				<legend class="text-primary" style="font-size:16px;">
					<?php echo"SignUp";?>
				</legend>
				
				<form action="" method="post">
					<p class="text-muted" style="font-size:14px;"><?php echo"Enter your personal details below:";?></p>
						<div class="form-group">
							<input type="text" name="firstname" class="form-control" placeholder="First Name" id="fn" value="<?php echo $firstname?>">
						</div>
						
						<div class="form-group">
							<input type="text" name="lastname" class="form-control" placeholder="Last Name" id="ln" value="<?php echo $lastname?>">
						</div>
						
						<div class="form-group">
							<input type="text" name="company" class="form-control" placeholder="Company" id="company" value="<?php echo $company?>">
						</div>
						
						<div class="form-group">
							<input type="text" name="designation" class="form-control" placeholder="Designation" id="designation" value="<?php echo $designation?>">
						</div>
						
						
							<p class="text-muted"style="font-size:14px;"><?php echo"Enter your account details below:";?></p>
							
								<div class="form-group" style="border: 1px solid #E3E3E3;">
									<i class="fa fa-envelope text-primary"> </i>
										<input style="width:88%;border:none;" type="text"  name="email" class="form-control pull-right" placeholder="Email" id="email" value="<?php echo $firstname?>" />
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
											<a href="" style="font-size:14px;" id="text"><?php echo"LOGIN HERE";?></a><br><br>		
											<a href="" style="font-size:15px;" id="text1"><?php echo"EDIT YOUR DETAIL HERE";?></a>
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