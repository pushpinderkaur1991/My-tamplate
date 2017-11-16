<?php 
session_start();

if(isset($_SESSION["submit"]))
	header('location:fb.php'); 
include('db.php');
	
	$error="";
	$success = "";
	
	if($_GET['id']){
		$id = $_GET['id'];
	}		
			
		if(!isset ($_SESSION["userid"])){
		    header('location:fb_login.php'); 
				}else{
					$user_id = $_SESSION['userid'];
					}
			
			if(isset($_POST['submit']))
			{
				if($_POST['comment']=="")
				{
					$error="please enter COMMENT";
				}
				else{
					$query= "INSERT INTO comment_table(comment,userid,postid) VALUES('" . $_POST["comment"] . "','".$user_id."','".$id."'])";
						if(mysqli_query($conn,$query))
							{
								$success = "COMMENT SUCESSFULLY INSERTED";
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

	<div class="container" style="border:1px solid black;padding:auto;">
		<div class="row">
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
					<form method="POST">
						
						<div class="row">
							<div class="col-md-12 ">
							<input style="width:300px;margin-left:400px;margin-top:20px;" type="text" placeholder="write comment....." name="comment" value=""><br><br>
							
								<input class="btn btn-primary" style="width:150px; height:50px;margin-left:490px;margin-bottom:20px;"  type="submit" name="submit" id="sign-btn" value="POST COMMENT">
							</div>				
						</div>
					</form>
		</div>
	</div>
</body>
</html>