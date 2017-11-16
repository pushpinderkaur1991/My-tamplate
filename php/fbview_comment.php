<?php
session_start();
if(isset ($_SESSION['email'], $_SESSION['password'])){
	header('location:fb.php'); 
}
$id = 0;
include('db.php');

if(!isset ($_SESSION["userid"])){
	header('fb_login.php'); 
}else{
	$userid = $_SESSION["userid"];
}
if($_GET['id'])
{
	$id=$_GET['id'];
}
               
$query = "SELECT m.firstname, m.lastname, f.title, f.description,f.id from member as m INNER JOIN facebook as f ON f.userid=m.id where f.id=$id";
// ORDER BY f.id DESC LIMIT 20
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_array($result);
//$query="SELECT member.firstname, member.lastname , facebook.title, facebook.description, comment_table.comment from((comment_table INNER JOIN member ON comment_table.userid=member.id) INNER JOIN facebook ON comment_table.postid=facebook.id";


		
			$qry="SELECT m.firstname, m.lastname, c.comment from member as m INNER JOIN comment_table as c ON m.id = c.userid where c.postid='".$id."'";		
			$res = mysqli_query($conn,$qry);
		
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
	<link href="boot/css/fb.css"  type="text/css" rel="stylesheet">
</head>

<style>
	.errorMsg{color:red;}
	.sucessMsg{color:green;}
</style>
	
<body style="background-color:#EDEDED;">


<div class="container-fluid" >
	
	<div class="row" style="margin-top:20px;">
		<div class="col-md-3"></div>
			<div class="col-md-5">
				<div style="color:#36648B;background-color:white;padding:5px 20px 20px 20px;font-weight:bold;font-size:20px;"><?php echo $data["firstname"];?>&nbsp;<?php echo $data["lastname"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i><?php echo $data["title"];?>
				</div>
			</div>	
	</div>
	
		<div class="row">
			<div class="col-md-3"></div>
				<div class="col-md-5">
					<div class="text-muted" style="background-color:white;padding:5px 20px 20px 20px;margin-bottom:20px;"><?php echo $data["description"];?>
						<br><br>
						<a href="like.php?id=<?php echo $data['id'];?>" target="_blank" class="text-muted" style="text-decoration:none;font-size:12px;font-weight:bold;"><i class="fa fa-thumbs-up"></i>&nbsp;LIKE</a>
						
						&nbsp;&nbsp;&nbsp;
						
						<a href="fb_comment.php?id=<?php echo $data['id'];?>" target="_blank" class="text-muted" style="text-decoration:none;font-size:12px;font-weight:bold;"><i class="fa fa-comment"></i>&nbsp;COMMENT</a>
						
						&nbsp;&nbsp;&nbsp;
						
						<a href="" target="_blank" class="text-muted" style="text-decoration:none;font-size:12px;font-weight:bold;"><i class="fa fa-share"></i>&nbsp;SHARE</a>
						
						&nbsp;&nbsp;&nbsp;
						
						
						<a href="fbview_comment.php" target="_blank" class="text-muted" style="text-decoration:none;font-size:12px;font-weight:bold;"><i class="fa fa-eye"></i>&nbsp;VIEW COMMENT</a>
						
						
						<br><br>
						
					<?php while($row = mysqli_fetch_array($res)){
						?>
						<div>
							<div style="border:1px solid gray;color:#36648B;font-weight:bold;padding:10px;">
								<img src="boot/img/login-img.png" height="30" width="30" style="border-radius:50%;">&nbsp;
								<?php echo $row["firstname"];?>&nbsp;<?php echo $row["lastname"];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["comment"];?>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
		</div>
</div>		
</body>
</html>