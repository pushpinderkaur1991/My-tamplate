<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>	BOOTSTRAP</title>
    <link href="views/boot/css/bootstrap.min.css"  type="text/css" rel="stylesheet">
	<link href="views/boot/css/bs1.css"  type="text/css" rel="stylesheet">
	
</head>

<body style="background-color:#F4F4F4;">
	<div class="container" id="frm" style="border-color:black;border-size:1px;padding-top:20px;padding-bottom:20px; width:40%;background-color:white;margin-top:100px;box-shadow:0px 0px 25px black;">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-1 hidden-xs"></div>
						
						<div class="col-md-10 text-center text-muted" >
							<h4> PLEASE UPLOAD IMAGE AND ENTER TITLE AND DESCRIPTION HERE</h4>
						</div>
				</div>	
						<?php if($error!=""){?>
							<div class="col-md-12">
								<h6 style="color:red;"><?php echo $error;?></h6>
							</div>
						<?php }?>
						<?php if($success!=""){?>
							<div class="col-md-12">
								<h6 style="color:red;"><?php echo $success;?></h6>
							</div>
						<?php }?>
				<form method="POST">
				
					<div class="row">
						<div class="col-md-3"></div>
							<div class="col-md-6">
								<input type="file" name="image" value="image" />
							</div>	
					</div><br>
					<div class="row">
						<div class="col-md-3"></div>
							<div class="col-md-6">
								<input style="width:80%;height:50px;" type="text" placeholder="TITLE" name="title" value="" />
							</div>	
					</div><br>
					<div class="row">
						<div class="col-md-3"></div>
							<div class="col-md-6">
								<textarea style="width:80%;height:50px;" name="description" placeholder="DESCRIPTION"></textarea>
							</div>
						</div>
						<br>
					<div class="row">
						<div class="col-md-12 ">
							<!--<input class="btn btn-primary" style="width:80px; height:40px;" type="submit" name="submit" id="sign-btn" value="SUBMIT">-->
							 <button class="btn btn-primary center-block" style="width:80px; height:40px;margin-left:200px;" type="submit" name="submit" id="sign-btn" value="SUBMIT">SUBMIT</button>
						</div>				
					</div>
				</form>
		</div>
	</div>
</div>
</body>
</html>