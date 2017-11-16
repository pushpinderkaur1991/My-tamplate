<?php

session_start();
if(isset ($_SESSION['email'], $_SESSION['password'])){
	header(''); 
}
include('db.php');


	
if(!isset ($_SESSION["userid"])){
	header('fb_login.php'); 
}else{
	$userid = $_SESSION["userid"];
}

$id = 0;
if($_GET['id']){
		$id = $_GET['id'];
}	
	
		

$query=mysqli_query($conn,"SELECT post_like from facebook WHERE id='".$id."'");
$row  = mysqli_fetch_array($query);
	if($row>0) {
		$like=$row['post_like']+1;
		$sql = "UPDATE facebook set post_like=$like where id=$id";
		$res=mysqli_query($conn,$sql);
		if($res)
			echo "Success";
		else
			echo "Error";
	}else{
		echo "Invalid post data";
	}
die;
?>

<script>
$(document).ready(function(){
$("#id").click(function(){
    $.get("fb_like.php", function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
});
});
</script>
