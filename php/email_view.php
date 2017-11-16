<?php
session_start();
if(isset ($_SESSION["email"], $_SESSION['password'])){
	header('location:table_login.php'); 
}

include('db.php');

if(!isset ($_SESSION["userid"])){
	header('location:table_login.php'); 
}else{
	$id = $_SESSION['userid'];
}
               
$query = "SELECT member.firstname ,email_table.message, email_table.subject from email_table INNER JOIN member ON email_table.email=member.email ORDER BY email_id DESC LIMIT 20";

$result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="boot/css/bootstrap.min.css"  type="text/css" rel="stylesheet">
	<link href="boot/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	 
		
</head>
<body>
	<div class="container">
		<div class="row">
		
		
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th class="text-muted text-center" style="width:300px;">NAME</th>
						<th class="text-muted text-center" style="width:700px;">SUBJECT</th>
						<th class="text-muted text-center" style="width:700px;">MESSAGE</th>
						<th class="text-muted text-center"></th>
						
					</tr>
					<?php while($data = mysqli_fetch_array($result)){ ?>
						<tr>
							<th class="text-center"><?php echo $data['firstname'];?></th>
							<th class="text-center"><?php echo $data['subject'];?></th>
							<th class="text-center"><?php echo $data["message"];?></th>
							<th class="text-center">
								<form method="post">
									<a href="email_delete.php?id=<?php echo $data['email_id']?>" target="_blank" onclick="return confirm('Are you sure you want to delete?')"> <i class="fa fa-trash"></i></a>
								</form>
							</th>
						</tr>
					<?php } ?>	
						
				</table>
			</div>			
		</div>		
	</div>	
</body>
</html>


