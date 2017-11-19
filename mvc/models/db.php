<?php
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "employee";
	public $conn='';
	
	function __construct() 
	{  
		$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
			
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		//echo "Connected successfully";
	}
?>