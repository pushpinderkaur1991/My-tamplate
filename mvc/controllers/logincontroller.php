<?php
session_start();
if(isset($_SESSION["userid"]))
{
	//header();
}
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
			
			if(isset($_POST['submit']))
			{
				if($_POST['email']=="")
				{
					$error="Email is required";
				}	
				else if($_POST['password']=="")
				{
					$error="Password is required";
				}	
				else{
					$reslt=$this->models->getlogin('email', 'password', 'required');
					if($reslt=='true')
						
					{
						$success = "User Login";
					}
					else
					{
						$error =  "Email or Password incorrect";
					}
				}
			}
			include 'views/loginview.php';
		}
	}
?>