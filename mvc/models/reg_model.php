<?php
require_once("models/reg_model.php");

class Registration
{  
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "employee";
	public  $conn='';
	
	function __construct() 
	{  
		$this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
		if (!$this->conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		 "Connected successfully";
	}

	public function getregister()
	{
		
		$query= "insert into reg_mvc(firstname,lastname,company,designation,email,password) values('" . $_POST["firstname"] . "', '" . $_POST["lastname"] . "', '" . $_POST["company"] . "', '" . $_POST["designation"] . "', '" . $_POST["email"] . "', '" .md5($_POST["password"]). "')";
			$reslt = mysqli_query($this->conn,$query);
				if($reslt)
				{
					return $query;
				}	else{
					return false;
				}				
	}



	public function getlogin()
	{
		$res= mysqli_query($this->conn,"select id ,email,password from reg_mvc where email='".$_POST['email']."' and password='".md5($_POST['password'])."' ");
		$row  = mysqli_fetch_array($res);
	
		if($row>0) {
			$_SESSION["userid"] = $row['id'];
			return 'true';
		} else {
			return 'false';
		}
				
	}
	public function getimage()
	{
		$query= "INSERT INTO image_mvc(image,title,description) VALUES('".$_POST['image']."','" . $_POST["title"] . "', '" . $_POST["description"] ."')";
						
			$res=mysqli_query($this->conn,$query);
				if($res)
				{
					return 'true';
				}
				else
				{
					return 'false';
				}
	}
	
	public function showimage()
	{
		$qry= mysqli_query($this->conn,"SELECT * from image_mvc ORDER BY id DESC ");
		$data = mysqli_fetch_array($qry);
		return $data;
	}
}
?>










