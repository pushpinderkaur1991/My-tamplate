<?php
require_once('models/reg_model.php');

class Controller 
{
	private $model;
	public function __construct()  
	{  
		$this->models = new Registration();
	}
	
		public function viewdata()
		{
			$success = "";
			$error = "";
			
			$firstname="";
			$lastname="";
			$company="";
			$designation="";
			$email= "";
			$password="";
			$cpassword="";
			if(isset($_POST['submit']))
			{
				$firstname=	$_POST['firstname'];
				$lastname=	$_POST['lastname'];
				$company= $_POST['company'];
				$designation=$_POST['designation'];
				$email = $_POST['email'];
				$password=	$_POST['password'];
				$cpassword=	$_POST['cpassword'];
				
				if($_POST['firstname']=="")
				{
					$error="FirstName is required";
				}
				else if (!preg_match("/^[a-zA-Z ]*$/",$_POST['firstname']))  
				{
						$error ="Special Characters not allowed";
				}
				else if($_POST['lastname']=="")
					{
						$error="Last Name is required";
					}
					
					else if($_POST['company']=="")
					{
						$error="Company is required";
					}else if($_POST["designation"]=="") 
					{
						$error="Designation is required";
					}
					else if($_POST['email']=="")
					{
						$error="Email is required";
					}	
						elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
						{$error="Email is not valid";}
					
					
					else if($_POST['password']=="")
					{
						$error="password is required";
					}
						else if(strlen(trim($_POST["password"])) < 6)
						{
						  $error="password atleast six charactors";
						}
						else if($_POST["password"]!=$_POST["cpassword"])
						{
							$error="password should not match";
						}
					else
					{	
						$result = $this->models->getregister();
						if($result)
						{
							$success="Registration Successfully Enter";
						}
						else
						{
							$error="Error";
						}
					}
				
			}
			include 'views/registration_view.php';
		}
}

?>