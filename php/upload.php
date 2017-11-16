<?php

echo $name= $_FILES['fileToUpload']['name'];

print_r($_FILES);
echo $tmp_name=$_FILES['fileToUpload']['tmp_name'];

if(isset($name))
{
	if(!empty($name))
	{
		$location="C:/xampp/htdocs/php/uploadfile/";
		if(move_uploaded_file($tmp_name,$location.$name))
		{
			echo"uploaded sucessfully";
		}
		else
			echo"choose a file";
	}
}

?>
