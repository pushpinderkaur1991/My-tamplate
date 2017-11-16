<?php

$fnErr = $lnErr = $companyErr = $designationErr = $emailErr= $password =$cpassword="";


	if(isset($_POST['submit']))
	{
		
		//print_r($_POST);
		if ($_POST["fn"]=="") 
		{
			echo "<script>alert('First Name is required')</script>";
		}else 
		{
			echo  $fn=$_POST["firstname"];
		}
		
		
	
		
		if ($_POST["ln"]=="") 
			{
			echo  "<script>alert('First Name is required')</script>";
			} 
				else 
				{
					echo $ln=$_POST["lastname"];
				}
				
				
				if ($_POST["company"]=="") 
				{
				echo  "<script>alert('First Name is required')</script>";
				} 
				else 
				{
					echo $company=$_POST["company"];
				}
				
				if ($_POST["designation"]=="") 
			{
				echo  "<script>alert('First Name is required')</script>";
			} 
				else 
				{
					echo  $designation=$_POST["designation"];
				}
				
				
				if ($_POST["email"]=="") 
			{
				echo "<script>alert('First Name is required')</script>";
			} 
				else if(!filter_var("email", FILTER_VALIDATE_EMAIL)) 
					{
					   echo "Invalid email format"; 
					}
			
				else 
				{
					echo  $email=$_POST["email"];
				}
				
				
				
				
				
				if ($_POST["password"]=="") 
			{
			echo  "<script>alert('password is required')</script>";
			} 
			elseif(strlen(trim($_POST["password"])) < 6)
			{
				echo "password atleast six charactors";
			}
				else 
				{
					echo  $password=$_POST["password"];
				}
				
				
				
				if ($_POST["cpassword"]=="") 
			{
			echo  "<script>alert('conform-password is required')</script>";
			} 
			 elseif($_POST["password"]!=$_POST["cpassword"])
			 {
				 echo "password not match";
			 }
				else 
				{
					echo  $_POST["cpassword"];
				}
				
			
			
			function test_input($data) 
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
	}	

      