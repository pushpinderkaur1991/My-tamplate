<?php
session_start();

if(!isset ($_SESSION["user_id"])){
	header('location:login_session.php'); 
}
				
			
?>

<html>
	<body>
		<h3>Welcome</h3>	
	</body>
</html>


