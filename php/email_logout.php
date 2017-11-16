<?php
session_start();


include('db.php');

if(!isset ($_SESSION["userid"])){
	header('location:email_login.php'); 
}else{
unset($_SESSION['userid']);
session_destroy();
header('Location:email_login.php');
exit;
}
?>              



