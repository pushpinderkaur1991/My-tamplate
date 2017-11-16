<?php
session_start();
if(isset ($_SESSION["email"], $_SESSION['password'])){
	header('location:table_login.php'); 
}
$id = 0;
include('db.php');

if(!isset ($_SESSION["userid"])){
	header('location:table_login.php'); 
}else{
	$id = $_SESSION['userid'];
}
               
$query = "SELECT  member.firstname, member.company, member.designation, member.email, title.title,title.title_id, title.description from title INNER JOIN member ON title.userid =member.id where title.userid=$id";
//
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
		<button style="margin-left:500px;"><a href="title.php" target="_blank" class="btn">ADD</a></button>
		<button><a href="table_logout.php?id=<?php echo $data['title_id']?>"  onclick="return confirm('Are you sure you want to logout?')">LOGOUT</a></button>
		
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th class="text-muted text-center">FIRSTNAME</th>
						<th class="text-muted text-center">EMAIL</th>
						<th class="text-muted text-center">COMPANY</th>
						<th class="text-muted text-center">DESIGNATION</th>
						<th class="text-muted text-center">TITLE</th>
						<th class="text-muted text-center" width="350">DESCRIPTION</th>
						<th class="text-muted text-center"></th>
					</tr>
					<?php while($data = mysqli_fetch_array($result)){ ?>
						<tr>
							<th class="text-center"><?php echo $data['firstname'];?></th>
							<th class="text-center"><?php echo $data["email"];?></th>
							<th class="text-center"><?php echo $data["company"];?></th>
							<th class="text-center"><?php echo $data["designation"];?></th>
							<th class="text-center"><?php echo $data["title"];?></th>
							<th class="text-center"><?php echo $data["description"];?></th>
							<th class="text-center">
								<form method="post">
									<a href="table_edit.php?id=<?php echo $data['title_id']?>" target="_blank" class="btn"> <i class="fa fa-pencil-square"></i></a>
									<a href="table_delete.php?id=<?php echo $data['title_id']?>" target="_blank" onclick="return confirm('Are you sure you want to delete?')"> <i class="fa fa-trash"></i></a>
								</form>
							</th>
						</tr>
					<?php } ?>	
						
				</table>
			</div>			
		</div>		
	</div>	
<script src="boot/js/jquery.min.js"></script>
<script src="boot/js/bootstrap.min.js"></script>

<script>	
/*$(document).ready(function title() {
			$('#edit').click(function title(){
			window.location("title.php?showpopup=yes");
			});
		});*/
</script>
</body>
</html>


