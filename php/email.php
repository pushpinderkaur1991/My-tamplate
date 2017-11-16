<?php 
session_start();

if(isset ($_SESSION["submit"]))
	header('location:email.php'); 
include('db.php');
	
	$error="";
	$success = "";
	
				
		if(!isset ($_SESSION["userid"])){
		    header('location:email_login.php'); 
				}else{
					$id = $_SESSION['userid'];
				}
			
			if(isset($_POST['submit']))
			{
				if($_POST['email']=="")
				{
					$error="EMAIL is required";
				}
				else if($_POST['subject']=="")
					{
						$error="SUBJECT is required";
					}
					else if($_POST['message']=="")
					{
						$error="MESSAGE is required";
					}
					
					else{
						
					$query= "INSERT INTO email_table(email,subject, message,userid) VALUES('" . $_POST["email"] . "', '" . $_POST["subject"] . "','" . $_POST["message"] . "','".$id."')";
						
						if(mysqli_query($conn,$query))
							{
								$success = "DATA SUCESSFULLY INSERTED";
							}
							else
							{
								$error="ERROR";
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
	<link href="boot/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="boot/css/bs1.css"  type="text/css" rel="stylesheet">
	<style>
	.errorMsg{color:red;}
	.sucessMsg{color:green;}
	</style>
	
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-1 hidden-xs"></div>
						
				</div>	
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
		<div class="row">				
			<div class="col-md-3"></div>
			
				<form method="POST" style="border:1px black solid; height:590px; width:540px">
				<div style="width:540px;height:50px;background-color:#575757;color:white;padding-left:10px;padding-top:5px;">New Message
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<i class="fa fa-window-minimize" style="color:white;font-size:13px;" aria-hidden="true"></i>
				<i class="fa fa-expand" style="color:white;font-size:13px;" aria-hidden="true"></i>
				<i class="fa fa-times" style="color:white;font-size:13px;" aria-hidden="true"></i>
				</div>
				
					<div class="row">
							<div class="col-md-6">
								<input style="width:530px;height:30px;padding-left:10px; border:none;" id="email" type="text" placeholder="TO" name="email" value="" />
							</div>	
					</div><hr>
					
						<div class="row">
							<div class="col-md-6">
								<input style="width:530px;height:30px;padding-left:10px; border:none;" id="email" type="text" placeholder="SUBJECT" name="subject" value="" />
							</div>	
						</div><hr>
					
						<div class="row">
							<div class="col-md-6">
								<textarea style="width:530px;height:320px;border:none;padding-left:10px;" name="message" placeholder="MESSAGE"></textarea>
							</div>
						</div><hr>
						
					<div class="row">
						<div class="col-md-12">
							<input class="btn btn-primary" style="width:70px; height:35px;margin-left:10px;font-size:13px;" type="submit" name="submit" id="sign-btn" value="SEND">
							<button class="btn btn-primary"><a href="email_view.php" target="_blank" style="color:white;font-size:13px;">VIEW EMAILS</a></button>
							<button class="btn btn-primary"><a href="email_logout.php" target="_blank" style="color:white;font-size:13px;">LOGOUT</a></button>
							&nbsp;&nbsp;
							<a href="#" style="color:black;"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
							<i class="fa fa-picture-o" aria-hidden="true"></i>
							<i class="fa fa-smile-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="#" style="color:black;"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
						</div>				
					</div>
				</form>
		</div>		
	</div>
</div>
</div>
</body>
</html>