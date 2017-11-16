<?php
session_start();
if(isset ($_SESSION['email'], $_SESSION['password'])){
	header('location:fb.php'); 
}
$id = 0;
include('db.php');

if(!isset ($_SESSION["userid"])){
	header('location:fb_login.php'); 
}else{
	$id = $_SESSION["userid"];
}           
$query = "SELECT  m.firstname, m.lastname, f.title, f.description,f.id from facebook as f  JOIN member as m ON f.userid = m.id  where userid = $id ORDER BY f.id DESC LIMIT 20";
// where userid=$id
$result = mysqli_query($conn,$query);
//$query="SELECT member.firstname, member.lastname , facebook.title, facebook.description, comment_table.comment from((comment_table INNER JOIN member ON comment_table.userid=member.id) INNER JOIN facebook ON comment_table.postid=facebook.id";




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
	<div class="row" id="nav-tag">
	
		<div class="col-md-5" style="padding-top:20px;">
			<div class="pull-left">
				<img alt="logo" src="boot/img/fb.png" width="35" height="35" style="margin-left:130px;">
			</div>
				<div class="form-group pull-right" style="width:350px;">
				  <input type="text" class="form-control" placeholder="Search">
				</div>
		</div>
		
		
			<div class="col-md-7">
					<ul class="nav">	
						  <li class="nav-item active">
							<a class="nav-link" href="fb.php"><?php echo"HOME";?> </a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" href="#"><?php echo"FIND FRIENDS";?></a>
						  </li>
						  <li class="nav-itemm">
							<a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i></i></a>
						  </li>
						  <li class="nav-itemm">
							<a class="nav-link" href="#"><i class="fa fa-globe" aria-hidden="true"></i></a>
						  </li>
						  <li class="nav-itemm">
							<a class="nav-link" href="#"><i class="fa fa-question" aria-hidden="true"></i></a>
						  </li>
						   
						   <li class="nav-item">
							<a class="nav-link" href="fb_logout.php"><?php echo"LOGOUT";?></a>
						  </li>
						 
					
			
						<!--<div class="dropdown" style="padding-top:20px;">
							  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								
								<span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li><a href="#">Create page</a></li>
								<li><a href="#">Create Group</a></li>
								<li><a href="#">Login</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Logout</a></li>
							  </ul>
						</div>-->
						
					</ul>		
			</div>	
	</div>	

	<div class="row">
		<div class="col-md-3"></div>
		<div  class="col-md-5">
			<div class="compose-div">
				<a href="fb_title.php" target="_blank" style="color:black;font-weight:bold;text-decoration:none;"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;COMPOSE POST</a>
			</div>	
		</div>	
	</div>
	
	<?php while($data = mysqli_fetch_array($result)){ ?>
	
	<div class="row">
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
						
							<a href="fb_like.php?id=<?php echo $data['id'];?>"  target="_blank" class="text-muted" style="text-decoration:none;font-size:12px;font-weight:bold;" id="page"><i class="fa fa-thumbs-up"></i>&nbsp;LIKE</a>
						
						&nbsp;&nbsp;&nbsp;
						
						<a href="fb_comment.php?id=<?php echo $data['id'];?>" target="_blank" class="text-muted" style="text-decoration:none;font-size:12px;font-weight:bold;"><i class="fa fa-comment"></i>&nbsp;COMMENT</a>
						
						&nbsp;&nbsp;&nbsp;
						
						<a href="" target="_blank" class="text-muted" style="text-decoration:none;font-size:12px;font-weight:bold;"><i class="fa fa-share"></i>&nbsp;SHARE</a>
						
						&nbsp;&nbsp;&nbsp;
						
						<a href="fbview_comment.php?id=<?php echo $data['id'];?>" target="_blank" class="text-muted" style="text-decoration:none;font-size:12px;font-weight:bold;"><i class="fa fa-eye"></i>&nbsp;VIEW COMMENT</a>
						
						
						
					</div>
				</div>
		</div>
		<?php } ?>	
		
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-5">
			<div><?php echo $data["firstname"];?>&nbsp;<?php echo $data["lastname"];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data["comment"];?></div>
		</div>	
	</div>
</div>
<script src="boot/js/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#id").click(function(){
    $.get("fb_like.php", function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
});
});
</script>
</body>
</html>